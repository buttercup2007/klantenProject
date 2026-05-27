<template>
  <div>

    <h1>Scan om de student financiering quiz te maken</h1>

    <div class="qrCode">
      <img v-if="qrCodeUrl" :src="qrCodeUrl" />
    </div>

    <div class="link">
      <router-link to="/quiz">
        Of klik hier om de quiz te maken!
      </router-link>
    </div>

  </div>
  </template>

  <style>
    .qrCode {
      display: flex;
      justify-content: center;
      margin-top: 20px;
    }
    .background-color {
      background-color: #964e4a;
    }







  </style>









<script setup>
import { ref, onMounted } from 'vue'
import QRCode from 'qrcode'

const qrCodeUrl = ref('')

onMounted(async () => {
  const quizUrl = `http://192.168.1.66:8000/quiz`

  qrCodeUrl.value = await QRCode.toDataURL(quizUrl)
})
</script>