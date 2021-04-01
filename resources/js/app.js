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
        $('.responsive-group2').slick({
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 3,
            responsive: [
                {
                    breakpoint: 700,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 500,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
        $('.responsive-group5').slick({
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 4,
            responsive: [
                {
                    breakpoint: 900,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 700,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 500,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
        $('.responsive-group3').slick({
            infinite: false,
            speed: 300,
            slidesToShow: 1,
            autoplay: true,
            autoplaySpeed: 1500,
            slidesToScroll: 1,
        });
        $('.multiple-items').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3
        });
        $(".slider").slick({
            dots: true,
            infinite: true,
            speed: 300,
            autoplay: true,
            autoplaySpeed: 2000,
            slidesToShow: 1,
            adaptiveHeight: true,
/*            autoplay: true,
            autoplaySpeed: 2000,*/
        });
        $('.responsive').slick({
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 3,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    },
    created() {
    }
})
app.mount('#app')
