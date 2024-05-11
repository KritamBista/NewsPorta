<x-frontend-layout>
    <section>
        <div class="container m-auto">
            @foreach ($post as $post)
               <a href="{{route('fe.post',$post->id)}}">
                <div class="flex justify-center my-5 border">
                    <div>
                        <h1 class=" text-10xl font-bold my-2">{{ $post->tittle }}</h1>
                        <img src="{{ asset($post->image) }}":alt="">
                    </div>
                </div>

               </a>
            @endforeach
        </div>
    </section>
    <div class="container m-auto">
        @foreach ($menus as $index => $menu)
            @if ($index > 0)
            <div class=" bg-blue-800 py-2 px-2" >
                <h1 class="text-2xl font-bold text-white">{{ $menu->Nep_Tittle }}</h1>

            </div>

                <div class="grid grid-cols-4 gap-5 my-5">
                    @foreach ($menu->posts as $post)
                <a href="{{route('fe.post',$post->id)}}">
                    <div class="py-3">

                        <h1>{{ $post->tittle }}</h1>
                        <div>
                            <i class="fa-solid fa-clock"></i>
                            <span>{{$post->created_at->diffForHumans()}}</span>
                        </div>

                    </div>
                        <div class="border ">
                        <img src="{{ asset($post->image) }}"class="w-full">

                        </div>
                </a>
                    @endforeach
            @endif

                </div>
        @endforeach


    </div>
    <section>

</x-frontend-layout>
