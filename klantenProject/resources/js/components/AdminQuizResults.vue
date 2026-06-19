<script setup>
import { ref, onMounted } from 'vue'
import axios from 'axios'

const results = ref([])

onMounted(async () => {
  try {
    const res = await axios.get('/api/quiz/results')
    results.value = res.data
  } catch (err) {
    console.error('Failed to load results:', err)
  }
})
</script>

<template>
  <div class="admin-wrapper">
    <h2>Quiz Results (Admin)</h2>

    <div v-if="results.length === 0">
      Geen resultaten gevonden.
    </div>

    <div v-for="r in results" :key="r.id" class="result-card">
      <h3>Resultaat #{{ r.id }}</h3>

      <p><strong>Score:</strong> {{ r.score }} / {{ r.total }}</p>

      <p><strong>Datum:</strong> {{ r.created_at }}</p>

      <div class="answers">
        <h4>Antwoorden:</h4>
        <ul>
          <li v-for="(a, i) in r.answers" :key="i">
            {{ a }}
          </li>
        </ul>
      </div>
    </div>
  </div>
</template>

<style> 

.admin-wrapper {
  padding: 20px;
}

.result-card {
  background: white;
  border: 2px solid #d6e4ff;
  border-radius: 12px;
  padding: 16px;
  margin-bottom: 15px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.05);
}

.result-card h3 {
  margin-bottom: 10px;
}

.answers ul {
  margin: 0;
  padding-left: 20px;
}</style>