import Inputmask from 'inputmask';

export const inputMasks = () => {
  Inputmask({
    mask: '+7(999) 999-99-99',
    showMaskOnHover: false,
  }).mask('.form__input_phone');
};
