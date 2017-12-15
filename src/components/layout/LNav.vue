<template>
	<div>
		<b-navbar toggleable="md" type="dark" variant="success">
			<b-navbar-toggle target="nav_collapse"></b-navbar-toggle>
			<router-link to="/">
				<b-navbar-brand>Funceme</b-navbar-brand>
			</router-link>
			<b-collapse is-nav id="nav_collapse">
			    <b-navbar-nav>
		    		<b-nav-item>
		    			<router-link to="/ttable"> Table Default </router-link>
		    		</b-nav-item>
			    </b-navbar-nav>
			</b-collapse>
		</b-navbar>
	</div>
</template>
<script>
export default {
  name: 'nav',
  data() {
    return {
    }
  },
}
</script>
<style>
a:link {
    text-decoration: none;
    color: white;
}

a:visited {
    text-decoration: none;
    color: white;
}

a:hover {
    text-decoration: none;
    color: white;
}

a:active {
    text-decoration: none;
    color: white;
}
</style>