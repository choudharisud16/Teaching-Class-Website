import { createWebHistory, createRouter } from "vue-router";
import ClassesComponents from './components/ClassesComponents.vue';
import ContactUsComponent from './components/ContactUsComponent.vue';
import HighlightsComponent from './components/HighlightsComponent.vue';
import HomeComponent from './components/HomeComponent.vue';

const history = createWebHistory();

const routes = [
  {
    name: 'HomeComponent',
    path: '/',
    component: HomeComponent
  },
  {
    name: 'ClassesComponents',
    path: '/classes',
    component: ClassesComponents
  },
  {
    name: 'HighlightsComponent',
    path: '/highlights',
    component: HighlightsComponent
  },
  {
    name: 'ContactUsComponent',
    path: '/conatct-us',
    component: ContactUsComponent
  },
];

const router = createRouter({ history, routes});

export default router;
