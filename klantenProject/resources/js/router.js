import { createRouter, createWebHistory } from 'vue-router'
import App from './components/App.vue'

const routes = [
  {
    path: '/',
    component: App,
  },
]

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes,
  scrollBehavior(to) {
    if (to.hash) {
      return {
        el: to.hash,
        behavior: 'smooth',
      }
    }
  },
})

export default router