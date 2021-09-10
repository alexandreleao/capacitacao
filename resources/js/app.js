require('./bootstrap');
import { createApp } from 'vue';
import { Quasar } from 'quasar';

import HelloWorld from './components/HelloWorld.vue';
import LoginForm from './forms/Login.vue';

const app = createApp({});

app.use(Quasar)

app.component('hello-world', HelloWorld);
app.component('login-form', LoginForm);

// mount the app to the DOM
app.mount('#app');