import { createRouter, createWebHistory } from 'vue-router';
import PackagesComponent from '../components/packages/packages.vue'


const routes = [
    {
        path: '/',
        name: 'packages',
        component: PackagesComponent
    }
]

export default createRouter({
    history: createWebHistory(),
    routes
})
