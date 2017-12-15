import axios from 'axios'

export const http = axios.create({
	baseURL: 'http://api.funceme.br/v1/rest',
	timeout: 100000,
})