require('./bootstrap');

import { createApp } from 'vue';
import router from  './routes';
import axios from 'axios';
import store from './store/index';
import App from './components/App.vue';
import Pagination from './components/PaginationComponent.vue';

axios.defaults.withCredentials = true;
axios.defaults.baseURL = 'https://zmprints.herokuapp.com/'; //'http://127.0.0.1:8000/';



store.dispatch('getUser').then( () => {
    const app = createApp(App)
    app.use(router);
    app.use(store);
    app.mount('#app');
    app.use(Pagination);

});




