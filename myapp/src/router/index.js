import Vue from 'vue'
import Router from 'vue-router'

Vue.use(Router)

export default new Router({
	mode: 'history',
  routes: [
  
	{ path: '/', redirect: '/controlboard/home' },
   	{ path: '/login', component: resolve => require(['@/components/Login.vue'], resolve)},
   	{ path: '/register', component: resolve => require(['@/components/Register.vue'], resolve)},
    { path: '/controlboard', component: resolve => require(['@/components/controlboard/index.vue'], resolve),
        children:[
          	{ path: 'home', component: resolve => require(['@/components/controlboard/Home/index.vue'], resolve) },
        	{ path: 'artlist', component: resolve => require(['@/components/controlboard/Art/artlist.vue'], resolve) },
        	{ path: 'persoanl', component: resolve => require(['@/components/controlboard/Personal/index.vue'], resolve),
        		children:[
        			{ path: 'articlemanage', component: resolve => require(['@/components/controlboard/Personal/articlemanage.vue'], resolve) },
        			{ path: 'changepass', component: resolve => require(['@/components/controlboard/Personal/changepass.vue'], resolve) },
        			{ path: 'publishart', component: resolve => require(['@/components/controlboard/Personal/publishart.vue'], resolve) },
        		]
        	},
        ]
   	},
  ]
})
