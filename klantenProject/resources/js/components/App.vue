<script setup>
import '../../css/info.css'
import '../../css/hbo.css'
import '../../css/start.css'
import '../../css/quiz.css'
import '../../css/overstap.css'
import '../../css/stop.css'



import NavbarSection from './NavbarSection.vue'
import Info from './Info.vue'
import HBO from './HBO.vue'
import OpleidingStart from './OpleidingStart.vue'
import OpleidingOverstap from './OpleidingOverstap.vue'
import OpleidingStop from './OpleidingStop.vue'
import miniQuiz from '@/components/miniQuiz.vue'
</script>

<template>
  <NavbarSection />

  <div class="layout">
    <Info />
    <HBO />
    <OpleidingStart />
    <OpleidingOverstap />
    <OpleidingStop />
    <miniQuiz />
  </div>
</template>