<!-- comments/show.blade.php -->

<h1>Comments for Post</h1>

@foreach($comments as $comment)
      @foreach($users as $user)
    <p>{{ $user->username }}: {{ $comment->body }}</p>
    @endforeach
@endforeach

@if(empty($comment->body))
<p>No comments</p>
@endif