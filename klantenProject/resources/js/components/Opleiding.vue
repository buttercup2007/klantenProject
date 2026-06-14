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