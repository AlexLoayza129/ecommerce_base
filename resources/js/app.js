window._ = require('lodash');
window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// Importing modules
import './utilities/custom_slider';
import Splide from '@splidejs/splide';
import '@splidejs/splide/css';
import $ from 'jquery';
window.$ = window.jQuery = $;


var splide = new Splide( '.splide', {
    direction: 'ttb',
    height   : '100vh',
    type   : 'loop',
    perPage: 3,
    perMove: 1,
} );
splide.mount();

/**
 *  Vue settings 
 */
// window.Vue = require('vue').default;

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

// const app = new Vue({
//     el: '#app',
// });


