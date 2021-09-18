<p align="center"><a href="https://www.digikala.com/" target="_blank"><img src="https://www.digikala.com/static/files/bc60cf05.svg" width="400"></a></p>


## Digikala store website (copied from <a href="https://www.digikala.com/">digikala</a> site)
<hr>

## General description:
This site is redesigned from the main site, which has a user panel and the main part of the site, tried to be designed and implemented in the best way.
This personal project took about two months and was designed from zero to one hundred by one person, the owner of this profile

<hr>

## Install
    git clone https://github.com/sina1010anis/Online-shop-DigiKala-.git
    composer install
    npm install

Tips : If you encounter a session error, follow the procedure below.
    php artisan make:migration create_session_table

Copy the following value into the file
            Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->unique();
            $table->unsignedInteger('user_id')->nullable();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->text('payload');
            $table->integer('last_activity');
        });


## Panel Admin
    Username : siis@gmail.com
    Password : 123456789

To enter the admin panel, first log in with the user above and go to the user's button and click the admin panel button
## Items used:

This website is designed with laravel and vuejs as well as related libraries like jquery

Used from:

    - PHP v7.3
    - - Laravel v8
    - JavaScript
    - - VueJs
    - - Jquery
    - MySql
    - CSS 3
    - Html 5

Used the latest versions now

<hr>

## View 

<img src="/public/data/image/image banner/view_all.png">

<img src="/public/data/image/view2.jpg">

<img src="/public/data/image/3.jpg">

<img src="/public/data/image/4.jpg">

## TIPS :
- <p style="font-family: IRANYekan;color: #ff3c3c">If it gets out of responsive mode by resizing the site, please refresh once</p>
- - <p style="font-family: IRANYekan;color: #ff3c3c">اگر با تغییر سایز سایت از حالت واکنش گرا خارج شد لطفا یک بار رفرش کنید</p>
- To test the filter section, please go to the mobile category
- - برای تست بخش فیلتر لطفا به دسته موبایل بروید
    

## TODO :

## v-1.0.0

- Create DataBase
- Index Page
- -  Header
- -  NavBar
- -  Slider
- -  Page Login
- -  Page Register
- -  Product introduction
- -  Filter Page
- Panel User
- - My Orders
- - Favorites list
- - Comments
- - Addresses
- - Card
- - Message
- - View and Edit Profile
- - Connect to the payment gateway
- Panel Admin
- -  View Menu
- -  View Address And Delete Address
- -  View Banner Center And Delete Banner Center
- -  View Banner Up And Delete Banner Up And Create Banner Up
- -  View Brand And Delete Brand And Create Brand
- -  View Card And Delete Card
- -  View City And Delete City And Create City
- -  View Comment Product And Delete Comment Product And Inactive Comment Product
- -  View Reply Comment And Delete Reply Comment
- -  View Image Product And Delete Image Product
- -  View Product And Delete Product And Edit Product
    

## v-1.5.5

- Compare products

<img src="/public/data/image/6.jpg">
