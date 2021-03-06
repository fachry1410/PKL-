require('./bootstrap');

window.Vue = require('vue')

Vue.component('example-component', require('./components/ExampleComponents').default)
Vue.component('product-add', require('./components/products/ProductAdd').default)

import store from './store'
const app = new Vue({
    el: '#app',
    store
});
