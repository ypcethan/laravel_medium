@forelse($posts as $post)
<a href="{{ route('post-edit' , ['post'=>$post])}}">
  <div class="flex justify-between px-4 py-3 my-5 bg-green-100">
    <div class="flex flex-col justify-between ">
      <h3 class="font-serif text-xl font-semibold text-black">{{ $post->title }}</h3>
      <p class="my-2 text-sm text-gray-600">
        {{ $post->excerpt }}
      </p>

      <div>
        <p class="mt-4 text-xs text-black">{{ $post->user->username}}</p>
        @if($post->published)
        <p class="mt-1 text-xs text-gray-700">Published {{ $post->updated_at->diffForHumans()}} </p>
        @else
        <p class="mt-1 text-xs text-gray-700">Status : draft </p>
        @endif
      </div>
    </div>
    {{-- <img src="https://picsum.photos/id/{{$post->id}}/152/123" alt="" class="ml-4 w-25"> --}}
    {{-- <img src="{{ $post->image }}" alt="" style="height: 150"> --}}
    <img src="{{ $post->image }}" alt="" class="ml-4 w-25 object-cover h-40" />
  </div>
</a>

<hr>
@empty
<p>You have no drafts</p>
@endforelse