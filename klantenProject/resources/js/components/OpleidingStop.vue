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

    <div class="hero">
      <h1>Stoppen met je opleiding</h1>
      <p>
        Denk je eraan om te stoppen met je studie? Bekijk eerst wat dit betekent
        voor je studiefinanciering.
      </p>
    </div>

    <section class="card">
      <h2>Wat gebeurt er met je studiefinanciering?</h2>
      <p>
        Wanneer je stopt met je opleiding, heb je meestal geen recht meer op
        studiefinanciering. Daarom is het belangrijk om wijzigingen op tijd door
        te geven aan DUO. Doe je dit niet, dan kun je geld moeten terugbetalen.
      </p>
    </section>

    <section class="card">
      <h2>Mogelijke gevolgen</h2>

      <ul>
        <li v-for="(gevolg, index) in gevolgen" :key="index">
          {{ gevolg }}
        </li>
      </ul>
    </section>

    <section class="card">
      <h2>Wat moet je doen?</h2>

      <div class="steps">
        <div class="step" v-for="(stap, index) in stappen" :key="index">
          <span>{{ index + 1 }}</span>
          <p>{{ stap }}</p>
        </div>
      </div>
    </section>

    <section class="warning">
      <h2>Belangrijk</h2>
      <p>
        Controleer altijd je persoonlijke situatie bij DUO. De regels rondom
        studiefinanciering kunnen verschillen afhankelijk van je opleiding,
        leeftijd en studiegeschiedenis.
      </p>
    </section>

  </div>
</template>
