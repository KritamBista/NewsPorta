<x-app-layout>
    <div class="card">
        <div class="card-header">
            <h5>Create Category</h5>
            <a href="{{route('category.index')}}">Back</a>
        </div>
        <div class="card-body">
            <form action="{{route('category.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="Eng_Tittle">English Tittle</label>
                    <input id="Eng_Tittle" class="form-control" type="text" name="Eng_Tittle">
                </div>
                <div class="form-group">
                    <label for="Nep_Tittle">Nepali Tittle</label>
                    <input id="Nep_Tittle" class="form-control" type="text" name="Nep_Tittle">
                </div>
               <button type="submit">Save Record</button>
            </form>
        </div>
    </div>
 </x-app-layout>
