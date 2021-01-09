<html>
  <head>
    <title>This is POPBOARD</title>
  </head?>
  <body>
    <b>Pop Board</b>
    <form method="POST">
      @csrf
      <label>NickName</label>
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