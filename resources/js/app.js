import { createApp, h } from 'vue'
import { createInertiaApp, /* Link */ } from '@inertiajs/inertia-vue3' /* option 1 */
import { InertiaProgress } from '@inertiajs/progress'

createInertiaApp({
  resolve: name => require(`./Pages/${name}`),
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
    //   .component("Link", Link) /* option 1 - import of Link on different pages is not required */
      .mount(el)
  },
})

InertiaProgress.init({
    showSpinner: true,
})
