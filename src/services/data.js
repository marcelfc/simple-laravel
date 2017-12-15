import {http} from './config.js'

export default {
	list: (page) => {
		return http.get('/tempo/previsao-numerica?page=' + page)
	}
}