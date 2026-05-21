import './bootstrap'
import { createApp } from 'vue'
import Main from './components/Main.vue'
import router from './router'
import VueQrcode from '@chenfengyuan/vue-qrcode';

const app = createApp(Main)

app.component(VueQrcode.name, VueQrcode);
app.use(router)
app.mount('#app')