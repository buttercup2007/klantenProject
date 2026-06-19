<script setup>
import AdminQuizResults from './AdminQuizResults.vue'
import '../../css/info.css'
import '../../css/hbo.css'
import '../../css/start.css'
import '../../css/quiz.css'
import '../../css/overstap.css'
import '../../css/stop.css'
import '../../css/Footer.css'


import NavbarSection from './NavbarSection.vue'
import Info from './Info.vue'
import HBO from './HBO.vue'
import OpleidingStart from './OpleidingStart.vue'
import OpleidingOverstap from './OpleidingOverstap.vue'
import OpleidingStop from './OpleidingStop.vue'
import miniQuiz from '@/components/miniQuiz.vue'
import Footer from './Footer.vue'
import HBOKeuzehulp from './HBOKeuzehulp.vue'

</script>

<template>
  <NavbarSection />

  <div class="layout">
    <Info />
    <HBO />
    <HBOKeuzehulp />
    <OpleidingStart />
    <OpleidingOverstap />
    <OpleidingStop />
    <miniQuiz />
    <AdminQuizResults />
  </div>

  <Footer />
</template>