import { createApp } from "vue";
import 'bootstrap'
import 'bootstrap/dist/css/bootstrap.min.css'
import App from "./App.vue";
import routes from './routes'

createApp(App).use(routes).mount("#app");