<script setup>
import { ref, computed } from 'vue'

const action = ref('')
const activeZoom = ref('')

function toggleZoom(section) {
  activeZoom.value =
    activeZoom.value === section ? '' : section
}

</script>

<template>
  <div class="opleiding-root">
    <div class="blue-bar">
      <h1>Starten, overstappen en stoppen met een opleiding</h1>
    </div>

    <div id="start-opleiding" class="blue-container-opleiding start"
     :class="{ zoomed: activeZoom === 'start' }"
     @click="toggleZoom('start')">

  <h2>Starten met een opleiding</h2>

  <ol class="study-steps">
    <li>Kies een erkende mbo-, hbo- of universitaire opleiding.</li>
    <li>Controleer of je voldoet aan de voorwaarden voor studiefinanciering.</li>
    <li>Vraag een DigiD aan als je deze nog niet hebt.</li>
    <li>Log in bij DUO en vraag studiefinanciering aan.</li>
    <li>Controleer of je recht hebt op een studentenreisproduct.</li>
    <li>Dien je aanvraag op tijd in vóór de start van je opleiding.</li>
    <li>Wacht op de goedkeuring van DUO.</li>
    <li>Ontvang maandelijks je studiefinanciering.</li>
  </ol>
    </div>
  </div>
</template>