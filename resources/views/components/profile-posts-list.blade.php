@foreach ($posts as $post)

<div class="shadow-xl rounded-md flex flex-col p-8 mb-5">
    <div class="flex">
        <img src="{{ $post->user->avatar }}" alt="" class="h-12 rounded-full mr-5 w-12 object-cover">
        <div class="mb-10">
            <a href="{{ route('profile-index' , ['user'=>$post->user]) }}">
                <h5 class="mb-2">{{ $post->user->name }}</h5>
            </a>
            <h5 class="text-gray-700 text-sm">{{ $post->published_date }}</h5>
        </div>
    </div>
    <div class="">
        <a href="{{ $post->path() }}">
            <img src="{{ $post->cover_image }}" class='h-64 w-full object-cover'>
            <h2 class="text-4xl font-bold mt-5">
                {{ $post->title }}
            </h2>
            <p class="text-2xl mt-5 text-gray-600">
                {{ Str::limit($post->content,60) }}
            </p>
            <div class="mt-6">

                <span style="font-size:1.5rem" class="mr-2">
                    <i class="far fa-hand-spock text-gray-600 "></i>
                </span>
                <span class="text-gray-600">
                    {{ $post->total_claps }}
                </span>
            </div>
        </a>
    </div>
</div>
@endforeach