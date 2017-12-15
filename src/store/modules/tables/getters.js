export default {
	listTable: state => {
		let list = state.itens.slice()
		return list
	},
	// searchTable: estado => termo => {
	//   let resultado = []
	//   if(termo != '') {
	//     for (let i = 0; i < estado.tarefas.length; i++) {
	//       if(estado.tarefas[i].indexOf(termo) > -1)
	//         resultado.push(estado.tarefas[i])
	//         }
	//   }

	//   return resultado
	// }
}