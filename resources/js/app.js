require('./bootstrap');
import Vue from 'vue';
import VueRouter from 'vue-router'
import LaravelVuePagination from 'laravel-vue-tailwind-pagination';
Vue.use(LaravelVuePagination);

Vue.use(VueRouter)

import About from "../pages/About";
import App from "../components/App";
import Article from "../pages/Article";
import Home from "../pages/Home";
import '../css/app.css';

const routes = [
    { path: '/',name: "home", component: Home },
    { path: '/article/:id',name: "article", component: Article },
    { path: '/about', component: About},
    { path: '*', redirect: { name: 'home' }},
]

const router = new VueRouter({
    routes,
    mode: "history"
})

const app = new Vue({
    el: "#app",
    components:{App},
    router
})
