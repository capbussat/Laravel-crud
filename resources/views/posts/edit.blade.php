<x-page>
    <div>
      {{-- És semblant a la plantilla create --}}
        @if (session('status'))
            <div class="alert alert-success">
               <span class=""> Creat</span> {{ session('status') }}
            </div>
        @endif

        <div class="card">
            <div class="card-header text-center font-weight-bold">
               Edita l'article
            </div>
            <div class="card-body">
                <form name="post-edit" id="post-edit" method="POST" action="{{ route('posts.update', $post->id); }} ">
                   @csrf
                   @method('put')
                    <div class="form-group">
                        <label for="summary">Summary</label>
                        <input type="text" id="summary" name="summary" class="form-control" required="" value="{{  $post->summary  ?? ''  }}">
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <input type="text" id="status" name="status" class="form-control" required="" value="{{  $post->status  ?? ''  }}">
                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        <input type="text" id="type" name="type" class="form-control" required="" value="{{  $post->type  ?? '' }}">
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <input type="text" id="content" name="content" class="form-control" required="" value="{{  $post->content ?? '' }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-page>
