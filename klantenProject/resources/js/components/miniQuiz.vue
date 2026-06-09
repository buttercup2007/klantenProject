<script setup>
import { ref, computed } from 'vue'

const step = ref(0)
const score = ref(0)
const finished = ref(false)

const questions = [
  {
    question: 'Heb je recht op studiefinanciering op MBO niveau 2?',
    answers: [
      { text: 'Ja', correct: true },
      { text: 'Nee', correct: false }
    ]
  },
  {
    question: 'Moet je je studentenreisproduct stopzetten als je stopt met school?',
    answers: [
      { text: 'Ja', correct: true },
      { text: 'Nee', correct: false }
    ]
  },
  {
    question: 'Moet je een lening bij DUO altijd terugbetalen?',
    answers: [
      { text: 'Ja', correct: true },
      { text: 'Nee', correct: false }
    ]
  }
]

const currentQuestion = computed(() => questions[step.value])

function answerQuestion(isCorrect) {
  if (isCorrect) score.value++

  if (step.value < questions.length - 1) {
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

      <p>Vraag {{ step + 1 }} / {{ questions.length }}</p>
    </div>

    <div v-else>
      <h3>Quiz klaar!</h3>
      <p>Je score: {{ score }} / {{ questions.length }}</p>

      <p v-if="score === questions.length">
        Top! Je weet veel over studiefinanciering
      </p>

      <p v-else>
        Goed bezig! Je weet al veel, maar nog niet alles.
      </p>

      <button @click="restartQuiz">Opnieuw doen</button>
    </div>
  </div>
</template>