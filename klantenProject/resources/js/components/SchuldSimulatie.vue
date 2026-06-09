<script setup>
import { ref, computed } from 'vue'

const monthlyLoan = ref(200)

const totalDebt = computed(() => {
  return monthlyLoan.value * 12 * 4
})
</script>

<template>
  <div class="simulator">
    <h2>Schuld Simulator</h2>

    <p>Hoeveel leen je per maand?</p>

    <input
      type="range"
      min="0"
      max="500"
      step="25"
      v-model="monthlyLoan"
    >

    <p>€{{ monthlyLoan }} per maand</p>

    <h3>
      Na 4 jaar heb je ongeveer €{{ totalDebt.toLocaleString() }} geleend
    </h3>
  </div>
</template>