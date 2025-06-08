<script setup lang="ts">
import Button from 'primevue/button'

// Inherit all props automatically
defineOptions({ inheritAttrs: false })
</script>

<template>
  <Button v-bind="$attrs">
    <slot />
  </Button>
</template>
