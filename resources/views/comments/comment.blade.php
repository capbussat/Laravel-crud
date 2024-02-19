<div>
    <div class="card ms-2">
        <img class="card-img-top" src="holder.js/100x180/"
            alt="Comentari {{ $comment->id }} post {{ $post->id }}" />
        <div class="card-body">
            <form name="comment-delete" action="{{ route('posts.comments.destroy', $comment->id) }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-primary">
                    Delete
                </button>
            </form>
            <h4 class="card-title">{{ $comment->title }}</h4>
            <p class="card-text">{{ $comment->content }}</p>

        </div>
    </div>
