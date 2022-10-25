import { createWebHistory, createRouter } from 'vue-router'
import store from '@/store'

/* Guest Component */
const Login = () => import('@/components/Login.vue')
const Register = () => import('@/components/Register.vue')
/* Guest Component */

/* Layouts */
const DahboardLayout = () => import('@/components/layouts/Default.vue')
/* Layouts */

/* Authenticated Component */
const Dashboard = () => import('@/components/Dashboard.vue')
const Setting = () => import('@/components/Setting/Setting.vue')
const CategoryList = () => import('@/components/Category/CategoryList.vue')
const CategoryAdd = () => import('@/components/Category/CategoryAdd.vue')
const CategoryEdit = () => import('@/components/Category/CategoryEdit.vue')
/* Authenticated Component */

const sitename =import.meta.env.VITE_SITE;

const routes = [
    {
        name: "login",
        path: "/login",
        component: Login,
        meta: {
            middleware: "guest",
            title: `Login`
        }
    },
    {
        name: "register",
        path: "/register",
        component: Register,
        meta: {
            middleware: "guest",
            title: `Register`
        }
    },
    {
        path: "/",
        component: DahboardLayout,
        meta: {
            middleware: "auth"
        },
        children: [
            {
                name: "dashboard",
                path: '/',
                component: Dashboard,
                meta: {
                    title: `Dashboard`
                }
            }
        ]
    },
    {
        path: "/setting",
        component: DahboardLayout,
        meta: {
            middleware: "auth"
        },
        children: [
            {
                name: "setting",
                path: '/setting',
                component: Setting,
                meta: {
                    title: `Setting`
                }
            }
        ]
    },
    {
        path:"/category/list",
        component:DahboardLayout,
        meta:{
            middleware:"auth"
        },
        children:[
            {
                name:"categorylist",
                path: '/category/list',
                component: CategoryList,
                meta:{
                    title:`Category List`
                }
            }
        ]
    },
    {
        path:"/category/add",
        component:DahboardLayout,
        meta:{
            middleware:"auth"
        },
        children:[
            {
                name:"categoryadd",
                path: '/category/add',
                component: CategoryAdd,
                meta:{
                    title:`Category Add`
                }
            }
        ]
    },
    {
        path:"/category/edit",
        component:DahboardLayout,
        meta:{
            middleware:"auth"
        },
        children:[
            {
                name:"categoryedit",
                path: '/category/edit/:id',
                component: CategoryEdit,
                meta:{
                    title:`Category Edit`
                }
            }
        ]
    },
]

const router = createRouter({
    history: createWebHistory(),
    routes, // short for `routes: routes`
})

router.beforeEach((to, from, next) => {
    document.title = sitename+to.meta.title
    if (to.meta.middleware == "guest") {
        if (store.state.auth.authenticated) {
            next({ name: "dashboard" })
        }
        next()
    } else {
        if (store.state.auth.authenticated) {
            next()
        } else {
            next({ name: "login" })
        }
    }
})

export default router