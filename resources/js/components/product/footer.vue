<template>
    <footer class="fl-right">
        <div class="group-view-tb">
            <div class="div-view-tb">
                <div class="group-tb-icon">
                    <img :src="data_1" alt="">
                    <p>پشتیبانی چهار ساعته</p>
                </div>
                <div class="group-tb-icon">
                    <img :src="data_2" alt="">
                    <p>تحویل اکسپرس</p>
                </div>
                <div class="group-tb-icon">
                    <img :src="data_3" alt="">
                    <p>پرداخت در محل</p>
                </div>
                <div class="group-tb-icon">
                    <img :src="data_4" alt="">
                    <p>هفت روز ضمانت</p>
                </div>
                <div class="group-tb-icon">
                    <img :src="data_5" alt="">
                    <p>هفت اصل بودن کالا</p>
                </div>
            </div>
        </div>
        <div style="background-color: #b0b0b0" class="line"></div>
        <div class="group-et">
        <span>
            <p align="right">راهنمای خرید از دیجی‌کالا</p>
            <ul class="c-footer__links-ul"><li><a data-snt-event="dkFooterClick" data-snt-params="{&quot;item&quot;:&quot;index-item&quot;,&quot;item_option&quot;:&quot;نحوه ثبت سفارش&quot;}" href="/faq/question/649/">نحوه ثبت سفارش</a></li><li><a data-snt-event="dkFooterClick" data-snt-params="{&quot;item&quot;:&quot;index-item&quot;,&quot;item_option&quot;:&quot;رویه ارسال سفارش&quot;}" href="/faq/question/79/">رویه ارسال سفارش</a></li><li><a data-snt-event="dkFooterClick" data-snt-params="{&quot;item&quot;:&quot;index-item&quot;,&quot;item_option&quot;:&quot;شیوه‌های پرداخت&quot;}" href="/faq/question/81/">شیوه‌های پرداخت</a></li></ul>
        </span>
            <span>
            <p align="right">خدمات مشتریان</p>
            <ul class="c-footer__links-ul"><li><a data-snt-event="dkFooterClick" data-snt-params="{&quot;item&quot;:&quot;index-item&quot;,&quot;item_option&quot;:&quot;پاسخ به پرسش‌های متداول&quot;}" href="/faq/">پاسخ به پرسش‌های متداول</a></li><li><a data-snt-event="dkFooterClick" data-snt-params="{&quot;item&quot;:&quot;index-item&quot;,&quot;item_option&quot;:&quot;رویه‌های بازگرداندن کالا&quot;}" href="/faq/question/83/">رویه‌های بازگرداندن کالا</a></li><li><a data-snt-event="dkFooterClick" data-snt-params="{&quot;item&quot;:&quot;index-item&quot;,&quot;item_option&quot;:&quot;شرایط استفاده&quot;}" href="/page/terms/">شرایط استفاده</a></li><li><a data-snt-event="dkFooterClick" data-snt-params="{&quot;item&quot;:&quot;index-item&quot;,&quot;item_option&quot;:&quot;حریم خصوصی&quot;}" href="/page/privacy/">حریم خصوصی</a></li><li><a data-snt-event="dkFooterClick" data-snt-params="{&quot;item&quot;:&quot;index-item&quot;,&quot;item_option&quot;:&quot;گزارش باگ&quot;}" href="/bug-report/">گزارش باگ</a></li></ul>
        </span>
            <span>
            <p align="right">با دیجی کالا</p>
            <ul class="c-footer__links-ul"><li><a data-snt-event="dkFooterClick" data-snt-params="{&quot;item&quot;:&quot;index-item&quot;,&quot;item_option&quot;:&quot;اتاق خبر&quot;}" href="https://www.digikala.com/mag/newsroom/" target="_blank">اتاق خبر دیجی‌کالا</a></li><li><a data-snt-event="dkFooterClick" data-snt-params="{&quot;item&quot;:&quot;index-item&quot;,&quot;item_option&quot;:&quot;فروش در دیجی‌کالا&quot;}" href="https://www.digikala.com/landings/seller-introduction/" target="_blank">فروش در دیجی‌کالا</a></li><li><a data-snt-event="dkFooterClick" data-snt-params="{&quot;item&quot;:&quot;index-item&quot;,&quot;item_option&quot;:&quot;فرصت‌های شغلی&quot;}" href="http://careers.digikala.com/" target="_blank">فرصت‌های شغلی</a></li><li><a data-snt-event="dkFooterClick" data-snt-params="{&quot;item&quot;:&quot;index-item&quot;,&quot;item_option&quot;:&quot;تماس با دیجی‌کالا&quot;}" href="/page/contact-us/">تماس با دیجی‌کالا</a></li><li><a data-snt-event="dkFooterClick" data-snt-params="{&quot;item&quot;:&quot;index-item&quot;,&quot;item_option&quot;:&quot;درباره دیجی‌کالا&quot;}" href="/page/about/">درباره دیجی‌کالا</a></li><li><a data-snt-event="dkFooterClick" data-snt-params="{&quot;item&quot;:&quot;index-item&quot;,&quot;item_option&quot;:&quot;راهنمای هویت بصری&quot;}" href="/branding/">راهنمای هویت بصری</a></li></ul>
        </span>
        </div>
    </footer>
</template>

<script>
export default {
    name: "footer_vue",
    props:[
        'data_1',
        'data_2',
        'data_3',
        'data_4',
        'data_5',
    ]
}
</script>

<style scoped>

</style>
