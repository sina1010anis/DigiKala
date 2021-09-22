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

@endsection
