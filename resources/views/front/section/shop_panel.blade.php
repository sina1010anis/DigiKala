@extends('front.index_page')

@section('index')

    @include('front.include.header')
    @include('front.include.navbar')
    @if(isset($edit))
        @include('front.include.shop_panel_edit')
    @else
        @include('front.include.shop_panel')
    @endif
    @include('front.include.footer')
    <a href="{{ route('shop.new.product') }}" class="btn-new-product-seller"><i class="fas fa-plus i-in-btn-new-product-seller"></i></a>
@endsection
