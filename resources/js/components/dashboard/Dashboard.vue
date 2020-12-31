<template>
<div>
    <div class="grid grid-cols-2 gap-4 p-4 m-4 bg-white rounded-md flex flex-col border-2 border-gray-300">    
        <div class="col-span-2">
        <h1 class="text-2xl font-bold leading-7 text-pink-900 sm:text-3xl sm:truncate"> Dashboard  </h1>
        </div>
        <div>
                <span class="sm:ml-3">
                    <button class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-500 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" type="button" style="transition: all .15s ease" v-on:click="toggleModal()">
                     <!-- Heroicon name: plus -->
                <svg class="-ml-1 mr-2 h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" />
                </svg>
                    New Product
                </button>
                </span>
          
        </div>

        <div class="col-span-3">
        <p class="text-sm text-gray-500"> Hello {{user.name}}, Welcome!  </p>
        </div>



    </div>

<!--Modals -->
            <div v-if="showModal" class="overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center flex">
                         
            <div class="relative w-auto my-6 mx-auto max-w-6xl border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
            <div class="flex items-start justify-between p-5 border-b border-solid border-gray-300 rounded-t">
            <div class="mx-auto flex-shrink-0 flex items-center justify-center h-full w-full rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
            <!-- Heroicon name: exclamation -->
            <svg class="h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
            </svg>
            </div>
            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
            <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-headline">
            Add Product
            </h3>
            <div class="mt-2">

          <p class="my-4 text-gray-600 text-lg leading-relaxed">
              I always felt like I could do anything. That’s the main
              thing people are controlled by! Thoughts- their perception
              of themselves! They're slowed down by their perception of
              themselves. If you're taught you can’t do anything, you
              won’t do anything. I was taught I could do everything.
            </p>


   
            </div>
            </div>
            </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
            <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-indigo-500 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm" style="transition: all .15s ease" v-on:click="toggleModal()">
            Add
            </button>
            <button type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-indigo-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm" style="transition: all .15s ease" v-on:click="toggleModal()">
            Cancel
            </button>
            </div>
            </div>
            </div>
            <div v-if="showModal" class="fixed inset-0 z-40 bg-gray-500 opacity-75"></div>
          

<!-- Table Area -->
    <div class="p-4 m-4 bg-white rounded-md flex flex-col border-2 border-gray-300">
        <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Product
                    </th>

                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Product Name
                    </th>
                    <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Rate(Php)
                    </th>
                    <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Quantity Available
                    </th>
                    <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                        No. of Views 
                    </th>
                                      
                    <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider" colspan="3">
                        Actions
                    </th>

                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <dashboard-item v-for="dashboard in dashboards" :key="dashboard.id" :dashboard="dashboard"></dashboard-item>

                </tbody>
                </table>


            </div>
<!--             <div>
      <button type="submit" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-indigo-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm" style="transition: all .15s ease" v-on:click="firstpage()">
            first
       </button>

             <button type="submit" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-indigo-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm" style="transition: all .15s ease" v-on:click="lastpage()">
            last
       </button>
            </div> -->
        <pagination-component :meta="meta" v-on:pagination="getProducts"> </pagination-component>

            </div>
        </div>
        </div>
    </div>
</div>
 
</template>

<script>


import {mapGetters} from 'vuex';
import PaginationComponent from '../PaginationComponent.vue';
import DashboardItem from './DashboardItem.vue';

export default {
    components: {
        DashboardItem,
        PaginationComponent
    },
    data() {
        return {
        showModal: false,
        dashboards: [],
        meta:{}
        }
    },    

    mounted() {
        this.getProducts()
    },

    methods: {
        getProducts(page) {
        axios.get('api/products', {
            params: {
                page
            }
        }).then( (res) => {
            console.log(res);
            this.dashboards = res.data.data.results;  //data from axios and and from data()
            this.meta = res.data.meta;   
                            
        });
        },
    toggleModal: function(){
        this.showModal = !this.showModal;
        },

    },   

    computed: {
        ...mapGetters([
            'user'
        ])    
    },
    name: "regular-modal",


}
</script>





