<script setup>
import '../../css/info.css'
import '../../css/hbo.css'
import '../../css/opleiding.css'

import NavbarSection from './NavbarSection.vue'
import Info from './Info.vue'
import HBO from './HBO.vue'
import Opleiding from './Opleiding.vue'

</script>

<template>
  <NavbarSection />

  <div class="layout">
    <Info />
    <HBO />
    <Opleiding />
  </div>
</template>