import './bootstrap';
// import '../sass/app.scss'
import Router from '@/router'
import store from '@/store'

import VueFeather from 'vue-feather';
import PerfectScrollbar from 'vue3-perfect-scrollbar'
import 'vue3-perfect-scrollbar/dist/vue3-perfect-scrollbar.css'

import { createApp } from 'vue/dist/vue.esm-bundler';

import VueSweetalert2 from 'vue-sweetalert2';
import 'sweetalert2/dist/sweetalert2.min.css';

import { QuillEditor } from '@vueup/vue-quill'
import '@vueup/vue-quill/dist/vue-quill.snow.css';


const app = createApp({})
app.use(Router)
app.use(store)
app.component(VueFeather.name, VueFeather);
app.use(PerfectScrollbar)
app.use(VueSweetalert2);
app.component('QuillEditor', QuillEditor)
app.mount('#app')