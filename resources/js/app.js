require('./bootstrap');
import '../css/app.css'
import {createApp} from 'vue/dist/vue.esm-bundler.js'
import $ from 'jquery'
import 'slick-carousel/slick/slick.js'
import 'slick-carousel/slick/slick-theme.css'
import 'slick-carousel/slick/slick.css'
import axios from "axios";

const app = createApp({
    data: () => ({
        all_menu_id: 1,
        srcBackOneProduct: '',
        id_comment: '',
        address_comment: '/product/new/comment/reply/',
        text_vote_good:'',
        text_vote_not_good:'',
        text_comment:'',
        text_title:'',
        good_product:[],
        not_good_product:[],
        filter_menu:[],
        menu_id:0,
        text_filter:''
    }),
    methods: {
        sendFilterBack(){
            axios.post('/product/filter' , {
                id:this.menu_id,
                item_filter:this.filter_menu
            }).then((res)=>{
                console.log(res.data)
                $(".view-product-menu-search").html( res.data)
            })
        },
        setFilterSend(id){
            this.menu_id = id;
            this.filter_menu.push(this.text_filter)
        },
        showPageNewComment(){
          $(".group-form-new-comment").stop().fadeIn();
          $(".blur-web").stop().fadeIn();
        },
        send_comment(id ){
            if (this.text_comment != '' || this.text_title != ''){
                axios.post('/product/new/comment' , {
                    'title':this.text_title,
                    'comment':this.text_comment,
                    'vote_good':this.good_product,
                    'vote_bad':this.not_good_product,
                    'id':id,
                }).then((res)=>{
                    console.log(res.data)
                    $(".group-form-new-comment").stop().fadeOut();
                    $(".blur-web").stop().fadeOut();
                    $(".view-err-sm").html('با تشکر از نظر شما').fadeIn().css({'padding':'5px 20px'})
                    setTimeout(function (){
                        $(".view-err-sm").fadeOut()
                    },2000)
                })
            }
        },
        set_vote_good(){
            if (this.text_vote_good != ''){
                this.good_product.push(this.text_vote_good)
                this.text_vote_good = ''
            }
        },
        set_vote_not_good(){
            if (this.text_vote_not_good != ''){
                this.not_good_product.push(this.text_vote_not_good)
                this.text_vote_not_good = ''
            }

        },
        viewPageReplyComment(id){
            this.id_comment = id
            $(".blur-web").fadeIn()
            $(".page-reply-comment-product").fadeIn()
        },
        set_like(id){
            axios.post('/set_like' , {id}).then(function (res){
                if (res.data == 'Err Like'){
                    $(".view-err-sm").html('فقط یک بار می توانید رای دهید').fadeIn().css({'padding':'5px 20px'})
                    setTimeout(function (){
                        $(".view-err-sm").fadeOut()
                    },2000)
                }
                if (res.data == 'Ok Like'){
                    $(".view-err-sm").html('با تشکر از رای شما').fadeIn().css({'padding':'5px 20px'})
                    setTimeout(function (){
                        $(".view-err-sm").fadeOut()
                    },2000)
                }
                if (res.data == 'not Login'){
                    $(".view-err-sm").html('لطفا ابتدا وارد ساید شوید').fadeIn().css({'padding':'5px 20px'})
                    setTimeout(function (){
                        $(".view-err-sm").fadeOut()
                    },2500)
                }
            })
        },
        set_dis_like(id){
            axios.post('/set_dis_like' , {id}).then(function (res){
                if (res.data == 'Err Dis Like'){
                    $(".view-err-sm").html('فقط یک بار می توانید رای دهید').fadeIn().css({'padding':'5px 20px'})
                    setTimeout(function (){
                        $(".view-err-sm").fadeOut()
                    },2000)
                }
                if (res.data == 'Ok Dis Like'){
                    $(".view-err-sm").html('با تشکر از رای شما').fadeIn().css({'padding':'5px 20px'})
                    setTimeout(function (){
                        $(".view-err-sm").fadeOut()
                    },2000)
                }
                if (res.data == 'not Login'){
                    $(".view-err-sm").html('لطفا ابتدا وارد ساید شوید').fadeIn().css({'padding':'5px 20px'})
                    setTimeout(function (){
                        $(".view-err-sm").fadeOut()
                    },2500)
                }
            })
        },
        setScrForBackOnePageProduct(src) {
            this.srcBackOneProduct = src;
        },
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
        $(".blur-web").click(function (){
            $('.page-reply-comment-product').fadeOut()
            $('.group-form-new-comment').fadeOut()
        })
        $(".view-err-sm").click(()=>{
            $(".view-err-sm").fadeOut()
        })
        $(".p-sm-filter i").click(function () {
            $(".view-menu-item-filter").stop().slideToggle()
        });
        $(".view-menu-item-filter i").click(function () {
            $(".view-menu-item-filter").stop().slideToggle()
        });
        $(".btn-register-ok").hover(() => {
            $(".view-list-user-panel").stop().slideDown()
        }, () => {
            $(".view-list-user-panel").stop().slideUp()
        })
        $(".view-list-user-panel").hover(() => {
            $(".view-list-user-panel").stop().slideDown()
        }, () => {
            $(".view-list-user-panel").stop().slideUp()
        })
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
