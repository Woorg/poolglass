import '@styles/app.css';

import Alpine from 'alpinejs';
import calculator from './components/calculator';
import { headerFixed } from './components/header';
import { initPopupStore } from './components/popup';
import { nav } from './components/nav';
import { projectFilter } from './components/projectsFilter';

import.meta.glob(['../images/**', '../fonts/**']);

/**
 * Application entrypoint
 * Here you can write your global custom scripts
 */
addEventListener('DOMContentLoaded', async () => {
  window.Alpine = Alpine;
  // alpine components
  document.addEventListener('alpine:init', () => {
    headerFixed();
    nav();
    Alpine.data('projectFilter', projectFilter);
    Alpine.data('calculator', calculator);
    // Alpine.plugin(focus);
    initPopupStore(); // Инициализируем глобальное хранилище
  });

  Alpine.start();

  console.log('Sage Vite is ready! 🎉');
});
