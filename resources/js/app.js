import './bootstrap';
import '../css/app.css';

import {createApp} from 'vue';
import App from './App.vue';

const app = createApp(App);
// app.component('home-component', Home);
app.mount("#app");
