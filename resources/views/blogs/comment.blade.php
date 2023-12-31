
<!-- Add comment form -->
<form action="{{ route('blogs.store_comment') }}" method="post">
    @csrf
    <input type="hidden" name="post_id" value="">
    <textarea name="comment" rows="3" placeholder="Add a comment" value="{{$blogs->tittle}}"></textarea>
    <button type="submit">Submit</button>
</form>
