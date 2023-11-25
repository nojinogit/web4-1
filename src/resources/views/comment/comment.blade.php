@extends('layouts.header_layouts')

@section('title','comment_comment')

@section('css')
<link rel="stylesheet" href="{{ asset('css/comment/comment.css')}}">
@endsection

@section('content')

<div class="comment-wrap">
    <div class="title-area">
        <h3>口コミを投稿する</h3>
    </div>
    <div class="review-box">
        <h3>体験を評価をしてください</h3>
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
            <div class="rate-form">
                <input id="star5" type="radio" name="score" value="5">
                <label for="star5">★</label>
                <input id="star4" type="radio" name="score" value="4">
                <label for="star4">★</label>
                <input id="star3" type="radio" name="score" value="3">
                <label for="star3">★</label>
                <input id="star2" type="radio" name="score" value="2">
                <label for="star2">★</label>
                <input id="star1" type="radio" name="score" value="1">
                <label for="star1">★</label>
            </div>
            <div>
                <p>口コミを投稿</p>
                <textarea name="kutikomi" cols="100" rows="10" class="textarea" onkeyup="ShowLength(value);" placeholder="カジュアルな夜にのお出かけにおすすめのスポット"></textarea>
                <p id="inputlength">0/400 最高文字数</p>
            </div>
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
        <button type="submit" form="form1" class="submit-button">口コミを投稿</button>
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