<x-app>

    <div class="container mx-auto sm:w-1/2 ">
        <form action="{{ route('post-update',['post'=>$post]) }}" method="POST" class="w-full"
            enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            @if ($post->cover_image)
            <img src="{{ $post->image }}" alt="">
            @endif
            <input type="file" name='cover_image'>
            @error('cover_image')
            <p class="text-red-500 my-3">
                {{ $message }}
            </p>
            @enderror
            <input type="text" name="title" class='text-5xl 
            bg-gray-100 outline-none font-serif mb-8' placeholder="Title" value="{{ $post->title }}">
            @error('title')
            <p class="text-red-500 mb-3">
                {{ $message }}
            </p>
            @enderror
            <textarea name="content" rows="10" class="
            bg-gray-100 outline-none border-none font-serif text-2xl w-full"
                placeholder="Tell your story">{{ $post->content }}</textarea>
            @error('content')
            <p class="text-red-500 my-3">
                {{ $message }}
            </p>
            @enderror
            <button type="submit"
                class='inline-block p-4 mr-2 font-semibold text-green-700 bg-transparent border border-green-500 rounded hover:bg-green-500 hover:text-white hover:border-transparent'
                name='published' value="darft">Save
                as draft</button>
            <button type="submit"
                class='inline-block p-4 mr-2 font-semibold text-green-700 bg-transparent border border-green-500 rounded hover:bg-green-500 hover:text-white hover:border-transparent'
                name='published' value="publish">Publish</button>
        </form>
    </div>

</x-app>