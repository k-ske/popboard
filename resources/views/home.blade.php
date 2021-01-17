@extends('layouts.common')
@section('content')
  <b>ろうけつ染め展（2020.12)</b>
  <div class="field">
    <div class="image-field">
      <div class="image">
        <img src="image/image3.jpg" alt="作品" class="work1">
        <p>T-shirt Collection</p>
      </div>
    </div>
    <div class="comment-field">
      <form method="POST">
        @csrf
        <div class="nickname">
          <label class='nickname-label'>NickName</label>
          <input type="text" name="nickname"/>
        </div>
        <br>
        <div class="comment">
          <label class="comment-label">Comment</label>
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
  
