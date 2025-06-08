import './bootstrap'
import { createApp } from 'vue'
import PrimeVue from 'primevue/config'
import Aura from '@primeuix/themes/aura'
import AppButton from './components/AppButton.vue'

const el = document.getElementById('app-button')
if (el) {
  const app = createApp()
  app.component('AppButton', AppButton)
  app.use(PrimeVue, {
    theme: {
      preset: Aura,
    },
  })
  app.mount('#app-button')
}
