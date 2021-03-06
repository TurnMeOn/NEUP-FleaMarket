<div class="col-md-2 hidden-sm-down" style="top:0;left:0;">
    <ul class="nav nav-pills flex-column">
        <li class="nav-item"><a href="/good" class="nav-link @if(isset($cat_id)&&$cat_id == 0) active @endif" style="white-space:nowrap;overflow:hidden" data-toggle="tooltip">所有商品</a></li>
        @foreach($cats as $cat)
            <li class="nav-item"><a href="/good?cat_id={{ $cat->id }}" class="nav-link @if(isset($cat_id)&&$cat_id == $cat->id) active @endif" style="white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">{{ $cat->cat_name }}</a></li>
        @endforeach
    </ul>
</div>
<div class="col-12 hidden-md-up" style="top:0;">
    <ul class="nav nav-pills" style="overflow-x: scroll;overflow-y: hidden;white-space: nowrap;height:40px;display:-webkit-box;display:-moz-box">
        <li class="nav-item" style="float: none"><a href="/good" class="nav-link @if(isset($cat_id)&&$cat_id == 0) active @endif">所有商品</a></li>
        @foreach($cats as $cat)
            <li class="nav-item" style="float: none"><a href="/good?cat_id={{ $cat->id }}" class="nav-link  @if(isset($cat_id)&&$cat_id == $cat->id) active @endif">{{ $cat->cat_name }}</a></li>
        @endforeach
    </ul>
</div>