<!-- comments/show.blade.php -->

<h1>Comments for Post</h1>

@foreach($comments as $comment)
    
    <p>{{ $comment->user->username }}: {{ $comment->body }}</p>

@endforeach

@if(empty($comment->body))
<p>No comments</p>
@endif