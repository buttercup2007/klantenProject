<script setup>
import '../../css/app-component.css'
import '../../css/half-circle.css'
import '../../css/info-container.css'
import '../../css/cards.css'
import '../../css/right-panel-blue.css'
import '../../css/hbo-section.css'
import '../../css/blue-bar.css'
import '../../css/white-container-opleiding.start.css'
import '../../css/white-container-opleiding-overstap.css'
import '../../css/white-container-opleiding.stop.css'

import NavbarSection from './NavbarSection.vue'
import InfoSection from './InfoSection.vue'
import InfoContainer from './InfoContainer.vue'
import RightPanelBlue from './RightPanelBlue.vue'
import HboSection from './HboSection.vue'
import BlueBar from './BlueBar.vue'
import StartOpleidingSection from './StartOpleidingSection.vue'
import OverstapOpleidingSection from './OverstapOpleidingSection.vue'
import StopOpleidingSection from './StopOpleidingSection.vue'
</script>

<template>
  <NavbarSection />

  <div class="layout">
    <InfoSection />
    <InfoContainer />
    <RightPanelBlue />
    <HboSection />
    <BlueBar />
    <StartOpleidingSection />
    <OverstapOpleidingSection />
    <StopOpleidingSection />
  </div>
</template>