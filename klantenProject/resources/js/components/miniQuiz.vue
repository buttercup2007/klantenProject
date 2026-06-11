<script setup>
import { ref, computed } from 'vue'

const step = ref(0)
const score = ref(0)
const finished = ref(false)

const questions = [
  {
    question: "Wat is studiefinanciering?",
    answers: [
      { text: "Een lening/studiebeurs van de overheid", correct: true },
      { text: "Een baan bij DUO", correct: false }
    ]
  },

  {
    question: "Wie heeft recht op studentfinanciering?",
    answers: [
      { text: "Studenten die een erkende mbo-, hbo- of universitaire opleiding volgen en aan de voorwaarden voldoen.", correct: true },
      { text: "Studenten die op de middle bare zitten.", correct: false }
    ]
  },

    {
    question: "Wat is een aanvullend beurs",
    answers: [
      { text: "Dat is extra geld voor studenten van wie de ouders een lager inkomen hebben.", correct: true },
      { text: "Dat is geld voor studenten die moeite hebben met het mbo. ", correct: false }
    ]
  },

    {
    question: "Krijgen studenten ook een OV-kaart",
    answers: [
      { text: "Ja, veel studenten hebben recht op een studentenreisproduct waarmee zij gratis of met korting kunnen reizen.", correct: true },
      { text: "ja, maar studenten kunnen niet gratis of met korting rijzen", correct: false }
    ]
  },

  {
    question: "Moet je studiefinanciering terugbetalen?",
    answers: [
      { text: "Altijd", correct: false },
      { text: "Soms, afhankelijk van je situatie", correct: true }
    ]
  }
]

const currentQuestion = computed(() => questions[step.value])

function answerQuestion(isCorrect) {
  if (isCorrect) score.value++

  if (step.value + 1 < questions.length) {
    step.value++
  } else {
    finished.value = true
  }
}

function restartQuiz() {
  step.value = 0
  score.value = 0
  finished.value = false
}
</script>

<template>

  <div class="quiz-button-wrapper">
  <button
    class="quiz-open-btn"
    type="button"
    data-bs-toggle="offcanvas"
    data-bs-target="#sidebar-1"
    aria-controls="sidebar-1"
  >
    Maak de quiz om te zien of je alles weet over studiefinanciering!
  </button>
</div>

<div class="offcanvas offcanvas-start" tabindex="-1" id="sidebar-1">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title">Quiz</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
  </div>

  <div class="offcanvas-body">
     <div class="quiz-box">
    <h2> Mini Quiz</h2>

    <div v-if="!finished">
      <p><strong>{{ currentQuestion.question }}</strong></p>

      <div class="answers">
        <button
          v-for="(a, i) in currentQuestion.answers"
          :key="i"
          @click="answerQuestion(a.correct)"
        >
          {{ a.text }}
        </button>
      </div>

      <p>Vraag {{ step + 1 }} / {{ questions.length}}</p>
    </div>

    <div v-else>
      <h3>Quiz klaar!</h3>
      <p>Je score: {{ score }} / {{ questions.length }}</p>

      <p v-if="score === questions.length">
        Top! Je weet veel over studiefinanciering
      </p>

      <p v-else>
         Je weet al veel, maar nog niet alles.
      </p>

      <button @click="restartQuiz">Opnieuw doen</button>
    </div>
  </div>
  </div>
</div>

</template>