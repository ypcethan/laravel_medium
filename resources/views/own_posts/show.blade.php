<x-app>
  <div class="flex items-center justify-between">

    <h1 class="mb-5 ml-5 text-5xl font-merriweather">Your stories</h1>
    <a href="{{route('post-create')}}" class='inline-block p-4 mr-2 font-semibold text-green-700 bg-transparent border border-green-500 rounded hover:bg-green-500 hover:text-white hover:border-transparent'>Write a story</a>
  </div>
  <ul class="flex border-b">
    <li class="mr-1 ">
      <a class="{{ $published ? 'text-gray-500 inline-block px-4 py-2 font-light hover:text-black' : 'text-black inline-block px-4 py-2 font-light hover:text-black'}}" href=" {{ route('own-posts-show',['state'=>'drafts'])}}">Drafts</a>
    </li>
    <li class="mr-1">
      <a class="{{ $published ? 'text-black inline-block px-4 py-2 font-light hover:text-black' : 'text-gray-500 inline-block px-4 py-2 font-light hover:text-black'}}" href=" {{ route('own-posts-show',['state'=>'published'])}}">Published</a>
    </li>
  </ul>
  <x-posts-list :posts='$posts' />
</x-app>
