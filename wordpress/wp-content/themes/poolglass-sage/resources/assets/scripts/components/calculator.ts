export default function calculator() {
  return {
    window_shape: '',
    window_diameter: '',
    window_width: '',
    window_height: '',
    water_level: '',
    window_count: '',
    pool_finish: '',
    special_wishes: '',
    custom_special_wishes: '',

    resetForm() {
      this.window_shape = '';
      this.window_diameter = '';
      this.window_width = '';
      this.window_height = '';
      this.water_level = '';
      this.window_count = '';
      this.pool_finish = '';
      this.special_wishes = '';
      this.custom_special_wishes = '';

      // Сброс значений в видимых полях, если применялись маски
      // if (this.$refs.phone) {
      //   this.$refs.phone.value = '';
      // }
      // if (this.$refs.email) {
      //   this.$refs.email.value = '';
      // }
      console.log('Reset Form');
    },
  };
}
