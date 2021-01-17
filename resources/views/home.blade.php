<!DOCTYPE html>

<html>
  <head>
    <meta charset=="UTF-8">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <title>This is POPBOARD</title>
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>
    <b>ろうけつ染め展（2020.12/11~14)</b>
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
          <label class='name'>NickName</label>
          <input type="text" name="nickname"/>
          <label>Comment</label>
          <input type="text" name="comment"/>
          <input type="submit" value="OK"/>
          
          <hr>
          @foreach ($posts as $post)
            <p><b>{{$post["nickname"]}} </b>{{$post["comment"]}}</P>
          @endforeach
        </form>
      </div>
    </div>
    
    
  </body>
</html>