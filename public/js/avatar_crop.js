function preview(file) {
    var prevDiv = document.getElementById('preview');
    if (file.files && file.files[0]) {
        var prreader = new FileReader();
        var reader = new FileReader();
        reader.onload = function (evt) {
            prevDiv.innerHTML = '<img id="avatarpreview" class="avatar" src="' + evt.target.result + '"/>';
            $('#avatarpreview').cropper({
                aspectRatio: 1 / 1,
                autoCropArea: 1,
                dragCrop: false,
                crop: function (e) {
                    $('#avatarUploadCpX').val(e.x);
                    $('#avatarUploadCpY').val(e.y);
                    $('#avatarUploadCpWidth').val(e.width);
                    $('#avatarUploadCpHeight').val(e.height);
                }
            });
        };
        prreader.onload = function (evt) {
            var fileBuf = new Uint8Array(evt.target.result.slice(0, 11));
            /*var mime = isImage(fileBuf);
                if (mime == null) {
                alert("Please open image!");
                return;
                } else {*/
            reader.readAsDataURL(file.files[0]);
            //}
        };
        prreader.readAsArrayBuffer(file.files[0]);
    } else {
        prevDiv.innerHTML = '<div class="img" class="avatar" style="filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale,src=\'' + file.value + '\'"></div>';
    }
}