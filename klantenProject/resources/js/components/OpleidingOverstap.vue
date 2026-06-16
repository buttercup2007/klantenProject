<script setup>
const stappen = [
  "Check of je huidige opleiding stopt of dat je zelf overstapt",
  "Geef je wijziging door aan DUO",
  "Stop of wijzig je studiefinanciering indien nodig",
  "Schrijf je in bij je nieuwe opleiding",
  "Vraag studiefinanciering opnieuw aan indien nodig"
]

const gevolgen = [
  "Je studiefinanciering kan tijdelijk stoppen",
  "OV-chipkaart moet mogelijk worden stopgezet",
  "Prestatiebeurs kan opnieuw beginnen",
  "Je lening blijft altijd doorlopen",
  "Nieuwe opleiding kan andere regels hebben"
]

const tips = [
  "Check altijd DUO voordat je stopt met je studie",
  "Zorg dat je geen gaten in je inschrijving hebt",
  "Vraag hulp bij je studieloopbaanbegeleider",
  "Controleer deadlines van je nieuwe opleiding",
  "Log in op Mijn DUO voor actuele status"
]
</script>

<template>
  <div class="overstap-container">

    <div class="hero-overstap">
      <h1>Overstappen & Studiefinanciering</h1>
    </div>

    <section class="card">
      <h2>Wat gebeurt er met je studiefinanciering?</h2>
      <p>
        Als je overstapt van opleiding kan je studiefinanciering veranderen of tijdelijk stoppen.
        Dit hangt af van of je direct doorgaat met een nieuwe studie en of deze opleiding recht geeft op DUO.
      </p>
    </section>

    <section class="card">
      <h2>Mogelijke gevolgen</h2>
      <ul>
        <li v-for="(g, i) in gevolgen" :key="i">{{ g }}</li>
      </ul>
    </section>

    <section class="card">
      <h2>Stappen die je moet nemen</h2>

      <div class="steps">
        <div class="step" v-for="(s, i) in stappen" :key="i">
          <div class="num">{{ i + 1 }}</div>
          <p>{{ s }}</p>
        </div>
      </div>
    </section>

    <section class="card highlight">
      <h2>Belangrijke tips</h2>
      <ul>
        <li v-for="(t, i) in tips" :key="i">{{ t }}</li>
      </ul>
    </section>

    <section class="card warning">
      <h2>⚠️ Let op</h2>
      <p>
        Vergeet niet dat je zelf verantwoordelijk bent voor het aanpassen van je studiefinanciering bij DUO.
        Als je dit niet op tijd doet, kun je geld terug moeten betalen.
      </p>
    </section>


  </div>
</template>