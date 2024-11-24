import type { Config } from 'tailwindcss';
import plugin from 'tailwindcss/plugin';
import typography from '@tailwindcss/typography';
import reset from 'tw-reset';

import fluid, {
  extract,
  screens,
  fontSize,
  type FluidThemeConfig,
} from 'fluid-tailwind';
// import Container from '@/components/layout/Container.vue';
import type { ResolvableTo } from 'tailwindcss/types/config';

import animate from 'tailwindcss-animate';

export default {
  presets: [reset],
  corePlugins: {
    container: false,
  },
  content: {
    files: [
      './index.php',
      './app/**/*.php',
      './resources/**/*.{php,vue,js,css}',
    ],
    extract,
  },
  darkMode: 'class',
  safelist: ['dark'],
  mode: 'jit',
  theme: {
    // screens,
    screens: {
      // xs: '320px',
      sm: '480px',
      md: '768px',
      lg: '999px',
      xl: '1280px',
      // '2xl': '1920px',
    },
    fontSize,
    extend: {
      // screens: {
      //   // xs: '320px',
      //   sm: '480px',
      //   md: '768px',
      //   lg: '1000px',
      //   xl: '1280px',
      //   // '2xl': '1920px',
      // },
      fluid: (({ theme }) => ({
        defaultScreens: [, theme('screens.xl')],
      })) satisfies FluidThemeConfig,
      // fontSize: {
      //   // make in px
      //   xs: '12px',
      //   sm: '14px',
      //   md: '16px',
      //   lg: '18px',
      //   xl: '20px',
      //   '2xl': '24px',
      //   '3xl': '32px',
      //   '4xl': '48px',
      //   '5xl': '64px',
      //   '6xl': '96px',
      //   '7xl': '128px',
      //   '8xl': '256px',
      //   '9xl': '512px',
      //   '10xl': '1024px',
      // },
      fontFamily: {
        // suisse_intl: ['var(--suisse-intl)'],
        raleway: ['var(--raleway)'],
      },
      colors: {
        blue: '#264279',
        dirty_gray: '#899CC1',
        gray: '#dee0f1',
        // light: {},
      },

      backgroundImage: {
        'vercel-gradient': 'linear-gradient(180deg, #000, #111013);',
        'vercel-gradient-invert': 'linear-gradient(180deg, #111013, #000);',
      },
      boxShadow: {},
      aspectRatio: {
        bioAvatar: '2170 / 2945',
        '26/31': '267 / 316',
        '7/10': '720 / 1024',
        '7/4': '720 / 422',
      },

      keyframes: {
        'accordion-down': {
          from: { height: '0' },
          to: { height: 'var(--radix-accordion-content-height)' },
        },
        'accordion-up': {
          from: { height: 'var(--radix-accordion-content-height)' },
          to: { height: '0' },
        },
      },
      animation: {
        'accordion-down': 'accordion-down 0.2s ease-out',
        'accordion-up': 'accordion-up 0.2s ease-out',
        'collapsible-down': 'collapsible-down 0.2s ease-in-out',
        'collapsible-up': 'collapsible-up 0.2s ease-in-out',
      },
    },
  },

  plugins: [
    fluid,
    typography,
    // function ({ addComponents }: { addComponents: any }) {
    //   addComponents({
    //     '.container': {
    //       width: '100%',
    //       paddingInline: '20px',
    //       '@screen xl': {
    //         maxWidth: '100%',
    //         marginInline: 'auto',
    //         paddingInline: '40px',
    //       },
    //     },
    //   });
    // },
    animate,
  ],
} satisfies Config;
