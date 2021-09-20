require('./bootstrap');
import '../css/app.css'
import {createApp} from 'vue/dist/vue.esm-bundler.js'
import $ from 'jquery'
import 'slick-carousel/slick/slick.js'
import 'slick-carousel/slick/slick-theme.css'
import 'slick-carousel/slick/slick.css'
import axios from "axios";
import test from './components/test'
import store from "./store";
import footer_vue from './components/product/footer'
import {mapState, mapGetters} from 'vuex'
import btn from './components/product/baseBtn'

const app = createApp({
    data: () => ({
        all_menu_id: 1,
        srcBackOneProduct: '',
        id_comment: '',
        address_comment: '/product/new/comment/reply/',
        text_vote_good: '',
        text_vote_not_good: '',
        text_comment: '',
        text_title: '',
        good_product: [],
        not_good_product: [],
        filter_menu: [],
        menu_id: 0,
        id_city: 0,
        id_check_box: 0,
        view_btn_save_address: false,
        text_filter: '',
        style: 'style="display: none;"',
        text_search_index_page: '',
        id_view_min_product: 0,
        product_vs_1: 0,
        product_vs_2: 0,
        searchVsProduct: '',
        id_shop_product: 0,
        panel_data: 0,
    }),

    methods: {
        delete_product_seller(id) {
            axios.post('/shop/delete/product', {id: id}).then((res) => {
                if (res.data == 'OK') {
                    $(".view-err-sm").html('محصول حذف شد.').fadeIn().css({'padding': '5px 20px'})
                    setTimeout(function () {
                        $(".view-err-sm").fadeOut()
                        location.reload();
                    }, 2000)
                }else {
                    $(".view-err-sm").html('محصول قبلا حذف شده.').fadeIn().css({'padding': '5px 20px'})
                    setTimeout(function () {
                        $(".view-err-sm").fadeOut()
                        location.reload();
                    }, 2000)
                }
            })
        },
        view_es_shop_panel(id) {
            this.panel_data = id
            alert(this.panel_data)
        },
        set_id_and_send_data(id) {
            this.id_shop_product = id
            $('#box-item-shop-seller-' + id).stop().fadeToggle()
        },
        stertVs() {
            location.assign('/product/' + this.product_vs_1 + '/VS/' + this.product_vs_2);
        },
        showPageProductVs() {
            $(".page-select-item-vs").stop().fadeIn(100)
            $(".blur-web").stop().fadeIn(200)
        },
        MTsearchVsProduct() {
            if (this.searchVsProduct != '') {
                setTimeout(() => {
                    axios.post('/product/vsProduct', {
                        name: this.searchVsProduct,
                        id: this.product_vs_1,
                    }).then((res) => {
                        $(".group-view-item-product-vs").html(res.data)
                    })
                }, 1000)
            }
        },
        saveProduct_vs_2(id) {
            this.product_vs_2 = id;
            $(".page-select-item-vs").stop().fadeOut(100)
            $(".blur-web").stop().fadeOut(200)
            axios.post('/product/searchVsProduct', {
                id: this.product_vs_2
            }).then((res) => {
                $(".view-product-vs-2-group").html(res.data);
                $(".view-icon-plus").stop().fadeOut(1);
                $(".view-btn-f-vs").stop().fadeIn(1);
            })
        },
        saveProduct_vs_1(id) {
            this.product_vs_1 = id;
        },
        MT_id_view_min_product(id) {
            this.id_view_min_product = id
            $(".page-createAdmin-admin").stop().fadeIn(100)
        },
        hidePageMinProduct() {
            $(".page-createAdmin-admin").stop().fadeOut(100)
        },
        showEMproduct(id) {
            $(".selectEm").stop().fadeIn(100)
            $(".blur-web").stop().fadeIn(200)
        },
        set_id_view_min_product(id) {
            this.id_view_min_product = id;
            $(".page-createAdmin-admin").stop().fadeIn(100)
            $(".blur-web").stop().fadeIn(200)
        },
        hideAllPage() {
            $(".page-createAdmin-admin").stop().fadeOut(100)
            $(".blur-web").stop().fadeOut(200)
        },
        showPageCreate() {
            $(".page-createAdmin-admin").stop().fadeIn(200)
            $(".blur-web").stop().fadeIn(100)
        },
        deleteProductCard(id) {
            axios.post('/product/delete', {
                id: id
            }).then((res) => {
                if (res.data == 'ok') {
                    $(".view-err-sm").html('محصول حذف شد.').fadeIn().css({'padding': '5px 20px'})
                    setTimeout(function () {
                        $(".view-err-sm").fadeOut()
                        location.reload();
                    }, 2000)
                } else {
                    $(".view-err-sm").html('مشکلی پیش اماده است.').fadeIn().css({'padding': '5px 20px'})
                    setTimeout(function () {
                        $(".view-err-sm").fadeOut()
                        location.reload();
                    }, 2000)
                }

            })
        },
        searchIndexPage() {
            if (this.text_search_index_page != '') {
                axios.post('/search/product', {
                    text: this.text_search_index_page
                }).then((res) => {
                    if (res.data != '') {
                        $('.view-search-product').stop().fadeIn();
                        $('.view-search-product').html('<img class="text-not-product-search" style="width: 300px;height: 200px" src="data/gif/lod_search_product.gif">');
                        setTimeout(() => {
                            $('.view-search-product').html(res.data);
                        }, 1500)
                    } else {
                        $('.view-search-product').html('<p class="text-not-product-search set-font f-12 color-b-500">چیزی پیدا نشد</p>');
                    }

                })
            } else {
                $('.view-search-product').stop().fadeOut();
            }

        },
        showPageEdit(name) {
            $(".group-page-edit-profile ." + name).stop().fadeIn(200)
            $(".blur-web").stop().fadeIn(100)
        },
        setAddressPanelUser() {
            axios.post('/user/set/address', {'id': this.id_check_box}).then((res) => {
                $(".view-err-sm").html('ادرس جدید ثبت شد').fadeIn().css({'padding': '5px 20px'})
                setTimeout(function () {
                    $(".view-err-sm").fadeOut()
                    location.reload();
                }, 2000)
            })
        },
        set_view_btn_save_address() {
            this.view_btn_save_address = true;
        },
        showPageNewAddress() {
            $(".group-form-new-address").stop().fadeIn(200)
            $(".blur-web").stop().fadeIn(100)
        },
        exitPageNewAddress() {
            $(".group-form-new-address").stop().fadeOut(100)
            $(".blur-web").stop().fadeOut(200)
        },
        saveToSaveProduct(id) {
            axios.post('/product/save', {
                id
            }).then((res) => {
                if (res.data == 'ok') {
                    $(".view-err-sm").html('محصول شما با موفقیت ذخیره شد').fadeIn().css({'padding': '5px 20px'})
                    setTimeout(function () {
                        $(".view-err-sm").fadeOut()
                    }, 2000)
                }
                if (res.data == 'no') {
                    $(".view-err-sm").html('هر محصول را فقط یک بار میتوانید ذخیره کنید').fadeIn().css({'padding': '5px 20px'})
                    setTimeout(function () {
                        $(".view-err-sm").fadeOut()
                    }, 2000)
                }
            })
        },
        hideMenuForMobile() {
            $('.view-menu-profile').stop().slideToggle(200)
        },
        showMenuForMobile() {
            $('.view-menu-profile').stop().slideToggle(200)
        },
        exitPage() {
            $(".page-view-sm-buy").fadeOut(100)
            $(".blur-web").fadeOut(200)
        },
        viewEtSm() {
            $(".page-view-sm-buy").fadeIn(200)
            $(".blur-web").fadeIn(100)
        },
        deleteItemFilter(index) {
            this.filter_menu.splice(index, 1);
        },
        sendFilterBack() {
            axios.post('/product/filter', {
                id: this.menu_id,
                item_filter: this.filter_menu
            }).then((res) => {
                $(".view-product-menu-search").html(res.data)
            })
        },
        setFilterSend(id) {
            this.menu_id = id;
            this.filter_menu.push(this.text_filter)
        },
        showPageNewComment() {
            $(".group-form-new-comment").stop().fadeIn();
            $(".blur-web").stop().fadeIn();
        },
        send_comment(id) {
            if (this.text_comment != '' || this.text_title != '') {
                axios.post('/product/new/comment', {
                    'title': this.text_title,
                    'comment': this.text_comment,
                    'vote_good': this.good_product,
                    'vote_bad': this.not_good_product,
                    'id': id,
                }).then((res) => {
                    console.log(res.data)
                    $(".group-form-new-comment").stop().fadeOut();
                    $(".blur-web").stop().fadeOut();
                    $(".view-err-sm").html('با تشکر از نظر شما').fadeIn().css({'padding': '5px 20px'})
                    setTimeout(function () {
                        $(".view-err-sm").fadeOut()
                    }, 2000)
                })
            }
        },
        set_vote_good() {
            if (this.text_vote_good != '') {
                this.good_product.push(this.text_vote_good)
                this.text_vote_good = ''
            }
        },
        set_vote_not_good() {
            if (this.text_vote_not_good != '') {
                this.not_good_product.push(this.text_vote_not_good)
                this.text_vote_not_good = ''
            }

        },
        viewPageReplyComment(id) {
            this.id_comment = id
            $(".blur-web").fadeIn()
            $(".page-reply-comment-product").fadeIn()
        },
        set_like(id) {
            axios.post('/set_like', {id}).then(function (res) {
                if (res.data == 'Err Like') {
                    $(".view-err-sm").html('فقط یک بار می توانید رای دهید').fadeIn().css({'padding': '5px 20px'})
                    setTimeout(function () {
                        $(".view-err-sm").fadeOut()
                    }, 2000)
                }
                if (res.data == 'Ok Like') {
                    $(".view-err-sm").html('با تشکر از رای شما').fadeIn().css({'padding': '5px 20px'})
                    setTimeout(function () {
                        $(".view-err-sm").fadeOut()
                    }, 2000)
                }
                if (res.data == 'not Login') {
                    $(".view-err-sm").html('لطفا ابتدا وارد ساید شوید').fadeIn().css({'padding': '5px 20px'})
                    setTimeout(function () {
                        $(".view-err-sm").fadeOut()
                    }, 2500)
                }
            })
        },
        set_dis_like(id) {
            axios.post('/set_dis_like', {id}).then(function (res) {
                if (res.data == 'Err Dis Like') {
                    $(".view-err-sm").html('فقط یک بار می توانید رای دهید').fadeIn().css({'padding': '5px 20px'})
                    setTimeout(function () {
                        $(".view-err-sm").fadeOut()
                    }, 2000)
                }
                if (res.data == 'Ok Dis Like') {
                    $(".view-err-sm").html('با تشکر از رای شما').fadeIn().css({'padding': '5px 20px'})
                    setTimeout(function () {
                        $(".view-err-sm").fadeOut()
                    }, 2000)
                }
                if (res.data == 'not Login') {
                    $(".view-err-sm").html('لطفا ابتدا وارد ساید شوید').fadeIn().css({'padding': '5px 20px'})
                    setTimeout(function () {
                        $(".view-err-sm").fadeOut()
                    }, 2500)
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
            alert('ok sort')
        }
    },
    mounted() {
        $(".blur-web").click(function () {
            $('.page-reply-comment-product').fadeOut()
            $('.page-select-item-vs').fadeOut()
            $('.group-form-new-comment').fadeOut()
            $('.page-view-sm-buy').fadeOut()
            $('.group-form-new-address').fadeOut()
        })
        $(".view-err-sm").click(() => {
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
    components: {
        test,
        footer_vue,
        btn
    },
    computed: {
        product() {
            return this.$store.state.product
        },
        ...mapGetters(['userName'])
    },
    created() {
    }
})
app.use(store)
app.mount('#app')
