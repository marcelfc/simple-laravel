import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

import state from './state'
import Tables from './modules/tables/index'

export default new Vuex.Store({
	state: state,
	modules: {
		Tables
	}
})
