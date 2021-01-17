@extends('layouts.common')
@section('content')
  <b class="title">ろうけつ染め展（2020.12)</b>
  <div class="field">
    <div class="image-field">
      <div class="image">
        <img src="image/image2.jpg" alt="作品" class="work1">
        <p>T-shirt Collection</p>
      </div>
    </div>
    <div class="comment-field">
      <form method="POST">
        @csrf
        <div class="nickname">
          <b><label class='nickname-label'>ニックネーム</label></b>
          <input type="text" name="nickname"/>
        </div>
        <br>
        <div class="comment">
          <b><label class="comment-label">コメント</label></b>
          <textarea name="comment"></textarea>
        </div>
        
        <input type="submit" value="OK"/>
        
        <hr class="line">
        <div class="comment-submit">
          @foreach ($posts as $post)
            <p><b>{{$post["nickname"]}} </b>{{$post["comment"]}}</P>
          @endforeach
        </div>
      </form>
    </div>
  </div>
@endsection
  
