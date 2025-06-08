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
        50: '{red.50}',
        100: '{red.100}',
        200: '{red.200}',
        300: '{red.300}',
        400: '{red.400}',
        500: '{red.500}',
        600: '{red.600}',
        700: '{red.700}',
        800: '{red.800}',
        900: '{red.900}',
        950: '{red.950}',
      },
    },
  })

  app.use(PrimeVue, {
    theme: { preset: preset },
  })
  app.mount('#app-button')
}
