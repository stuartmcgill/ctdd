<script setup lang="ts">
import 'flowbite'
import Menubar from 'primevue/menubar'
import type { MenuItem } from 'primevue/menuitem'
import { Ref, ref } from 'vue'

// Inherit all props automatically
defineOptions({ inheritAttrs: false })

// const items: Ref<MenuItem[]> = ref([
//   {
//     label: 'Home',
//     icon: 'pi pi-fw pi-home',
//     command: () => {
//       window.location.href = '/'
//     },
//   },
//   {
//     label: 'About',
//     icon: 'pi pi-fw pi-info',
//     command: () => {
//       window.location.href = '/about'
//     },
//   },
//   {
//     label: 'Settings',
//     icon: 'pi pi-fw pi-cog',
//     items: [
//       {
//         label: 'Profile',
//         icon: 'pi pi-fw pi-user',
//         command: () => {
//           window.location.href = '/profile'
//         },
//       },
//       {
//         label: 'Security',
//         icon: 'pi pi-fw pi-lock',
//       },
//     ],
//   },
// ])
</script>

<template>
  <Menubar v-bind="$attrs" :model="items">
    <slot />
  </Menubar>
</template>
