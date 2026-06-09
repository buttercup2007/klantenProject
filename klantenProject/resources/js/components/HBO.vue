<script setup>
 import { ref, computed } from 'vue'

const choice = ref('')

const hboInfo = computed(() => {
  switch (choice.value) {
    case 'door':
      return 'Je kunt meestal studiefinanciering behouden, maar voorwaarden kunnen veranderen.'
    case 'leen':
      return 'Je kunt extra lenen voor je hbo-opleiding.'
    case 'reis':
      return 'Je studentenreisproduct blijft geldig zolang je recht hebt op studiefinanciering.'
    default:
      return ''
  }
})

</script>

<template>

  <div class="hbo-tool">
  <h2>Doorstroom naar het hbo</h2>

  <p>Wat wil je weten?</p>

  <select v-model="choice">
    <option value="">Maak een keuze</option>
    <option value="door">Wat gebeurt er met mijn studiefinanciering?</option>
    <option value="leen">Kan ik extra lenen?</option>
    <option value="reis">Wat gebeurt er met mijn OV?</option>
  </select>

  <p v-if="hboInfo">{{ hboInfo }}</p>
</div>

  <div class="hbo-root">
    <div class="white-container-hbo" id="hbo-section">
      <h2>Doorstromen naar het hbo</h2>

      <p>
        Na het behalen van een mbo-diploma kunnen veel studenten doorstromen naar het hbo. Deze stap biedt
        mogelijkheden om meer kennis en vaardigheden te ontwikkelen. Het is belangrijk om vooraf te kijken 
        naar de toelatingseisen van de gekozen opleiding. Sommige opleidingen vragen aanvullende vakken of
        specifieke voorkennis. Een goede voorbereiding maakt de overstap vaak makkelijker. Hierdoor kunnen 
        studenten succesvol verder studeren op een hoger niveau.
      </p>

      <h2>Studiefinanciering voor hbo-studenten</h2>

      <p>Hbo-studenten kunnen gebruikmaken van verschillende vormen van studiefinanciering.
         Dit helpt bij het betalen van studie- en leefkosten tijdens de opleiding. 
         Afhankelijk van de situatie kunnen studenten recht hebben op een basisbeurs of
         aanvullende beurs. Ook bestaat de mogelijkheid om geld te lenen via DUO. Daarnaast
         kunnen studenten gebruikmaken van het studentenreisproduct. Deze ondersteuning maakt
         studeren voor veel mensen toegankelijker.</p>

      <h2>Stage lopen binnen het hbo</h2>

      <p>Stages zijn een belangrijk onderdeel van veel hbo-opleidingen. Tijdens een stage passen
         studenten hun kennis toe in de praktijk. Hierdoor doen zij waardevolle werkervaring op
         binnen hun vakgebied. Ook ontwikkelen studenten vaardigheden zoals samenwerken en communiceren.
         Stagebedrijven bieden vaak begeleiding en feedback tijdens deze periode. Dit helpt studenten
         zich goed voor te bereiden op hun toekomstige carrière.</p>

      <h2>Na het HBO</h2>

      <p>Na het behalen van een hbo-diploma zijn er verschillende mogelijkheden. Veel afgestudeerden gaan
         direct aan het werk binnen hun vakgebied. Anderen kiezen ervoor om verder te studeren aan een
         masteropleiding. Een hbo-diploma kan de kansen op de arbeidsmarkt vergroten. Werkgevers
         waarderen vaak de combinatie van theorie en praktijkervaring die hbo-studenten hebben
         opgedaan. Hierdoor vormt het hbo voor veel studenten een goede basis voor hun toekomst.</p>

      <h2>Hbo-opleidingen kiezen</h2>

      <p>Het kiezen van een hbo-opleiding is een belangrijke beslissing. Het is verstandig om rekening te
         houden met interesses, talenten en toekomstplannen. Open dagen kunnen helpen om een beter beeld 
         van een opleiding te krijgen. Ook gesprekken met studenten en docenten kunnen nuttig zijn. Door 
         verschillende opleidingen te vergelijken maak je een beter geïnformeerde keuze. Een passende 
         opleiding vergroot vaak de kans op studiesucces.</p>
    </div>

    <div class="right-panel-blue">
      <h1>HBO</h1>
      <h2>Wat moet je weten over HBO?</h2>
      <p>
        HBO staat voor Hoger Beroepsonderwijs. Het is een type onderwijs in
        Nederland dat zich richt op praktische en beroepsgerichte opleidingen.
        HBO-opleidingen duren meestal vier jaar en leiden op tot een bachelor
        diploma. Na het behalen van een HBO-diploma kunnen studenten vaak direct
        aan de slag in het werkveld of doorstromen naar een masteropleiding aan
        een universiteit.
      </p>
    </div>
  </div>
</template>
