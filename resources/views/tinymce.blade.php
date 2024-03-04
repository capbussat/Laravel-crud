<x-page>
     @if (session('status'))
            <div class="alert alert-success">
               <span class=""> Creat: </span>'{{ session('status') }}'
            </div>
        @endif
    <h2>Crea un post</h2>
    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        <div class="form-group">            
            <div class="mb-3">
                    <label for="title">Títol</label>
                    <input type="text" name="title" class="form-control" required="" value="{{  $post->title  ?? ''  }}" placeholder="Entra el títol">
            </div>
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
             <label for="type">Tipus</label>
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
            {{-- Contingut --}}
         <div class="form-group">
            <textarea class="tinyMce" name="content" id="tinyTextArea">{{  $post->content ?? '' }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-page>