@extends('layouts.sidebar_layouts')

@section('title','sidebar_official_photo')

@section('css')
<link rel="stylesheet" href="{{ asset('css/shop_management/official_photo.css')}}">
<link rel="stylesheet" href="{{ asset('css/layouts/sidebar_layouts.css')}}">
@endsection

@section('content_store_management')
<div class="photo-wrap">
    <div class="title-area">
        <h3>公式写真投稿</h3>
    </div>
    <div class="review-box">
        @if(session('message'))
        <div class="message">
            <div>
                <p class="message-p" id="session">{{session('message')}}</p>
            </div>
        </div>
        @endif
        @if (count($errors) > 0)
        <div class="error">
            @foreach ($errors->all() as $error)
            <p>{{$error}}</p>
            @endforeach
            </div>
        @endif
        <form action="" method="post" id="form1" enctype="multipart/form-data">
            <input type="hidden" value="" name="shop_id">
            @csrf
            <div>
                <p>画像の追加</p>
                <div class="upload-box">
                    <div class="preview-box">
                        <img class="previewImg" src="" alt="画像プレビュー" hidden/>
                    </div>
                    <div class="box-message">
                        <input type="file" accept="image/*" id="input" name="image" hidden/>
                        <span>クリックして画像を追加、または<br>ドラッグ＆ドロップ</span>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="submit">
        <button type="submit" form="form1" class="submit-button">公式写真を投稿</button>
    </div>
</div>

<script>
    function ShowLength( str ) {
        document.getElementById("inputlength").innerHTML = str.length + "/400 最高文字数";
        }

        const uploadBox = document.querySelector(".upload-box");
        const previewBox = document.querySelector(".preview-box img");
        const fileInput = document.getElementById("input");

        function roadImg(e) {
        const file = e.target.files[0];
        if (!file) return;
        previewBox.removeAttribute("hidden");
        previewBox.src = URL.createObjectURL(file);
        }

        fileInput.addEventListener("change", roadImg, false);
        uploadBox.addEventListener("click", () => fileInput.click());

        function dragover(e){
        e.stopPropagation();
        e.preventDefault();
        this.style.background = "#e1e7f0";
        }

        function dragleave(e){
        e.stopPropagation();
        e.preventDefault();
        this.style.background = "#fff";
        }

        function dropLoad(e) {
        e.stopPropagation();
        e.preventDefault();

        uploadBox.style.background = "#fff";
        let files = e.dataTransfer.files;
        if (files.length > 1)
            return alert("アップロードできるファイルは1つだけです。");
        fileInput.files = files;
        previewBox.removeAttribute("hidden");
        previewBox.src = URL.createObjectURL(fileInput.files[0]);
        }

        uploadBox.addEventListener("drop", dropLoad, false);
        uploadBox.addEventListener("dragover", dragover, false);
        uploadBox.addEventListener("dragleave", dragleave, false);

</script>

@endsection