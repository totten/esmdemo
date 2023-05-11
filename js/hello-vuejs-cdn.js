import { createApp } from 'https://unpkg.com/vue@3/dist/vue.esm-browser.js'

createApp({
  data() {
    return {
      message: 'Hello World (via VueJS-CDN)'
    }
  }
}).mount('#app')
