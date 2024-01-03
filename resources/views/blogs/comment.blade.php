<!-- comments/show.blade.php -->

<h1>Comments for Post</h1>

@foreach($comments as $comment)
    <p>{{ $comment->user->name }}: {{ $comment->body }}</p>
@endforeach

@if(empty($comment->body))
<p>No comments</p>
@endif