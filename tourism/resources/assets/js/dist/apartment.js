import Vue from 'vue';
import App from '../apartments/App';
import { store } from '../apartments/store/';


new Vue({
el:'#app',
render:h => h(App),
store

});
