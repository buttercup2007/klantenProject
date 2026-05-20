import './bootstrap'
import { createApp } from 'vue'
import QrCode from './components/qrCode.vue'

const app = createApp({
    template: `<qr-code />`
})

app.component('qr-code', QrCode)

app.mount('#app')

