<div>
    @if ($post->user_id == Auth::user()->id)
        <h4>Edit Post</h4>
        {{ $post->name }}
    @endif
</div>
