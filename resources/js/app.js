import './bootstrap'
import { createApp } from 'vue'
import PrimeVue from 'primevue/config'
import { definePreset } from '@primeuix/themes'
import Aura from '@primeuix/themes/aura'
import AppButton from './components/AppButton.vue'

const el = document.getElementById('app-button')
if (el) {
  const app = createApp()
  app.component('AppButton', AppButton)

  const preset = definePreset(Aura, {
    semantic: {
      primary: {
        50: '#FCE3E5',
        100: '#F9CCCF',
        200: '#F49A9E',
        300: '#EE636A',
        400: '#E83039',
        500: '#CA161F',
        600: '#981117',
        700: '#640B0F',
        800: '#45080B',
        900: '#200405',
        950: '#120203',
      },
    },
  })

  app.use(PrimeVue, {
    theme: { preset: preset },
  })
  app.mount('#app-button')
}
