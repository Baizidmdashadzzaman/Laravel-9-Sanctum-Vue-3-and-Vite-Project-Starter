import './bootstrap';
// import '../sass/app.scss'
import Router from '@/router'
import store from '@/store'

import feather from 'vue-icon'
import PerfectScrollbar from 'vue3-perfect-scrollbar'
import 'vue3-perfect-scrollbar/dist/vue3-perfect-scrollbar.css'

import { createApp } from 'vue/dist/vue.esm-bundler';


const app = createApp({})
app.use(Router)
app.use(store)
app.use(feather, 'v-icon')
app.use(PerfectScrollbar)
app.mount('#app')