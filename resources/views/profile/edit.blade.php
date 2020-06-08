<x-app>
    <div class="flex flex-col sm:flex-row  justify-center">
        <div class="px-4 py-4 m-2 sm:w-9/12 ">
            <!-- Top  -->
            <form method="POST" action="{{ route('profile-update',['user'=>$user->username]) }}"
                enctype="multipart/form-data">
                @csrf @method('patch')
                <div class="flex flex-col-reverse sm:flex-row sm:justify-between">
                    <div>
                        <div>
                            <div class="flex mb-6">
                                <input name="username" type="text" class="text-4xl
                                font-semibold bg-gray-100
                                focus:outline-none" value="{{ $user->username }}" />
                            </div>
                            @error('username')
                            <p class="text-red-500 text-xs mt-2">
                                {{ $message }}</p>
                            @enderror
                            <p class="text-sm text-gray-700 mb-2">
                                Member sice 2020
                            </p>
                            <p class="text-sm text-gray-700">2 following</p>
                            <div class="mt-10 flex">
                                <button type="submit" class="text-sm font-medium p-2  border rounded-md border-green-500 text-green-500
                                cursor-pointer">
                                    Save
                                </button>
                                <a class="text-sm font-medium p-2 ml-2  border rounded-md cursor-pointer text-gray-500 hover:text-black hover:border-black"
                                    href="{{ route('profile-index' , ['user'=>$user]) }}">
                                    Cancel
                                </a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <img src="{{ $user->avatar }}" alt="{{ $user->username }}" class="rounded-full h-32 mb-10" />
                        <input type="file" name="avatar" />
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app>