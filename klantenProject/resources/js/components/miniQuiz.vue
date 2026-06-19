<script setup>
import { ref, computed, onMounted } from 'vue'
import axios from 'axios'

const questions = ref([])
const userAnswers = ref([])

const step = ref(0)
const score = ref(0)
const finished = ref(false)

const currentQuestion = computed(() => {
    return questions.value[step.value] || null
})

onMounted(async () => {
    try {
        const response = await axios.get('/api/quiz/questions')
        questions.value = response.data
    } catch (error) {
        console.error('Quiz loading failed:', error)
    }
})

async function answerQuestion(answerText) {

    userAnswers.value.push(answerText)

    if (step.value + 1 < questions.value.length) {
        step.value++
    } else {

        try {
            const response = await axios.post('/api/quiz/submit', {
                answers: userAnswers.value
            })

            score.value = response.data.score
            finished.value = true

        } catch (error) {
            console.error('Quiz submit failed:', error)
        }
    }
}

function restartQuiz() {
    step.value = 0
    score.value = 0
    finished.value = false
    userAnswers.value = []
}
</script>

<template>
<div class="quiz-float-btn-wrapper">
  <button
    class="quiz-float-btn"
    type="button"
    data-bs-toggle="offcanvas"
    data-bs-target="#sidebar-1"
    aria-controls="sidebar-1"
  >
    Quiz
  </button>
 </div>

  <div
    class="offcanvas offcanvas-end"
    tabindex="-1"
    id="sidebar-1"
  >
    <div class="offcanvas-header">
      <h5 class="offcanvas-title">Quiz</h5>

      <button
        type="button"
        class="btn-close"
        data-bs-dismiss="offcanvas"
      ></button>
    </div>

    <div class="offcanvas-body">

      <div class="quiz-box">

        <h2>Mini Quiz</h2>

        <div v-if="questions.length === 0">
          Quiz laden...
        </div>

        <template v-else>

          <div v-if="!finished && currentQuestion">

            <p>
              <strong>{{ currentQuestion.question }}</strong>
            </p>

            <div class="answers">

              <button
                v-for="(answer, index) in currentQuestion.answers"
                :key="index"
                @click="answerQuestion(answer)"
              >
                {{ answer }}
              </button>

            </div>

            <p>
              Vraag {{ step + 1 }} / {{ questions.length }}
            </p>

          </div>

          <div v-else>

            <h3>Quiz klaar!</h3>

            <p>
              Je score: {{ score }} / {{ questions.length }}
            </p>

            <p v-if="score === questions.length">
              Top! Je weet veel over studiefinanciering.
            </p>

            <p v-else>
              Je weet al veel, maar nog niet alles.
            </p>

            <button @click="restartQuiz">
              Opnieuw doen
            </button>

          </div>

        </template>

      </div>

    </div>
  </div>
</template>