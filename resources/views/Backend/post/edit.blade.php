<x-app-layout>
    <div class="card">
        <div class="card-header">
            <h5>Create post</h5>
            <a href="{{ route('post.index') }}">Back</a>
        </div>
        <div class="card-body">
            <form action="{{ route('post.update', $post->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put');
                <div class="form-group">
                    <label for="Tittle"> Tittle</label>
                    <input id="Tittle" class="form-control" type="text" name="tittle"value="{{ $post->tittle }}">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea id="description" class="form-control summernote" name="description" rows="3">{{ $post->description }}</textarea>
                </div>
                    <div class="form-group">
                        <label for="category_id">Select categories</label>
                        <select id="category_id" class="form-control select2" name="category_id[]"multiple>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    @foreach ($post->categories as $item)
                            {{ $category->id == $item->id ? 'selected' : '' }} @endforeach>
                                    {{ $category->Nep_Tittle }}</option>
                            @endforeach


                        </select>
                    </div>

                <div class="form-group">
                    <label for="tags">Tags(Optional)</label>
                    <input id="tags" class="form-control" type="text" name="tags"value={{ $post->tags }}>
                </div>

                <div class="form-group">
                    <label for="meta_desceiption">Meta Description</label>
                    <textarea id="meta_desceiption" class="form-control" name="meta_description" rows="3">{{ $post->meta_description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="meta_keywords">Meta Keywords</label>
                    <textarea id="meta_keywords" class="form-control" name="meta_keywords" rows="3">{{ $post->meta_keywords }}</textarea>
                </div>
                <div class="form-group">
                    <label for="image">Uplaod image</label>
                    <input id="image" class="form-control-file" type="file" name="image">

                </div>
                <div class="mb-2">
                    <img src="{{ asset($post->image) }}" alt="" width="200">
                </div>
                <button type="submit">Save Record</button>
            </form>
        </div>
    </div>
</x-app-layout>
