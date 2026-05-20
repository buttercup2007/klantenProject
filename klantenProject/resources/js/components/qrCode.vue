<template>
  <div class="container">
    <h1>QR Code Generator</h1>

    <input
      v-model="websiteUrl"
      placeholder="Enter website URL"
      class="input"
    />

    <div class="qr-wrapper">
      <qrcode-vue
        :value="websiteUrl"
        :size="300"
        level="H"
        foreground="#000000"
        background="#ffffff"
      />
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue'
import QrcodeVue from 'qrcode.vue'

const websiteUrl = ref('https://google.com')
</script>

<style scoped>
.container {
  padding: 40px;
  text-align: center;
}

.input {
  width: 300px;
  padding: 10px;
  margin-bottom: 30px;
  border: 1px solid #ccc;
}

.qr-wrapper {
  display: flex;
  justify-content: center;
  background: white;
  padding: 20px;
}
</style>