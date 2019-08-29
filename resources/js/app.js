require('./bootstrap');

import store from './store';

window.Vue = require('vue');

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('my-component', require('./components/MyComponent.vue').default);
Vue.component('user-dashboard', require('./components/UserDashboard.vue').default);
Vue.component('form-input', require('./components/FormInput.vue').default);
Vue.component('event-click', require('./components/EventCLick.vue').default);


const app = new Vue({
    el: '#app',
    store,
});
