export const projectFilter = () => {
  return {
    activeFilter: 'all', // Default filter is 'all',

    // Set the active filter when a filter link is clicked
    setFilter(filter) {
      this.activeFilter = filter;
    },
  };
};
