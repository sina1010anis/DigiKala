require('./bootstrap');
import '../css/app.css'
import {createApp} from 'vue/dist/vue.esm-bundler.js'
import $ from 'jquery'
import '@fortawesome/fontawesome-free/js/brands.js'
import '@fortawesome/fontawesome-free/js/solid.js'
import '@fortawesome/fontawesome-free/js/fontawesome.js'

const app = createApp({
    data:()=>({
        all_menu_id:1,
    }),
    mounted() {
    },
    methods:{
        viewMinCard(){
            $(".view-card-min").stop().slideToggle()
        },
        viewMenuFotMobile(){
            $(".group-menu-index-page").stop().slideToggle(200)
            $(".blur-web").stop().fadeToggle(100)
        },
        hideMenu(){
            $(".group-menu-index-page").stop().slideToggle(100)
            $(".blur-web").stop().fadeToggle(200)
        },
        setIdAllMenu($id){
            this.all_menu_id = $id;
        },
        viewMenuBar(){
            $(".view-all-menu-item").stop().slideDown(100)
        },
        hideMenuBar(){
            $(".view-all-menu-item").stop().slideUp(100)
        },
        test(){
            alert('ok test')
        }
    }


})
app.mount('#app')
