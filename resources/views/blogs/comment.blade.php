
<!-- Add comment form -->
<form action="{{ route('blogs.store_comment') }}" method="post">
    @csrf
    <input type="hidden" name="post_id" value="23">
    <textarea name="comment" rows="3" placeholder="Add a comment"></textarea>
    <button type="submit">Submit</button>
</form>
