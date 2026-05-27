<script setup>
import { ref } from 'vue'

const mouseX = ref(0)
const mouseY = ref(0)

function onMousemove(e) {
  mouseX.value = e.clientX
  mouseY.value = e.clientY
}
</script>

<template>
  <div
    class="page"
    @mousemove="onMousemove"
    :style="{
  background: `
    radial-gradient(
      circle at ${mouseX}px ${mouseY}px,
      
      #0a3d91 1%,
      #001b44 10%
    )
  `
}"
  >
    <h1> student financiering</h1>

    <div class="link">
      <router-link to="/quiz">
        klik hier om de quiz te maken!
      </router-link>
    </div>
  </div>
</template>

<style>
.page {
  width: 100%;
  min-height: 100vh;
  transition: background 0.05s;

  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;

  
}
</style>