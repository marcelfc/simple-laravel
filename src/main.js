import Vue from 'vue'
import App from './App.vue'

import BootstrapVue from 'bootstrap-vue'
import VueRouter from 'vue-router'
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

Vue.use(BootstrapVue);
Vue.use(VueRouter);

import Home from './components/home_default/HomeDefault.vue'
import TTable from './components/table_default/TTableDefault.vue'

const router = new VueRouter({
	mode: 'history',
	routes: [
		{path: '/',component: Home},
		{path: '/ttable',component: TTable}
	]
})

new Vue({
  el: '#app',
  router,
  render: h => h(App)
})
