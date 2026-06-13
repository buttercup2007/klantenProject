<script setup>
import { ref, computed, onMounted } from 'vue'

const situation = ref('')
const selected = ref('') // ✅ FIX

const showButtons = ref(false)

function selectSituation(btn) {
  selected.value = btn
  situation.value = btn
}

const buttons = [
  'Ik wil studiefinanciering',
  'Ik ga starten',
  'Ik stap over',
  'Ik stop met mijn opleiding',
  'Ik ga naar het HBO'
]

onMounted(() => {
  setTimeout(() => {
    showButtons.value = true
  }, 300)
})

const monthlyLoan = ref(200)

const totalDebt = computed(() => {
  return monthlyLoan.value * 12 * 4
})
</script>


<template>
  <div class="choice-card">
    <h1 class="hero-title">Welkom MBO student</h1>
    <h2 class="hero-subtitle">Wat is jouw situatie?</h2>
   
   <div class="choice-buttons">
    <button
  v-for="(btn, i) in buttons"
  :key="i"
  class="choice-buttons-btn"
  :class="{ show: showButtons }"
  :style="{ transitionDelay: i * 0.15 + 's' }"
  @click="selectSituation(btn)"
>
  {{ btn }}
</button>
</div>
  </div>

  <div class="info-root">
    <div class="half-circle" id="info-section">
      <h1>INFO</h1>
      <h2>Wat is studiefinanciering?</h2>

      <p>
        Studiefinanciering is een financiële regeling van de Nederlandse overheid
        die studenten ondersteunt tijdens hun opleiding. Het doel is om studeren
        toegankelijk te maken voor iedereen, ongeacht de financiële situatie van
        de student of diens ouders. De regeling wordt uitgevoerd door
        DUO (Dienst Uitvoering Onderwijs).
      </p>
    </div>

    <div class="white-container-info">
    <div class="hbo-text">
      <h2>Welke vormen van studiefinanciering zijn er?</h2>

      <p>
        Studiefinanciering bestaat uit verschillende onderdelen. Studenten kunnen
        recht hebben op een basisbeurs, een aanvullende beurs, een
        studentenreisproduct en verschillende soorten leningen. Welke onderdelen
        beschikbaar zijn, hangt af van de opleiding die je volgt en je
        persoonlijke situatie.
      </p>

      <p>
        De basisbeurs is bedoeld om studenten te helpen bij hun dagelijkse
        kosten. Daarnaast kunnen studenten waarvan de ouders een lager inkomen
        hebben vaak een aanvullende beurs ontvangen. Hiermee probeert de overheid
        gelijke kansen voor iedereen te creëren.
      </p>

      <h2>Studentenreisproduct</h2>

      <p>
        Met het studentenreisproduct kunnen studenten gratis of met korting
        reizen met het openbaar vervoer. Studenten kunnen kiezen tussen een
        weekabonnement of een weekendabonnement. Hierdoor wordt het makkelijker
        en goedkoper om naar school, stage of universiteit te reizen.
      </p>

      <h2>Lenen voor je studie</h2>

      <p>
        Wanneer de beurs niet voldoende is, kunnen studenten ervoor kiezen om
        geld te lenen bij DUO. Dit geld moet later worden terugbetaald. Het is
        daarom belangrijk om goed na te denken over hoeveel je leent.
      </p>

      

      <!-- Schuld Simulator in info -->
      <div class="simulator">
        <h2> Schuld Simulator</h2>

        <p>
          Hoeveel denk je per maand te lenen?
        </p>

        <input
          type="range"
          min="0"
          max="500"
          step="25"
          v-model="monthlyLoan"
        >

        <p>
          <strong>€{{ monthlyLoan }}</strong> per maand
        </p>

        <h3>
          Na 4 jaar heb je ongeveer
          €{{ totalDebt.toLocaleString() }}
          geleend
        </h3>

        <p>
          Dit is een simpele schatting zonder rente.
        </p>
      </div>

      <p>
        Hoe meer je leent, hoe hoger je studieschuld na het afronden van je
        opleiding.
      </p>

      <p>
        Gelukkig biedt DUO vaak gunstige voorwaarden. Zo hoef je meestal pas na
        je studie te beginnen met terugbetalen en wordt er rekening gehouden met
        je inkomen. Hierdoor blijft de terugbetaling voor veel afgestudeerden
        betaalbaar.
      </p>

      <h2>Waarom is het belangrijk?</h2>

      <p>
        Dankzij studiefinanciering krijgen meer mensen de mogelijkheid om een
        opleiding te volgen. Het helpt studenten zich te concentreren op hun
        studie zonder zich voortdurend zorgen te maken over geld. Daarmee draagt
        het systeem bij aan gelijke kansen en een goed opgeleide samenleving.
      </p>

      <div class="cards">
        <div class="card">
          <h3>Basisbeurs</h3>
          <p>Maandelijkse bijdrage voor studenten.</p>
        </div>

        <div class="card">
          <h3>Studentenreisproduct</h3>
          <p>Gratis of goedkoper reizen met het OV.</p>
        </div>
      </div>
     </div>
    </div>
  </div>
</template>