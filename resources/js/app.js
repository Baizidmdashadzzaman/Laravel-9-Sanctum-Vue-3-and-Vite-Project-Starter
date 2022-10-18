import './bootstrap';
// import '../sass/app.scss'
import Router from '@/router'
import store from '@/store'

import VueFeather from 'vue-feather';
import PerfectScrollbar from 'vue3-perfect-scrollbar'
import 'vue3-perfect-scrollbar/dist/vue3-perfect-scrollbar.css'

import { createApp } from 'vue/dist/vue.esm-bundler';


const app = createApp({})
app.use(Router)
app.use(store)
app.component(VueFeather.name, VueFeather);
app.use(PerfectScrollbar)
app.mount('#app')