console.log("🔥 app.js is running")

import { createApp } from 'vue'

const app = createApp({
    template: `<h1 style="color:green">Vue is WORKING</h1>`
})

app.mount('#app')