<template>
	<header>
		<nav class="flex items-center justify-between flex-wrap bg-blue-900 p-5">
			<div class="flex items-center flex-shrink-0 text-white mr-6 ">
				<svg class="h-8 w-8 mr-2 animate-bounce" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
				</svg>
				<span class="font-semibold text-xl tracking-tight">ZMPrints</span>
			</div>

			<div class="block lg:hidden">
				<button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-blue-200 border-blue-400 hover:text-white hover:border-white">
					<svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
				</button>
			</div>
			<div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto" id="nav-content">
				<div class="text-sm lg:flex-grow">
					<ul class="flex">
						<li>
					<router-link :to="{name: 'products'}" class="flex rounded-full bg-gray-200 uppercase px-3 py-1 text-xs font-bold mr-3 hover:text-blue-900 hover:text-white mr-4">
						Shop
					</router-link> </li>
						<li v-if="authenticated">
					<router-link :to="{name: 'dashboard'}" class="flex rounded-full bg-gray-200 uppercase px-3 py-1 text-xs font-bold mr-3 hover:text-blue-900 hover:text-white mr-4">
						Dashboard
					</router-link> </li>
						<li>
					<router-link :to="{name: 'about'}" class="flex rounded-full bg-gray-200 uppercase px-3 py-1 text-xs font-bold mr-3 hover:text-blue-900 hover:text-white mr-4">
						About Us
					</router-link></li>
					</ul>
				</div>
				<div>
				<ul class="flex opacity-50 hover:opacity-100">
					<li v-if="!authenticated">
					<router-link :to="{name: 'login'}" class="flex rounded-full bg-gray-200 uppercase px-2 py-1 text-xs font-bold mr-3 hover:text-blue-900 hover: text-gray-700 mt-4 lg:mt-0">Login </router-link> </li>
					<li v-if="authenticated">
					<router-link :to="{name: 'logout'}" class="flex rounded-full bg-gray-200 uppercase px-2 py-1 text-xs font-bold mr-3 hover:text-blue-900 hover: text-gray-700 mt-4 lg:mt-0" @click="handleLogout()">Logout </router-link> </li>
		
				</ul>
				</div>
			</div>
		</nav>
	</header>
</template>

<script>
import {mapGetters} from 'vuex';
export default {
    computed: {
        ...mapGetters([
            'authenticated'
        ])
    },
    methods: {
        async handleLogout() {
            await this.$store.dispatch('logout');
            this.$router.push({name: 'products'});
        }
    }
}
</script>