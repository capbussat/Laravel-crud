<div class="card ms-2">
    <img class="card-img-top" src="holder.js/100x180/" alt="Afegeix comentari" />
    <div class="card-body">
        <form name="comment-store" action="{{ route('posts.comments.store', $post->id) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Name</label>
                <input type="text" class="form-control" name="title"
                    placeholder="Escriu el títol"" />
                
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Escriu el contingut</label>
                <textarea class="form-control" name="content" rows="1"></textarea>
            </div>
            <button type="submit" class="btn btn-primary"> 
                Save 
            </button>

        </form>
    </div>
</div>
