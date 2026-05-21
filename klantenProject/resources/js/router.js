import { createRouter, createWebHistory } from 'vue-router'

import App from './components/App.vue'
import Quiz from './components/Quiz.vue'

const routes = [

    {
        path: '/',
        component: App,
    },
    {
        path: '/quiz',
        component: Quiz,
    },
]

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router