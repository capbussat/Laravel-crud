<x-page>	
    <div class="card">
        <img class="card-img-top" src="holder.js/100x180/" alt=" Post {{ $post->id }}" />
        <div class="card-body">
            <h4 class="card-title">{{ $post->summary  }}</h4>
            <p class="card-text">{{ $post->content  }}</p>
        </div>
    </div>
    @if ( count ( $comments) > 0  )
       @foreach ( $comments as $comment )
            <div class="card">
            <img class="card-img-top" src="holder.js/100x180/" alt="{{ $comment->id }}" />
            <div class="card-body">
                <h4 class="card-title">{{ $comment->title }}</h4>
                <p class="card-text">{{ $comment->content }}</p>
            </div>   
       @endforeach      
    @else
        <div class="card">
        <img class="card-img-top" src="holder.js/100x180/" alt="Comment" />
        <div class="card-body">
            <h4 class="card-title">Empty Comment Title</h4>
            <p class="card-text">Text</p>
        </div>
    </div>     
    @endif
    
    
</x-page>
