import { defineConfig, loadEnv } from 'vite';

import Autoprefixer from 'autoprefixer';
import TailwindCSS from 'tailwindcss';
import devManifest from 'vite-plugin-dev-manifest';
import { glob } from 'glob';
import laravel from 'laravel-vite-plugin';
import liveReload from 'vite-plugin-live-reload';
import pluginManifest from 'rollup-plugin-output-manifest';
import { resolve } from 'path';
import { rm } from 'fs';

const { default: outputManifest } = pluginManifest;

export default defineConfig(async ({ mode }) => {
  const isDev = mode === 'development';
  const devServerConfig = loadEnv(mode, process.cwd(), 'HMR');

  if (!isDev) {
    await cleanup();
    await cleanupDevManifest();
  }

  // Find all files from resources/scripts/pages/
  const pagesTSFiles = glob.sync('resources/assets/scripts/pages/**/*.ts');

  const rollupInput = {
    app: resolve(__dirname, 'resources/assets/scripts/app.ts'),
    editor: resolve(__dirname, 'resources/assets/scripts/editor.ts'),
    ...pagesTSFiles.reduce((entries, file) => {
      // Create filename in manifest.json
      const name = file
        .replace(/\\/g, '/')
        .replace(/^resources\/assets\/scripts\//, '')
        .replace(/\.ts$/, '');
      entries[name] = resolve(__dirname, file);
      return entries;
    }, {}),
  };

  return {
    plugins: [
      devManifest(),
      liveReload(resolve(__dirname, 'resources/views/**/*.php')),
      laravel({
        input: [
          'resources/assets/styles/app.css',
          'resources/assets/scripts/app.ts',
          ...pagesTSFiles,
        ],
        refresh: true,
      }),
    ],
    css: {
      // preprocessorOptions: {
      //   scss: {
      //     additionalData:
      //       `@import 'tailwindcss/base';
      //       @import 'tailwindcss/components';
      //      @import 'tailwindcss/utilities';`,
      //     api: 'modern-compiler',
      //   },
      // },
      // postcss: {
      //     plugins: [
      //         TailwindCSS,
      //         Autoprefixer,
      //     ],
      // },
    },
    resolve: {
      alias: {
        '@': resolve(__dirname, 'resources'),
        '@styles': resolve(__dirname, 'resources/assets/styles'),
        '@scripts': resolve(__dirname, 'resources/assets/scripts'),
        '@images': resolve(__dirname, 'resources/assets/images'),
        '@icons': resolve(__dirname, 'resources/assets/icons'),
        '@fonts': resolve(__dirname, 'resources/assets/fonts'),
      },
    },
    base: './',
    build: {
      manifest: isDev,
      assetsDir: 'images',
      emptyOutDir: false,
      outDir: resolve(__dirname, 'public'),
      rollupOptions: {
        input: rollupInput,
        output: {
          chunkFileNames: 'chunks/[name].[hash].js',
          entryFileNames: () => {
            return `[name].[hash].js`;
          },
          assetFileNames: ({ name }) => {
            if (/\.(svg)$/i.test(name)) {
              return `assets/icons/[name].[hash][extname]`;
            }
            if (/\.(png|jpe?g|gif|svg|ico|webp)$/i.test(name)) {
              return `assets/images/[name][extname]`;
            }
            if (/\.(woff|woff2|eot|ttf|otf)$/i.test(name)) {
              return `assets/fonts/[name].[hash][extname]`;
            }
            return `[name].[hash][extname]`;
          },
        },
        plugins: [
          outputManifest({
            fileName: 'manifest.json',
            generate: (KeyValueDecorator, seed, opt) => (chunks) =>
              chunks.reduce((manifest, { name, fileName }) => {
                const cleanedName = name
                  .replace(/^pages\//, '')
                  .replace(/(?<=.)\.(?!js)[^.]+$/, '');

                return name
                  ? {
                      ...manifest,
                      ...KeyValueDecorator(cleanedName, fileName, opt),
                    }
                  : manifest;
              }, seed),
          }),
          outputManifest({
            fileName: 'entrypoints.json',
            nameWithExt: true,
            filter: (bundle) => {
              const { fileName } = bundle;
              return fileName.endsWith('.js') || fileName.endsWith('.css');
            },
            generate: (seed) => (chunks) =>
              chunks.reduce((manifest, { name, fileName }) => {
                const result = {};
                const cleanedName = name
                  .replace(/^pages\//, '')
                  .replace(/.css$/, '');

                const js = manifest[cleanedName]?.js || [];
                const css = manifest[cleanedName]?.css || [];
                const dependencies = manifest[cleanedName]?.dependencies || [];

                const entry = { js, css, dependencies };

                fileName.endsWith('.js') && js.push(fileName);
                fileName.endsWith('.css') && css.push(fileName);

                result[cleanedName] = entry;

                return {
                  ...manifest,
                  ...result,
                };
              }, seed),
          }),
        ],
      },
      minify: true,
      write: true,
    },
    server: {
      host: devServerConfig.HMR_HOST ? devServerConfig.HMR_HOST : 'localhost',
      port: devServerConfig.HMR_PORT
        ? parseInt(devServerConfig.HMR_PORT)
        : 5143,
      https: false,
      strictPort: true,
      origin: devServerConfig.HMR_ENTRYPOINT,
      fs: {
        strict: false,
        allow: ['./public'],
      },
      hmr: {
        host: 'localhost',
      },
      watch: {
        usePolling: true,
        interval: 1000,
      },
    },
  };
});

async function cleanup() {
  rm('public', { recursive: true }, (err) =>
    console.log(`➜ Cleanup public dir: success!`),
  );
}

async function cleanupDevManifest() {
  rm('public/manifest.dev.json', { recursive: true }, (err) =>
    console.log(`➜ Cleanup manifest.dev.json: success!`),
  );
}
