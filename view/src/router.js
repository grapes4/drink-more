import Vue from 'vue'
import VueRouter from 'vue-router'

import Connection from './pages/Connection'
import Investment from './pages/Investment'
import Index from './pages/Index'
import Introduction from './pages/Introduction'
import News from './pages/News'
import Production from './pages/Production'
import Comment from './pages/Comment'

Vue.use(VueRouter)

export default new VueRouter({
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
        {
            path: '/comment',
            name: 'Comment',
            component: Comment
        },
        {
            path: '/connection',
            name: 'Connection',
            component: Connection
        }
    ]
})