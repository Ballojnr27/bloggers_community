<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title style="font: 15px/1.5 Arial, Helvetica, sans-serif;">Bloggers' Community</title>
  
  <link href="/css/comment.css" rel="stylesheet">
</head>
<body>
<center>


  <h1>Comments</h1>

  @foreach($comments as $comment)
  <div class="comment-container">
  <div class="commenter-name"><i>@</i>{{ $comment->user->username }}</div>
    <div class="comment-text">
    {{ $comment->body }}
    </div>
    <div class="comment-timestamp">{{ $comment->created_at }}</div><br>

      @if(Auth::check() && (Auth::user()->id === $comment->user_id || Auth::user()->id === $comment->post->user_id))
        <form action="{{ route('comments.destroy', $comment->id) }}" method="POST">
          @csrf
              @method('DELETE')
            <button>Delete Comment</button>
        </form>
      @endif  
   </div>
 @endforeach

  @if(empty($comment->body))
<p>No Comments</p>
@endif

  <!-- More comments can be added here 

  <div class="comment-form">
    <h2>Leave a Comment</h2>
    <form action="submit_comment.php" method="post">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="comment">Comment:</label>
      <textarea id="comment" name="comment" rows="4" required></textarea>

      <button type="submit">Submit Comment</button>
    </form>
  </div>
-->
</center>
</body>
</html>
