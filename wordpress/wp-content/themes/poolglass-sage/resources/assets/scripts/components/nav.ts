export const nav = () => {
  // Define mapping between custom post types and navigation labels
  const customPostTypeToNavText = {
    kinds: 'Виды бассейнов',
    goods: 'Товары',
    last_projects: 'Наши проекты',
    'icons-articles': 'Статьи',
  };

  // Get the body class list as an array
  const bodyClasses = document.body.className.split(' ');

  // Extract the custom post type from the body class
  const customPostTypeClass = bodyClasses.find((cls) =>
    cls.startsWith('single-'),
  );

  let customPostType = null;

  if (customPostTypeClass) {
    customPostType = customPostTypeClass.replace('single-', '');
  }

  if (!customPostType || !customPostTypeToNavText[customPostType]) return; // Exit if no custom post type or mapping is found

  // Get the corresponding navigation text
  const navText = customPostTypeToNavText[customPostType];

  // Find and highlight the corresponding menu item
  const navItems = document.querySelectorAll('.nav__item ');
  navItems.forEach((item) => {
    if (item.textContent.trim() === navText) {
      item.classList.add('current-menu-item');
    }
  });
};
