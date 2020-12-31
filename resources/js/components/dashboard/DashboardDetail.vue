<template> 
<div class="text-gray-700 body-font overflow-hidden bg-white">

  <div class="container px-5 py-24 mx-auto">                        
    <div class="lg:w-4/5 mx-auto flex flex-wrap">
      <img alt="ecommerce" class="min-h-screen lg:w-1/2 w-full object-cover object-center rounded border-1 rounded-lg border-gray-200" v-bind:src="dashboard.image_path">
      <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">  <router-link :to="{name: 'dashboard'}">                       
                        <button type="button" class="flex mt-2 ml-auto px-4 py-2 rounded-md shadow-sm text-sm font-medium text-purple-500 bg-white hover:bg-indigo-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        <!-- Heroicon name: back -->
                        <svg class="-ml-1 mr-2 h-5 w-5 text-purple-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                        </svg>
                        Back
                        </button> </router-link>

        <h2 class="text-sm title-font text-gray-500 tracking-widest">Product Name</h2> 
        <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{dashboard.name}}</h1>
        <div class="flex mb-4">

            <span class="flex ml-3 pl-3 py-2 border-l-2 border-gray-200 text-gray-600">4(tentative) Views</span>    
            <span class="flex ml-3 pl-3 py-2 border-l-2 border-gray-200 text-gray-600">   Qty Available:  {{dashboard.quantity}} </span>  
           
            <span class="flex ml-3 pl-3 py-2 border-l-2 border-gray-200">
                <a class="text-gray-500">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                </svg>
                </a>
                <a class="ml-2 text-gray-500">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                </svg>
                </a>
                <a class="ml-2 text-gray-500">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
            </a>
          </span>
          <span class="flex ml-3 pl-3 py-2 border-l-2 border-gray-200 text-gray-600">  </span>  
        </div>
        <p class="leading-relaxed"> {{dashboard.details}} </p>
        <span class="flex mt-1 items-center pb-5 border-b-2 border-gray-200 mb-1">     </span>
         <div class="flex mt-1 items-center pb-5 border-b-2 border-gray-200 mb-1">  
              <h3 class="text-sm title-font text-gray-400 tracking-widest flex mr-auto">Image Gallery</h3>  
                        <span v-for="images in image" :key="images.image_path" class="mr-auto transition duration-500 ease-in-out bg-grey-600 z-40 hover:bg-grey-600 transform hover:-translate-y-1 hover:scale-800  z-40 ">
                    <img alt="ecommerce" class="h-20 w-20 flex mt-4 rounded-lg border-light-blue-500 border-opacity-75 hover:scale-800  z-40 border-1" v-bind:src="images.image_path">
                        </span>
                
         </div>
        <div class="flex">
          <span class="title-font font-medium text-2xl text-gray-900 mt-2">Php {{dashboard.rate}}</span>
                                               <button type="button" class="flex mt-2 ml-auto px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-indigo-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        <!-- Heroicon name: pencil -->
                        <svg class="-ml-1 mr-2 h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                        </svg> 
                        Edit
                        </button>


        </div>
        <div class="flex mt-2">
             <h2 class="text-sm title-font text-gray-500 tracking-widest flex mr-auto">Category</h2> <span class="flex mr-4 items-center justify-center px-2 py-2 text-xs font-bold leading-none text-red-100 bg-purple-600 rounded-full" v-for="categories in category" :key="categories.name"> {{categories.name}} </span>
        </div>
         
      </div>
    </div>
  </div>
</div>
</template>
<script>
export default {
    props: ['id'],
    data() {
        return {
            dashboard: [],
            category: [],
            image: [],
        }
    },
    mounted() {
        axios.get('api/products/' + this.id).then ( (res) => {
            console.log(res);
            this.dashboard = res.data.data;
            this.category = res.data.data.category;
            this.image = res.data.data.image;
        });
    }
}
</script>