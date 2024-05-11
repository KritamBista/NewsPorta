<x-app-layout>
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h5>News post</h5>
            <a href="{{route('post.create')}}" class="btn btn-sm btn-primary">Create New</a>
        </div>
        <div class="card-body">
            <table class="table">
                <tr>
                    <th>SN</th>
                    <th>Tittle</th>
                    <th>Views</th>
                    <th>Categories</th>
                    <th>Posted on</th>
                    <th>Actions</th>

                </tr>
                @foreach ($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->tittle}}</td>
                    <td>{{$post->views}}</td>
                    <td>
                        @foreach ($post->categories as $category )
                      <span class="badge bg-info ms-2 text-white">{{$category->Nep_Tittle}}</span>

                        @endforeach
                    </td>
                    <td>{{$post->created_at}}</td>
                    <td><a href="{{route('post.edit', $post->id)}}">Edit</a>
                    </td>

                </tr>

                @endforeach
            </table>
        </div>
    </div>

    </x-app-layout>




