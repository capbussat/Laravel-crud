<x-page>
    <div>
      
        @if (session('status'))
            <div class="alert alert-success">
               <span class=""> Creat: </span>'{{ session('status') }}'
            </div>
        @endif

        <div class="card">
            <div class="card-header text-center font-weight-bold">
               Crea l'article
            </div>
            <div class="card-body">
                <form name="post-create" id="post-create" method="POST" action="{{ route('posts.store') }}">
                   @csrf
                    <div class="form-group">
                        <label for="title">title</label>
                        <input type="text" id="title" name="title" class="form-control" required="" value="{{  $post->title  ?? ''  }}">
                    </div>
                    <div class="form-group">
                        
                        <div class="mb-3">
                            <label for="status">Status</label>
                            <select
                                class="form-select form-select-lg"
                                name="status"
                                id="status"
                                required=""
                            >
                                <option value="draft" selected>Esborrany</option>
                                <option value="publish">Publicat</option>

                            </select>
                        </div>
                       </div>
                    <div class="form-group">
                         <div class="mb-3">
                            <label for="type">Type</label>
                            <select
                                class="form-select form-select-lg"
                                name="type"
                                id="type"
                                required=""
                            >
                                <option value="post" selected>Post</option>
                                <option value="page">Pàgina</option>

                            </select>
                        </div>
                        
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
