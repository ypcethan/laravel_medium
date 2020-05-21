<x-app>
  <div class="max-w-screen-md mx-auto bg-gray-100">
    <div>
      <h1 class='mb-5 font-serif text-4xl'> {{ $post->title}} </h1>
      <div class="flex justify-between ">
        <div class="flex ">
          <div class="mr-4">
            <img src="https://randomuser.me/api/portraits/med/men/{{$post->user->id}}.jpg" alt="" class="rounded-full"
              style='height: 45px'>
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
        </div>
      </div>
    </div>

    <div class="mt-10">
      <img src="https://picsum.photos/680/450" alt="" class='w-full'>
      <div class="mt-10">
        <p class='font-serif text-lg'>{{$post->content}}</p>
      </div>



    </div>
    <comment-form image_url="https://randomuser.me/api/portraits/med/men/{{auth()->user()->id}}.jpg" />
    <h3>asdfasfd</h3>
  </div>
</x-app>