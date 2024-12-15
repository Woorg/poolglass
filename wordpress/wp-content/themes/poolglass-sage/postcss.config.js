/** @type {import('postcss-load-config').Config} */

const config = {
  plugins: {
    'tailwindcss/nesting': 'postcss-nested',
    'postcss-import': {},
    'postcss-simple-vars': {},
    'postcss-mixins': {},

    'postcss-preset-env': {
      autoprefixer: { grid: false },
      stage: 1,
      features: {
        'nesting-rules': true,
        clamp: true,
        'logical-properties-and-values': true,
        'media-query-ranges': {
          preserve: true,
        },
        'custom-properties': true,
      },
    },
    tailwindcss: {},
  },
};

export default config;
