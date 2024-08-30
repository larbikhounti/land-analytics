import '../css/app.css'
import 'highlight.js/styles/stackoverflow-light.css'
import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'

import hljs from 'highlight.js/lib/core';
import javascript from 'highlight.js/lib/languages/javascript';
import hljsVuePlugin from "@highlightjs/vue-plugin";
hljs.registerLanguage('javascript', javascript);

createInertiaApp({
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
    return pages[`./Pages/${name}.vue`]
  },
  title: title => title ? `${title} - Simo` : 'Simo',
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .use(hljsVuePlugin)
      
      .mount(el)
  },
})