<x-page>
	
    <div class="card">
        <img class="card-img-top" src="holder.js/100x180/" alt=" Post {{ $post->id }}" />
        <div class="card-body">
            <h4 class="card-title">{{ $post->summary  }}</h4>
            <p class="card-text">{{ $post->content  }}</p>
        </div>
    </div>
    
</x-page>
