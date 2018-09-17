import Vue from 'vue'
import Router from 'vue-router'

Vue.use(Router)

export default new Router({
  routes: [
   	{ path: '/', redirect: '/login' },
   	{ path: '/login', component: resolve => require(['@/components/Login.vue'], resolve)},
   	{ path: '/register', component: resolve => require(['@/components/Register.vue'], resolve)},
    { path: '/controlboard', component: resolve => require(['@/components/controlboard/index.vue'], resolve)
//      children:[
//        { path: 'info', component: resolve => require(['./components/info.vue'], resolve) }
//      ]
   	},
  ]
})
