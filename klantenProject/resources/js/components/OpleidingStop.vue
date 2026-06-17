<script setup>
const gevolgen = [
  "Je studiefinanciering stopt meestal vanaf de maand nadat je bent uitgeschreven.",
  "Je studentenreisproduct moet op tijd worden stopgezet.",
  "Een ontvangen lening moet later worden terugbetaald.",
  "Je kunt mogelijk een schuld opbouwen als je wijzigingen niet doorgeeft aan DUO.",
  "Je recht op toekomstige studiefinanciering kan worden beïnvloed."
]

const stappen = [
  "Bespreek je situatie met je studiebegeleider of mentor.",
  "Schrijf je officieel uit bij je onderwijsinstelling.",
  "Geef je uitschrijving door aan DUO.",
  "Controleer of je studiefinanciering moet worden stopgezet.",
  "Zet je studentenreisproduct op tijd stop."
]
</script>

<template>
  <div class="stop-container">

    <div class="stop-hero">
      <h1>Stoppen met je opleiding</h1>
    </div>

    <section class="stop-card">
      <h2>Wat gebeurt er met je studiefinanciering?</h2>
      <p>
        Wanneer je stopt met je opleiding, heb je meestal geen recht meer op
        studiefinanciering. Daarom is het belangrijk om wijzigingen op tijd door
        te geven aan DUO. Doe je dit niet, dan kun je geld moeten terugbetalen.
      </p>
    </section>

    <section class="stop-card-two">
      <h2>Mogelijke gevolgen</h2>

      <ul>
        <li v-for="(gevolg, index) in gevolgen" :key="index">
          {{ gevolg }}
        </li>
      </ul>
    </section>

    <section class="stop-card-three">
      <h2>Wat moet je doen?</h2>

      <div class="stop-steps">
        <div class="stop-step" v-for="(stap, index) in stappen" :key="index">
          <span>{{ index + 1 }}</span>
          <p>{{ stap }}</p>
        </div>
      </div>
    </section>

    <section class="stop-warning">
      <h2>Belangrijk</h2>
      <p>
        Controleer altijd je persoonlijke situatie bij DUO. De regels rondom
        studiefinanciering kunnen verschillen afhankelijk van je opleiding,
        leeftijd en studiegeschiedenis.
      </p>
    </section>

  </div>
</template>
