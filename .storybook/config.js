import { configure } from '@storybook/vue';

import Vue from 'vue';

// Import your custom components.
import Mybutton from '../resources/assets/js/stories/Button.vue';

// Register custom components.
Vue.component('my-button', Mybutton);

function loadStories() {

  // You can require as many stories as you need.
  require('../resources/assets/js/stories');
}

configure(loadStories, module);
