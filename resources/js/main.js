import './bootstrap';
import { createApp } from 'vue';
import App from './App.vue';
import router from './routes'
import vuetify from './plugins/vuetify';





import.meta.glob(['../assets/**'])
createApp(App).use(vuetify).use(router).mount("#app")
