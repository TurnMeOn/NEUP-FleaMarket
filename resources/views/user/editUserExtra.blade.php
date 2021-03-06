<style>
    .cropper-crop-box, .cropper-view-box {
        border-radius: 50%;
    }
    .cropper-view-box {
        box-shadow: 0 0 0 1px #39f;
        outline: 0;
    }
</style>
<div class="row">
    <div class="mx-auto">
        <div id="preview"><img id="avatarpreview" class="avatar" height="auto" src="/avatar/{{Session::get('user_id')}}"/></div>
        <div style="display: none">
            <input type="file" id="avatarUpload" name="avatarPic" onchange="preview(this)"/>
        </div>
    </div>
</div>
<input id="avatarUploadCpWidth" type="hidden" name="crop_width">
<input id="avatarUploadCpHeight" type="hidden" name="crop_height">
<input id="avatarUploadCpX" type="hidden" name="crop_x">
<input id="avatarUploadCpY" type="hidden" name="crop_y">
<p>
<div class="row">
    <div class="mx-auto">
        <label for="avatarUpload" class="btn btn-secondary">更改头像</label>
    </div>
</div>
</p>
{!! csrf_field() !!}
<div class="nickname-form">
    <div class="mx-auto">
        <div class="form-group">
            <label for="nickname">昵称</label>
            @if(isset($user->nickname))
                <input type="text" name="nickname" id="nickname" class="form-control nickname-input" value="{{ $user->nickname }}">
            @else
                <input type="text" name="nickname" id="nickname" class="form-control nickname-input">
            @endif
        </div>
    </div>
</div>