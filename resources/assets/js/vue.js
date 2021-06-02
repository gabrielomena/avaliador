window.Vue = require('vue');
import axios from 'axios'
// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('endereco', require('./components/Endereco.vue'));
Vue.component('selecao-sexo', require('./components/SelecaoSexo.vue'));

Vue.use({
    install (Vue) {
        Vue.prototype.$api = axios.create({})
    }
})

const app = new Vue({
    el: '#app'
});

const app2 = new Vue({
    el: '#app2',
    axios
});
