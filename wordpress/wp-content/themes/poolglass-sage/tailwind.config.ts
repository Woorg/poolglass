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
      // xs: '346px',
      sm: '480px',
      md: '768px',
      lg: '999px',
      xl: '1220px',
      '2xl': '1576px',
      '3xl': '1920px',
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
        montserrat: ['var(--montserrat)'],
      },
      colors: {
        title: '#0D0F22',
        block_title: '#9899ac',
        text: '#555666',
        blue: '#264279',
        box: 'rgba(38, 66, 121, 0.04)',
        dirty_gray: '#899CC1',
        gray: '#dee0f1',
        fixed_bg: 'rgba(22,27,35,.7)',
        thumbnail_bg: 'rgba(33,123,187,.2)',
        latest_item_bg: '#0B3875',
        filter: '#C6C6CA',
        label: '#142C52',
        // light: {},
      },

      backgroundImage: {
        'box-gradient':
          'linear-gradient(129deg, #f1fafc 10.69%, #39afdd 21.04%, #1664ab 47.29%, #08367a 59.98%, #142c52 100%);',
      },
      boxShadow: {},
      aspectRatio: {
        first_tile: '284/155',
        popup_wave_up: '572/123',
        popup_wave_up_single: '730/129',
        popup_wave_down: '572/128',
        article_thumbnail: '282/197',
        map: '1160/379',
        first_wave_bg: '1920/374',
        first_inner_wave: '1920/296',
        types_thumbnail: '570/300',
        first_bg_320: '320/543',
        first_bg_480: '480/513',
        first_bg_768: '768/582',
        first_bg_1000: '1000/604',
        first_bg_1220: '1220/589',
        first_bg_big: '1920/589',
        first_inner_320: '320/238',
        first_inner_480: '480/278',
        first_inner_768: '768/387',
        first_inner_1000: '1000/384',
        first_inner_big: '1920/429',
        parallax_first_320: '795/410',
        parallax_first_480: '1130/586',
        parallax_first_768: '1427/736',
        parallax_first_big: '1920/1096',
        about_figure: '222/153',
        wave_up_320: '320/74',
        wave_up_480: '480/101',
        wave_up_768: '768/143',
        wave_up_1000: '1000/210',
        wave_up_big: '1920/296',
        wave_down_320: '320/77',
        wave_down_480: '480/128',
        wave_down_768: '768/193',
        wave_down_1000: '1000/232',
        wave_down_big: '1920/288',
        footer_wave: '1920/374',
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
