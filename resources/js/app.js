require('./bootstrap');
import '../css/app.css'
import {createApp} from 'vue/dist/vue.esm-bundler.js'
import $ from 'jquery'
import '@fortawesome/fontawesome-free/js/brands.js'
import '@fortawesome/fontawesome-free/js/solid.js'
import '@fortawesome/fontawesome-free/js/fontawesome.js'

const app = createApp({
    data:()=>({

    }),
    mounted() {
    },
    methods:{
        viewMinCard(){
            $(".view-card-min").stop().slideToggle()
        }
    }


})
app.mount('#app')
