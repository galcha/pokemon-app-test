require('./bootstrap')

import { createApp } from "vue"
import { createRouter, createWebHistory } from "vue-router"
import HomeComponent from "./components/HomeComponent.vue"
import DetailComponent from "./components/DetailComponent.vue"

const routes = [
    { path: '/', component: HomeComponent },
    { path: '/pokemon/:id', component: DetailComponent },
  ]
  
const router = createRouter({
    history: createWebHistory(),
    routes, 
})


const app = createApp({})
app.use(router)

app.mount('#app')