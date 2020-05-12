    <x-app>
      @include("partials._hero")
      <hr class="my-6 ">
      <div class="flex flex-col sm:flex-row">
        <div class="sm:w-8/12  px-4 py-2 m-2">
          <div class="flex my-2 justify-between">
            <div class="flex flex-col justify-between">
              <h3 class="text-black font-semibold font-serif text-xl">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis solutaab tempora nam assumenda.</h3>
              <p class="text-gray-600 text-sm my-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat fugiat a nostrudicta suscipit quae, consequuntur laboriosam eaque aperiam laudantium vitae alias!</p>

              <div>
                <p class="text-black text-xs mt-4">Author </p>
                <p class="text-gray-700 text-xs mt-1">Published time </p>
              </div>
            </div>
            <img src="https://picsum.photos/152/123" alt="" class="w-25 ml-4">
          </div>
        </div>

        <div class="sm:w-4/12  px-4 py-2 m-2 divide-y divide-gray-400">

          <h3 class="text-bold text-black text-xl mt-4 mb-3 font-serif">Polular on medium</h3>
          <div>Popular posts</div>
        </div>
      </div>
    </x-app>
