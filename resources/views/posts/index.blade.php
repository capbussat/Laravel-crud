<x-page>
    <div class="container">
        <div class="table-responsive">
            <table class="table table-light table-hover">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Status</th>
                        <th scope="col">Type</th>
                        <th scope="col">Títol</th>
                        <th scope="col">Mostra</th>
                        <th scope="col">Edita</th>
                        <th scope="col">Esborra</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr class="">
                            <td scope="row">{{ $post->id }}</td>
                            <td>{{ $post->status }}</td>
                            <td>{{ $post->type }}</td>
                            <td>{{ $post->summary }}</td>

                            <td>
                                <form name="post-show-{{ $post->id }}" id="post-show-{{ $post->id }}"
                                    method="GET" action="{{ route('posts.show', $post->id) }}">

                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-primary">Mostra</button>
                                </form>
                            </td>
                            <td>
                                <form name="post-edit-{{ $post->id }}" id="post-edit-{{ $post->id }}"
                                    method="GET" action="{{ route('posts.edit', $post->id) }}">

                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-primary">Edita</button>
                                </form>
                            </td>
                            <td>
                                <form name="post-destroy-{{ $post->id }}" id="post-destroy-{{ $post->id }}"
                                    method="POST" action="{{ route('posts.destroy', $post->id) }}">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger">Esborra</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="">
                Posts: {{ $count ?? 0 }}
                <form name="post-create" id="post-create" method="GET" action="{{ route('posts.create') }}">
                    @csrf
                    <button type="submit" class="btn btn-sm btn-primary"">Crea un post</button>
                </form>
            </div>

        </div>
    </div>
</x-page>
