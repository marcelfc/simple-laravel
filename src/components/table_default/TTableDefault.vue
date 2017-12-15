<template>
  <div>
  	<h4>Table</h4>
  	<b-table striped hover :items="itens" :fields="fields"></b-table>
  	<b-pagination align="center" :total-rows="number_of_pages" v-model="currentPage" :per-page="10" @change="changePage">
    </b-pagination>
  </div>
</template>
<script>
import Data from './../../services/data.js'
export default {
  name: 'ttabledefault',
  data() {
    return {
    	fields: [
    		{ key: 'codigo', sortable: true },
    		{ key: 'temperatura_max', sortable: true },
    		{ key: 'temperatura_min', sortable: true },
    		{ key: 'precipitacao_acumulada', sortable: true },
    	],
    	itens: [],
    	currentPage: 1,
    	number_of_pages: 10
    }
  },
  methods: {
  	changePage (pageNum){
  		Data.list(pageNum).then(data => this.itens = data.data.list)
  	}
  },
  mounted() {
  	Data.list(this.currentPage).then(data => this.itens = data.data.list)
  	Data.list().then(dado => this.number_of_pages = dado.data.paginator.page.total)
  }
}
</script>
<style>
.page-link{
    text-decoration: none;
    background-color: #e9ecef;
    border-color: #ddd;
}
a:link {
    text-decoration: none;
    color: #007bff;
}
</style>