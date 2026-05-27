<script setup>
import { ref } from 'vue'

const x = ref(0)
const qrCodeUrl = ref('') 

function onMousemove(e) {
  x.value = e.clientX
}
</script>

<template>
  <div>
    <h1>Scan om de student financiering quiz te maken</h1>

    <div class="link">
      <router-link to="/quiz">
        Of klik hier om de quiz te maken!
      </router-link>
    </div>
  </div>

  <div
    class="movearea"
    @mousemove="onMousemove"
    :style="{ backgroundColor: `hsl(${x}, 80%, 50%)` }"
  >
    <p>Move your mouse across this div...</p>
    <p>x: {{ x }}</p>
  </div>
</template>

<style>
.movearea {
  transition: 0.3s background-color ease;
  padding: 40px;
}

.background-color {
  background-color: #964e4a;
}

.link {
  display: flex;
  justify-content: center;
  margin-top: 20px;
}
</style>

