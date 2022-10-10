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
Vue.component('top-header', require('./components/Header.vue').default);
Vue.component('main-card', require('./components/MainCard.vue').default);
Vue.component('side-menu', require('./components/SideMenu.vue').default);
Vue.component('login-form', require('./components/LoginForm.vue').default);
Vue.component('task-card', require('./components/TaskCard.vue').default);
Vue.component('calendar-bar', require('./components/Calendar.vue').default);
Vue.component('dashboard-header', require('./components/DashboardHeader.vue').default);
Vue.component('projects-container', require('./components/Projects.vue').default);
Vue.component('task-modal', require('./components/TaskModal.vue').default);



// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
