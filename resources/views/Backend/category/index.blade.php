<x-app-layout>
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h5>News Category</h5>
            <a href="{{ route('category.create') }}" class="btn btn-sm btn-primary">Create New</a>
        </div>
        <div class="card-body">
            <table class="table">
                <tr>
                    <th>SN</th>
                    <th>English Tittle</th>
                    <th>Nepali Tittle</th>
                    <th>Slug</th>
                    <th>Actions</th>

                </tr>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->Eng_Tittle }}</td>
                        <td>{{ $category->Nep_Tittle }}</td>
                        <td>{{ $category->slug }}</td>
                        <td><a href="">Edit</a>
                        </td>

                    </tr>
                @endforeach
            </table>
        </div>
    </div>

</x-app-layout>
