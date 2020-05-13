<x-app>
  <h1 class="mb-5 ml-5 text-5xl font-merriweather">Your stories</h1>
  <ul class="flex border-b">
    <li class="mr-1 ">
      <a class="inline-block px-4 py-2 font-light text-black hover:text-black " href="{{ route('user-posts-show',['state'=>'drafts'])}}">Drafts</a>
    </li>
    <li class="mr-1">
      <a class="inline-block px-4 py-2 font-light text-gray-500 hover:text-black" href=" {{ route('user-posts-show',['state'=>'published'])}}">Published</a>
    </li>
  </ul>

  <x-posts-list :posts='$posts' />
</x-app>
