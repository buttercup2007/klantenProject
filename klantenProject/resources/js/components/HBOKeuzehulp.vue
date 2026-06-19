<script setup>
import { ref } from 'vue'

const stap = ref(1)
const resultaat = ref('')
</script>

<template>
  <div class="keuzehulp-card">
    <h2> HBO Keuzehulp</h2>

    <div v-if="stap === 1" class="vraag">
      <p>Volg je momenteel een mbo-opleiding?</p>

      <div class="buttons">
        <button @click="stap = 2">Ja</button>
        <button @click="resultaat = 'Deze keuzehulp is bedoeld voor mbo-studenten.'">
          Nee
        </button>
      </div>
    </div>

    <div v-if="stap === 2" class="vraag">
      <p>Ga je volgend jaar naar het HBO?</p>

      <div class="buttons">
        <button @click="stap = 3">Ja</button>
        <button @click="resultaat = 'Je huidige situatie verandert voorlopig niet.'">
          Nee
        </button>
      </div>
    </div>

    <div v-if="stap === 3" class="resultaat">
      <h3> Resultaat</h3>

      <p>
        Je moet studiefinanciering aanvragen voor het HBO.
        Controleer via DUO welke regelingen voor jou gelden en vraag
        je studiefinanciering op tijd aan.
      </p>

      <button @click="stap = 1">
        Opnieuw starten
      </button>
    </div>

    <div
      v-if="resultaat && stap !== 3"
      class="resultaat"
    >
      <h3>Resultaat</h3>

      <p>{{ resultaat }}</p>

      <button
        @click="
          stap = 1;
          resultaat = ''
        "
      >
        Opnieuw starten
      </button>
    </div>
  </div>
</template>