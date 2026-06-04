import { createRouter, createWebHistory } from 'vue-router'

import App from './components/App.vue'
import Quiz from './components/Quiz.vue'
import Authenticator from './components/Authenticator.vue'

const routes = [

    {
        path: '/',
        component: App,
    },
    {
        path: '/quiz',
        component: Quiz,
    },
    {
        path: '/authenticator',
        component: Authenticator,
    }
]

const router = createRouter({
    history: createWebHistory(),
    routes,
    scrollBehavior(to) {
        if (to.hash) {
            return {
                el: to.hash,
                behavior: 'smooth'
            }
        }
    }
})
export default router