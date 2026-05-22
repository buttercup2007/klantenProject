<template>
  <div>
    <h1>Scan om de student financiering quiz te maken</h1>

    <img v-if="qrCodeUrl" :src="qrCodeUrl" />

    <div>
      <router-link to="/quiz">
        Of klik hier om de quiz te maken!
      </router-link>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue'
import QRCode from 'qrcode'

const qrCodeUrl = ref('')

onMounted(async () => {
  const quizUrl = `${window.location.origin}/quiz`
  qrCodeUrl.value = await QRCode.toDataURL(quizUrl)
})
</script>