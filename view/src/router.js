import Vue from 'vue'
import VueRouter from 'vue-router'

import Connection from './pages/Connection'
import Culture from './pages/Culture'
import Index from './pages/Index'
import Introduction from './pages/Introduction'
import News from './pages/News'
import Production from './pages/Production'
import Store from './pages/Store'

Vue.use(VueRouter)

export default new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'Index',
            component: Index
        },
        {
            path: '/connection',
            name: 'Connection',
            component: Connection
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
            path: '/culture',
            name: 'Culture',
            component: Culture
        },
        {
            path: '/production',
            name: 'Production',
            component: Production
        },
        {
            path: '/store',
            name: 'Store',
            component: Store
        },
    ]
})