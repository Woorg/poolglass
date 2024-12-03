import '@styles/app.css';

import Alpine from 'alpinejs';
import { headerFixed } from './components/header';
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
  headerFixed();
  nav();
  document.addEventListener('alpine:init', () => {
    Alpine.data('projectFilter', projectFilter);
  });

  Alpine.start();

  console.log('Sage Vite is ready! 🎉');
});
