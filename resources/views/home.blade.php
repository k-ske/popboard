<!DOCTYPE html>

<html>
  <head>
    <meta charset=="UTF-8">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <title>This is POPBOARD</title>
    <link rel="stylesheet" href="/css/style.css">
  </head?>
  <body>
    <b>Pop Board</b>
    <form method="POST">
      @csrf
      <label class='name'>NickName</label>
      <input type="text" name="nickname"/>
      <label>Comment</label>
      <input type="text" name="comment"/>
      <input type="submit" value="OK"/>
    </form>
    
    <hr>
    @foreach ($posts as $post)
      <p><b>{{$post["nickname"]}} </b>{{$post["comment"]}}</P>
    @endforeach
  </body>
</html>