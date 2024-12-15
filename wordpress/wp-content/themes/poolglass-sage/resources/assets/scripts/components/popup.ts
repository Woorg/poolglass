import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';

export const initPopupStore = () => {
  Alpine.store('popup', {
    popup_open: false, // Управляет видимостью попапа
    openPopup(id) {
      this.popup_open = id;
    },
    closePopup(id) {
      if (this.popup_open === id) {
        this.popup_open = null;
      }
      this.popup_open = null;
    },
  });
};
