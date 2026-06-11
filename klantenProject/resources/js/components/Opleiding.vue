<script setup>
import { ref, computed } from 'vue'

const action = ref('')
const activeZoom = ref('')

function toggleZoom(section) {
  activeZoom.value =
    activeZoom.value === section ? '' : section
}

const info = computed(() => {
  switch (action.value) {
    case 'start':
      return 'Je kunt studiefinanciering aanvragen en mogelijk recht hebben op basisbeurs en OV.'
    case 'overstap':
      return 'Je studiefinanciering blijft meestal doorlopen, maar je moet je nieuwe opleiding doorgeven bij DUO.'
    case 'stop':
      return 'Je studiefinanciering stopt. Je OV moet je stopzetten om boetes te voorkomen.'
    default:
      return ''
  }
})
</script>

<template>
  <div class="opleiding-root">
    <div class="blue-bar">
      <h1>Starten, overstappen en stoppen met een opleiding</h1>
    </div>

    <div class="action-box">
      <h2>Wat gebeurt er met je studiefinanciering?</h2>

      <select v-model="action">
        <option value="">Kies een situatie</option>
        <option value="start">Ik begin met een opleiding</option>
        <option value="overstap">Ik stap over</option>
        <option value="stop">Ik stop</option>
      </select>

      <p v-if="info">{{ info }}</p>
    </div>

    <div id="start-opleiding" class="blue-container-opleiding start" :class="{ zoomed: activeZoom === 'start' }"@click="toggleZoom('start')">
      <h2>Starten met een opleiding</h2>

      <p>
        Wanneer je begint met een opleiding, kun je mogelijk studiefinanciering aanvragen als je
        aan de voorwaarden voldoet. Studiefinanciering helpt studenten bij het betalen van
        kosten zoals lesgeld, boeken en vervoer. De hoogte van de studiefinanciering hangt
        af van je persoonlijke situatie en het type opleiding dat je volgt. Het is belangrijk
        om de aanvraag op tijd in te dienen zodat je geen financiële ondersteuning misloopt.
        Zodra je aanvraag is goedgekeurd, ontvang je maandelijks het bedrag waarop je recht hebt.
      </p>
    </div>

    <div id="overstap-opleiding" class="blue-container-opleiding overstap" :class="{ zoomed: activeZoom === 'overstap' }"@click="toggleZoom('overstap')">
      <h2>Overstappen met een opleiding</h2>

      <p>
        Als je overstapt naar een andere opleiding, kan dit gevolgen hebben voor je studiefinanciering.
        In veel gevallen blijft de financiering doorlopen, maar je moet de wijziging wel doorgeven
        aan de juiste instantie. Het is belangrijk om te controleren of je nieuwe opleiding recht
        geeft op dezelfde vorm van studiefinanciering. Ook kunnen regels gelden voor de maximale
        duur waarin je financiering kunt ontvangen. Door wijzigingen snel door te geven voorkom
        je problemen of terugbetalingen achteraf.
      </p>
    </div>

     <div id="stop-opleiding" class="blue-container-opleiding stop" :class="{ zoomed: activeZoom === 'stop' }" @click="toggleZoom('stop')"
>
      <h2>Stoppen met een opleiding</h2>

      <p>
        Wanneer je stopt met een opleiding, verandert meestal ook je recht op studiefinanciering.
        Je moet het stopzetten van je opleiding op tijd melden om te voorkomen dat je te veel
        geld ontvangt. Ontvang je studiefinanciering terwijl je geen recht meer hebt, dan moet
        je dit bedrag vaak terugbetalen. In sommige situaties kun je later opnieuw studiefinanciering
        aanvragen wanneer je weer gaat studeren. Daarom is het verstandig om je goed te laten
        informeren voordat je definitief stopt met je opleiding.
      </p>
    </div>
  </div>
</template>