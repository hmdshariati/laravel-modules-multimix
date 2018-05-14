window.Vue = require('vue');

import BootstrapVue from 'bootstrap-vue'
Vue.use(BootstrapVue);

Vue.component('example', require('./Example'));

const app = new Vue({

    el: '#app'

});
