<x-app-layout>
    <div class="card">
        <div class="card-header flex justify-content-between">
            <h5>Create post</h5>
            <a href="{{ route('post.index') }}"class="btn btn-sm btn-primary">Back</a>
        </div>
        <div class="card-body">
            <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">  
                    <label for="Tittle"> Tittle</label>
                    <input id="Tittle" class="form-control" type="text" name="tittle">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea id="description" class="form-control summernote" name="description" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="category_id">Select categories</label>
                    <select id="category_id" class="form-control select2" name="category_id[]"multiple>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->Eng_Tittle }}</option>
                        @endforeach


                    </select>
                </div>

                <div class="form-group">
                    <label for="tags">Tags(Optional)</label>
                    <input id="tags" class="form-control" type="text" name="tags">
                </div>
                <div class="form-group">
                    <label for="meta_description">Meta Description(Optional)</label>
                    <input id="meta_description" class="form-control" type="text" name="meta_description">
                </div>
                <div class="form-group">
                    <label for="meta_Keywords">Meta Keywords(Optional)</label>
                    <input id="meta_keywords" class="form-control" type="text" name="meta_keywords">
                </div>
                <div class="form-group">
                    <label for="image">Uplaod image</label>
                    <input id="image" class="form-control-file" type="file" name="image">
                </div>
                <button type="submit">Save Record</button>
            </form>
        </div>
    </div>
</x-app-layout>
