<template>
	<div class="flex flex-col h-screen justify-between">
		<app-header> 


		</app-header>
		<main class="flex-grow bg-pink-100 shadow-inner shadow-2xl">
			<router-view class="items-center"> </router-view>
		</main>
		<app-footer>  </app-footer>
	</div>

</template>

<script>

import AppHeader from './partials/Header.vue';
import AppFooter from './partials/Footer.vue';
export default {
	components : {
		AppHeader,
		AppFooter,
	},

	mounted () {

			document.getElementById('nav-toggle').onclick = function(){
			document.getElementById("nav-content").classList.toggle("hidden");
			}				

	}

}

</script>