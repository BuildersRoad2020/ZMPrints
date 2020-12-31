<template>
<div class="flex h-full justify-center items-center">
		<form @submit.prevent="handleLogin" class="w-full max-w-sm shadow-md rounded px-8 pt-6 pb-8 mb-4"> 
			<div class="md:flex md:items-center mb-6">
				<svg class="h-8 w-8 mr-2 animate-bounce" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
				</svg>
				<h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
					Welcome!
				</h2>
			</div>
			<div class="md:flex md:items-center mb-6">
				<div class="md:w-1/3">
					<label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="email">
						Email
					</label>
				</div>
				<div class="md:w-2/3">
					<input name="email" v-model="email" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="email" placeholder="Email">
				</div>
			</div>
			<div class="md:flex md:items-center mb-6">
				<div class="md:w-1/3">
					<label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="password">
						Password
					</label>
				</div>
				<div class="md:w-2/3">
					<input name="password" v-model="password" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="password" placeholder="*******">
				</div> 
			
			</div>
			<div class="md:flex md:my-8 mb-1 mt-1">
					<p v-if="errorMsg.length" class="text-red-500 text-xs italic pl-20">  {{errorMsg}}  </p> 
			</div>
<!-- 			<div class="md:flex md:items-center mb-6">
				<div class="md:w-1/3"></div>
				<label class="md:w-2/3 block text-gray-500 font-bold">
					<input class="mr-2 leading-tight" type="checkbox">
					<span class="text-sm">
						Remember me!
					</span>
				</label>
			</div> -->
			<div class="md:flex md:items-center">
				<div class="md:w-1/3"></div>
				<div class="md:w-2/3">


					<button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-gray-600 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
						<span class="absolute left-0 inset-y-0 flex items-center pl-3">

							    <svg class="h-5 w-5 text-white group-hover:text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
								<path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
							</svg>
						</span>
						Sign in
					</button>
				</div>
			</div>
			<div class="md:flex md:items-center">
				<div class="md:w-1/3"> </div>
				<div class="md:w-3/3">
					<div class="text-sm">
						<a href="#" class="font-medium text-gray-600 hover:text-gray-500">
							Forgot your password?
						</a>
					</div> 
				</div>
			</div>
         
		</form>
	</div> 
</template>

<script>

import {mapGetters} from 'vuex';
export default {
    data() {
        return {
            'email' : '',
            'password' : '',
            'errorMsg' : '',
        }
    },
    computed: {
        ...mapGetters([
            'authenticated'
        ])
    },
    methods: {
        async handleLogin() {

            this.errorMsg = '';

            //Action here
            try {
                await this.$store.dispatch('signIn', {email: this.email, password : this.password});
                this.$router.push({name: 'dashboard'});
            } catch (e) {
                this.errorMsg = e;
            }

        }
    },
    mounted() {
        if( this.authenticated) {
            this.$router.push({name: 'dashboard'});
        }
    }
}
</script>

