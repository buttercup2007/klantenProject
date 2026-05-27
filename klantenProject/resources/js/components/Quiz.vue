<script setup>
import { onMounted } from 'vue'
import { useRoute, useRouter } from 'vue-router'
import axios from 'axios'

const route = useRoute()
const router = useRouter()

onMounted(async () => {
  const token = route.query.token

  if (!token) {
    router.push('/')
    return
  }

  try {
    await axios.get(`/validate-quiz-token/${token}`)
  } catch (e) {
    router.push('/')
  }
})
</script>

<template>
  <div>
    <h1>quiz page</h1>
    <router-link to="/">back home</router-link>
  </div>
</template>