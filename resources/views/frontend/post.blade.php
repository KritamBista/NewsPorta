<x-frontend-layout>
    <section class="py-10">
        <div class="container m-auto grid grid-cols-4">
            <div class=" col-span-3">
                <img src="{{asset($post->image)}}" alt="">
                <h1>{{$post->tittle}}</h1>
                {!!$post->description!!}
            </div>
            <div class=" col-span-1">
                <h2>Ads</h2>
            </div>
        </div>

    </section>

    <div class="container m-auto">

        <h5 class=" font-bold">Comments</h5>
        <div class=" py-10 ">
            @foreach($comments as $item)
            <div class="border">
                <h5 class=" font-bold">{{$item->name}}</h5>
                <p>{{$item->comment}}</p>
                <div>
                    <span class=" text-xs text-gray-500">{{$item->created_at->diffForHumans()}}</span>
                </div>

            </div>


            @endforeach
        </div>





        </div>
        {{-- <h5 class=" bdg mx-2">Comment</h5> --}}
        <form action="{{route('fe.comment')}}" method="post">
            @csrf
            <input type="text" name="post_id" value="{{$post->id}}" hidden>
            <div class=" w-2/4">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First name</label>
                <input type="text" id="first_name" name="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John" required>
            </div>
            <div class=" w-2/4">
                <label for="Email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input type="text" id="first_name" name="Email"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="example@gmail.com" required>
            </div>

            <div class="">
                <label for="comment" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Comment</label>
                <textarea class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="comment" id="" cols="60" rows="10"></textarea>
            </div>
            <button type="submit" class="py-2 my-3 px-10 bg-red-500 text-white rounded-md ">Send Message</button>
        </form>
         {{-- <h5 class=" font-bold">Comments</h5>
        <div class=" py-10">
           @foreach ($comments as $item )
           <h1>{{$item->name}}</h1>
           h

           @endforeach



        </div> --}}


    </div>


</x-frontend-layout>
