<div class="flex flex-col sm:flex-row ">
  <div class="px-4 py-4 m-2 sm:w-5/12">
    <div class="flex flex-col">
      <div>
        <img src="https://picsum.photos/400/200" alt="" class="w-100">
      </div>
      <div class="">
        <h2 class="my-3 text-lg post__title">{{ $posts[0]->title }}</h2>
        <p class="post__excerpt">{{ $posts[0]->content }}</p>
        <p class="mt-4 text-xs text-black">{{ $posts[0]->user->username }} </p>
        <p class="mt-1 text-xs text-gray-700">Published time {{ $posts[0]->updated_at->diffForHumans()}} </p>
      </div>
    </div>
  </div>

  <div class="px-4 py-2 m-2 text-gray-700 sm:w-4/12">
    <div class="flex flex-col">

      <div class="flex my-2 h-1/3">
        <img src="https://picsum.photos/100/100" alt="" class="mr-3 w-25">
        <div class="flex flex-col justify-between">
          <h3 class="post__title">{{ $posts[1]->title }}</h3>
          <div>
            <p class="mt-4 text-xs text-black">{{ $posts[1]->user->username }} </p>
            <p class="mt-1 text-xs">Published time {{ $posts[1]->updated_at->diffForHumans()}} </p>
          </div>
        </div>
      </div>
      <div class="flex my-2 h-1/3">
        <img src="https://picsum.photos/100/100" alt="" class="mr-3 w-25">
        <div class="flex flex-col justify-between">
          <h3 class="font-serif font-semibold text-black">{{ $posts[2]->title }}</h3>
          <div>
            <p class="mt-4 text-xs text-black">{{ $posts[3]->user->username }} </p>
            <p class="mt-1 text-xs">Published time {{ $posts[2]->updated_at->diffForHumans()}} </p>
          </div>
        </div>
      </div>
      <div class="flex my-2 h-1/3">
        <img src="https://picsum.photos/100/100" alt="" class="mr-3 w-25">
        <div class="flex flex-col justify-between">
          <h3 class="font-serif font-semibold text-black">{{ $posts[3]->title }}</h3>
          <div>
            <p class="mt-4 text-xs text-black">{{ $posts[3]->user->username }} </p>
            <p class="mt-1 text-xs">Published time {{ $posts[3]->updated_at->diffForHumans()}}</p>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="px-4 py-2 m-2 text-gray-700 sm:w-3/12">
    <div class="flex flex-col">
      <div>
        <img src="https://picsum.photos/400/200" alt="" class="w-100">
      </div>
      <div class="">
        <h2 class="my-3 text-lg post__title">{{ $posts[4]->title }}</h2>
        <p class="post__excerpt">{{ $posts[4]->content }}</p>
        <p class="mt-4 text-xs text-black">{{ $posts[4]->user->username }} </p>
        <p class="mt-1 text-xs text-grey-100">Published time {{ $posts[4]->updated_at->diffForHumans()}} </p>
      </div>
    </div>
  </div>
</div>