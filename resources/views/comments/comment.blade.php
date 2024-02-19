<div >
    <div class="card">
        <img class="card-img-top" src="holder.js/100x180/" alt="Comentari {{ $comment->id }} del post {{ $post->id }}" />
        <div class="card-body">
            <h4 class="card-title">{{ $comment->title }}</h4>
            <p class="card-text">{{ $comment->content }}</p>
        </div>
</div>
