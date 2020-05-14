<x-app>
  <div class="bg-gray-100 sm:mx-20">
    <div>
      <h1 class='mb-5 font-serif text-4xl'> {{ $post->title}} </h1>
      <div class="flex justify-between">
        <div class="flex ">
          <div class="mr-4">
            <img src="https://randomuser.me/api/portraits/med/men/{{$post->user->id}}.jpg" alt="" class="rounded-full" style='height: 45px'>
          </div>
          <div class="flex flex-col justify-evenly">

            <p class="text-sm">
              {{ $post->user->username}}
            </p>
            <p class="text-sm text-gray-600">
              {{ $post->published_date}}

            </p>
          </div>
        </div>

        <div>Icons</div>
      </div>
    </div>


  </div>
</x-app>
