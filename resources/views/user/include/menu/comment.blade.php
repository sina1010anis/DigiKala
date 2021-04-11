<div class="group-save-product">
    <span style="width: 100%!important;" class="view-profile-index-user-buy fl-left view-profile-index-user-buy-test">
        <span>
            <h4 class="set-font color-b-700" align="right">نظرات</h4>
            <span class="line fl-right"></span>
            <span class="view-list-buy" style="padding: 10px;box-sizing: border-box;background-color: unset">
                        <ul>
            @foreach($comment_all as $comment)
                                @if($comment->user_id == auth()->user()->id)
                                    <li>
                                    @if($comment->status == 1)
                                        <i title="مورد تایید پشتیبانی دیجی کالا قرار گرفته است" class="fas fa-check-circle"></i>
                                        @else
                                            <i title="مورد تایید بخش پشتیبانی دیجی کالا نشده است" style="color: red!important;" class="fas fa-exclamation-circle"></i>
                                        @endif
                        <p class="set-font title-comment" align="right">{{$comment->title}}</p>
                        <p class="f-11 color-b-500" dir="rtl" align="right">
                            <span class="set-font">{{jdate($comment->created_at)->format('%A, %d %B %y')}}</span> .
                            <span class="set-font">{{$comment->users->name}}</span>
                        </p>
                        <div class="line"></div>
                        <p class="text-comment set-font">{{$comment->text}}</p>
                        <div class="line"></div>
                        <div>
                            <p v-for="ii in {{$comment->vote_good}}" dir="rtl" align="right"
                               class="set-font color-b-700 view-good-product-not-good">
                                <i class="fas fa-plus-square good-product"></i> @{{ii}} </p>
                            <p v-for="i in {{$comment->vote_bad}}" dir="rtl" align="right"
                               class="set-font f-12 color-b-700 view-good-product-not-good">
                                <i class="fas fa-minus-square not-product">@{{ i }}</i></p>

                        </div>
        </ul>
                    @endif
                @endforeach
            </span>
        </span>
    </span>
</div>
