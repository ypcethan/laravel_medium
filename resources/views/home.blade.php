<x-app>
  @include("partials._hero")

  <hr class="my-6 " />
  <div class="flex flex-col sm:flex-row">
    <div class="px-4 py-2 m-2 sm:w-8/12">
      @forelse($posts as $post)
      <a href="{{$post->path()}}">
        <div class="flex justify-between my-6">
          <div class="flex flex-col justify-between">

            <h3 class="font-serif text-xl font-semibold text-black">{{ $post->title}}</h3>
            <p class="my-2 text-sm text-gray-600">{{$post->content}}</p>

            <div>
              <p class="mt-4 text-xs text-black">{{ $post->user->username}}</p>
              <p class="mt-1 text-xs text-gray-700">{{ $post->published_date}}</p>
            </div>
          </div>
          <img src="{{ $post->image }}" alt="" class="ml-4 w-25 object-cover h-40" />
        </div>
      </a>
      @empty
      <p>There are no posts yet!</p>
      @endforelse
    </div>
    <div class="px-4 py-2 m-2 sm:w-4/12 divide-y divide-gray-400">
      <h3 class="mt-4 mb-3 font-serif text-xl text-black text-bold">
        Polular on medium
      </h3>
      <div>Popular posts</div>
    </div>
  </div>
</x-app>