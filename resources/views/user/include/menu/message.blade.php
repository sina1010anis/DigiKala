@if($message_all->count() > 0)
    <div class="group-save-product" style="position: relative">
    <span style="width: 100%!important;" class="view-profile-index-user-buy fl-left view-profile-index-user-buy-test">
        <span>
            <h4 class="set-font color-b-700" align="right">پست چی</h4>
            <span class="line fl-right"></span>
            <span class="view-list-buy" style="padding: 10px;box-sizing: border-box;background-color: unset">
                <?php $price = 0; ?>
                @foreach($message_all as $message)
                    <div class="view-message-for-user">
                        <div class="view-message-title-for-user">
                            <p class="set-font f-12 color-b-800" align="right" dir="rtl">{{$message->title}}</p>
                        </div>
                        <div class="view-message-text-for-user">
                            <p class="set-font f-12 color-b-800" align="right" dir="rtl">{{$message->text}}
                            </p>
                        </div>
                        <div class="view-message-data-for-user">
                            <p class="set-font f-11 color-b-700" align="left">{{jdate($message->created_at)->format('%A, %d %B %y')}}</p>
                        </div>
                    </div>
                @endforeach

            </span>
        </span>
    </span>
    </div>
@else
    <div class="group-null">
        <img src="{{url('data/image/icon/message.png')}}" alt="">
        <p class="f-20 color-b-400 set-font">پیغامی برای شما ارسال نشده است</p>
    </div>
@endif
