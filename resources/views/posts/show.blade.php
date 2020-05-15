<x-app>
  <div class="mx-auto bg-gray-100 max-w-screen-md">
    <div>
      <h1 class='mb-5 font-serif text-4xl'> {{ $post->title}} </h1>
      <div class="flex justify-between ">
        <div class="flex ">
          <div class="mr-4">
            <img src="https://randomuser.me/api/portraits/med/men/{{$post->user->id}}.jpg" alt="" class="rounded-full" style='height: 45px'>
          </div>
          <div class="flex flex-col justify-evenly ">
            <div class='flex items-center'>
              <p class="text-sm">
                {{ $post->user->username}}
              </p>
              <button class='p-1 ml-2 text-xs font-semibold text-purple-700 bg-transparent border border-purple-500 rounded hover:bg-purple-500 hover:text-white hover:border-transparent'>
                Follow
              </button>
            </div>
            <p class="text-sm text-gray-600">
              {{ $post->published_date}}

            </p>
          </div>
        </div>

        <div class="mt-5">
          <i class="mr-3 fab fa-twitter fa-lg"></i>
          <i class="mr-3 fab fa-linkedin fa-lg"></i>
          <i class="mr-3 fab fa-facebook-square fa-lg"></i>
        </div>
      </div>
    </div>

    <div class="mt-10">
      <img src="https://picsum.photos/680/450" alt="" class='w-full'>
      <div class="mt-10">
        <p class='font-serif text-lg'>{{$post->content}}</p>
      </div>


    </div>
  </div>
</x-app>
