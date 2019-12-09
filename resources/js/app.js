/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
window.axios=require('axios');

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('user', require('./components/User.vue').default);
Vue.component('create', require('./components/Create.vue').default);
Vue.component('edit', require('./components/Edit.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    data: {
      like1:false,
      like2:false,
      like3:false,
      like4:false,
      like5:false,
      like6:false,
      like7:false,
      like8:false,
      like9:false,
      like10:false,
      like11:false,
      like12:false,




  }
});
