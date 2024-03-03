<x-page>
    <div class="card ml-2">
        <img class="card-img-top" src="holder.js/100x180/" alt=" Post {{ $post->id }}" />
        <div class="card-body">
            <h4 class="card-title">{{ $post->title }}</h4>
            <p class="card-text">{{ $post->content }}</p>
        </div>
    </div>
    {{-- Publica els comentaris existents --}}
    @if (count($comments) > 0)
        @foreach ($comments as $comment)
            @include('comments.comment')
        @endforeach
    @endif
    {{-- Afegeix comentaris --}}
    @include('comments.add-comment')

</x-page>
