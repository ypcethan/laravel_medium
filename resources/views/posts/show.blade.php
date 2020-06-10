<x-app>
  <div class="mx-auto bg-gray-100 max-w-screen-md">
    <div>
      <h1 class='mb-5 font-serif text-4xl'> {{ $post->title}} </h1>
      <div class="flex justify-between ">
        <div class="flex ">
          <div class="mr-4">
            <!-- <img src="https://randomuser.me/api/portraits/med/men/{{$post->user->id}}.jpg" alt="" class="rounded-full" style='height: 45px'> -->
            <img src="{{ $post->user->avatar }}" alt="" class="rounded-full" style='height: 45px'>
          </div>
          <div class="flex flex-col justify-evenly ">
            <div class='flex items-center'>
              <p class="text-sm">
                {{ $post->user->username}}
              </p>
              <!-- <x-follow-button :user="$post->user"></x-follow-button> -->

              <follow-button-component is_following="{{ auth()->user()->following($post->user)?'true' :'false' }}"
                target_path="{{ route('follow',['user'=>$post->user]) }}"></follow-button-component>
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
          <i class="far fa-hand-spock"></i>
        </div>
      </div>
    </div>

    <div class="mt-10">
      <img src="https://picsum.photos/680/450" alt="" class='w-full'>
      <div class="mt-10">
        <p class='font-serif text-lg'>{{$post->content}}</p>
      </div>

    </div>
    <div class="flex justify-between mt-10 mb-10">
      <div>
        <span style='font-size:2rem' class="mr-2">
          <i class="far fa-hand-spock text-black hover:text-gray-500"></i>
        </span>
        15 claps
        <span style='font-size:2rem' class=" ml-5 mr-2">
          <i class="far fa-comments "></i>
        </span> 2 responses
      </div>
    </div>
    <comment-form image_url="{{ auth()->user()->avatar }}" post_id="{{ $post->id }}"> </comment-form>

    <comments-component post_id="{{ $post->id }}"> </comments-component>
  </div>
</x-app>