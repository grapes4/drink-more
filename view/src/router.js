import Vue from 'vue'
import VueRouter from 'vue-router'

import Index from './pages/Index'

const Connection = () => import('./pages/Connection.vue');
const Investment = () => import('./pages/Investment.vue');
const Introduction = () => import('./pages/Introduction.vue');
const News = () => import('./pages/News.vue');
const Production = () => import('./pages/Production.vue');
// import Connection from './pages/Connection'
// import Investment from './pages/Investment'
// import Introduction from './pages/Introduction'
// import News from './pages/News'
// import Production from './pages/Production'
// import Comment from './pages/Comment'

Vue.use(VueRouter)

const router = new VueRouter({
    mode: 'hash',
    routes: [
        {
            path: '/',
            name: 'Index',
            component: Index
        },
        {
            path: '/introduction',
            name: 'Introduction',
            component: Introduction
        },
        {
            path: '/news',
            name: 'News',
            component: News
        },
        {
            path: '/production',
            name: 'Production',
            component: Production
        },
        {
            path: '/investment',
            name: 'Investment',
            component: Investment
        },
        // {
        //     path: '/comment',
        //     name: 'Comment',
        //     component: Comment
        // },
        {
            path: '/connection',
            name: 'Connection',
            component: Connection
        }
    ],
});

export default router;