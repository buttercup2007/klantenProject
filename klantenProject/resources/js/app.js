import { createApp } from 'vue'
import QrCode from './components/qrCode.vue'

const app = createApp({})

app.component('qr-code', QrCode)

app.mount('#app')

