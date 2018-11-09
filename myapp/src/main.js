// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
import router from './router'

import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';
Vue.use(ElementUI);

import axios from 'axios'
Vue.prototype.$http = axios

import {API_ROOT} from './config'

import qs from 'qs';
Vue.prototype.$qs = qs;


import '../static/ue/ueditor.config.js'
import '../static/ue/ueditor.all.min.js'
import '../static/ue/lang/zh-cn/zh-cn.js'　　　
import '../static/ue/ueditor.parse.min.js'

Vue.filter("contpure", function(value) { 
	if(value){
		value=value.replace(/<\/?.+?>/gi,"");
	 	value=value.replace(/ /gi,"");
	 	value=value.replace(/&nbsp;/gi, "");
	 	return value  
	}
	
}); 

axios.interceptors.request.use(config=>{
	config.url=API_ROOT+config.url
	return config
},error=>{
	
})

import store from './vuex/store'

Vue.config.productionTip = false

/* eslint-disable no-new */
new Vue({
  el: '#app',
  store,
  router,
  components: { App },
  template: '<App/>'
})

 