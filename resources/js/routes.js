import { createRouter, createWebHistory } from 'vue-router';

import Signin from './components/auth/Signin.vue';
import Dashboard from './components/dashboard/Dashboard.vue';
import DashboardDetail from './components/dashboard/DashboardDetail.vue';
import Products from './components/products/Products.vue';
import About from './components/about/About.vue';
import store from './store/index';

const router = createRouter( { 
    history: createWebHistory(),
    routes : [
        { path: '/', component: Products, name: 'home'},          
        { path: '/login', component: Signin, name: 'login'},    
        { path: '/dashboard', component: Dashboard, name: 'dashboard', meta:{requiresAuth:true}},
        { path: '/dashboard/:id', component: DashboardDetail, name: 'dashboard-detail', meta:{requiresAuth:true}, props:true},   //like route model binding     
        { path: '/', component: Products, name: 'logout', alias: '/', meta:{requiresAuth:true}},        
        { path: '/products', component: Products, name: 'products', alias: '/'},
        { path: '/about', component: About, name: 'about'},
     
        
    ]
});

router.beforeEach( (to, from, next) => {
    if (to.matched.some(record => record.meta.requiresAuth)) {
        if (!store.getters.authenticated) {
          next({name: 'dashboard'})
        } else {
          next()
        }
    } else {
        next() // make sure to always call next()!
    }

});
export default router;