require('./bootstrap');
import '../css/app.css'
import {createApp} from 'vue/dist/vue.esm-bundler.js'
import $ from 'jquery'
import 'slick-carousel/slick/slick.js'
import 'slick-carousel/slick/slick-theme.css'
import 'slick-carousel/slick/slick.css'
const app = createApp({
    data: () => ({
        all_menu_id: 1,
    }),
    methods: {
        viewMinCard() {
            $(".view-card-min").stop().slideToggle()
        },
        viewMenuFotMobile() {
            $(".group-menu-index-page").stop().slideToggle(200)
            $(".blur-web").stop().fadeToggle(100)
        },
        hideMenu() {
            $(".group-menu-index-page").stop().slideToggle(100)
            $(".blur-web").stop().fadeToggle(200)
        },
        setIdAllMenu($id) {
            this.all_menu_id = $id;
        },
        viewMenuBar() {
            $(".view-all-menu-item").stop().slideDown(100)
        },
        hideMenuBar() {
            $(".view-all-menu-item").stop().slideUp(100)
        },
        test() {
            alert('ok test')
        }
    },
    mounted() {
        $(".slider").slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            adaptiveHeight: true,
/*            autoplay: true,
            autoplaySpeed: 2000,*/
        });
    }
})
app.mount('#app')
