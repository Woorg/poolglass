export const headerFixed = () => {
  // console.log('headerFixed');

  Alpine.data('header', () => ({
    isNavOpen: false,
    isFixed: false,
    isHidden: false,
    lastScroll: 0,
    toggleNav() {
      this.isNavOpen = !this.isNavOpen;

      document.body.classList.toggle('no-scroll', this.isNavOpen);
    },

    handleScroll() {
      const currentScroll = window.scrollY;

      if (currentScroll > 0) {
        this.isFixed = true;
        this.isHidden = currentScroll > this.lastScroll;
      } else {
        this.isFixed = false;
        this.isHidden = false;
      }

      this.lastScroll = currentScroll;
    },

    init() {
      window.addEventListener('scroll', this.handleScroll.bind(this));
    },
  }));
};
