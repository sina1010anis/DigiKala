<div class="slider-page">
    <span class="span-right-slider-page slider">
        @foreach($sliders as $slider)
            <a href=""><img src="{{'data/image/image banner'.'/'.$slider->address}}" title="{{$slider->title}}" alt="{{$slider->alt}}"></a>
        @endforeach
{{--            <img width="100%" height="100%" style="border-radius: 5px" src="{{url('data/image/image banner/slider_1.jpg')}}" alt="">--}}
    </span>
    <span class="span-left-slider-page">
        @foreach($banner_sliders as $banner_slider)
            <span class="slider-page-for-img-left-up slider-page-for-img-left">
                <img src="{{url('data/image/image banner'.'/'.$banner_slider->address)}}" alt="{{$banner_slider->alt}}"
                     title="{{$banner_slider->title}}">
            </span>
        @endforeach
    </span>
</div>
