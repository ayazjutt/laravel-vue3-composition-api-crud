import './bootstrap';

import {createApp} from 'vue'
import router from './router'
import PackagesComponent from './components/packages/packages.vue'


createApp(PackagesComponent).use(router).mount("#app")
