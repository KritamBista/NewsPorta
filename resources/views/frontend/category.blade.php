<x-frontend-layout>
    <section class="py-10">
        <div class="container ms-auto grid grid-cols-4 gap-10">
            <div class="col-span-3">
                @foreach ($posts as $post)
                <a href="{{route('fe.post',$post->id)}}">
                    <div class="my-5 border-b hover:shadow-lg">
                        <div class="py-7 grid grid-cols-4 gap-5">
                            <div class=" col-span-1">
                                <img src="{{ asset($post->image) }}" alt="">

                            </div>
                            <div class=" col-span-3 p-10">
                                <h1 class=" font-bold">{{ $post->tittle }}</h1>

                                <div class="half">
                                    {!! $post->description !!}
                                </div>
                                <div>
                                    <span>{{$post->created_at->diffForHumans()}}</span>
                                </div>



                            </div>
                        </div>
                    </div>


                   </a>
                @endforeach
            </div>
            <div class="col-span-1">
                <h1>Ads Section</h1>
            </div>
        </div>

    </section>


</x-frontend-layout>
