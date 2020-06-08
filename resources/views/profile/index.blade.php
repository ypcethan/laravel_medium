<x-app>
    <div class="flex flex-col sm:flex-row  justify-center">
        <div class="px-4 py-4 m-2 sm:w-9/12 ">
            <div class="flex flex-col-reverse sm:flex-row sm:justify-between">
                <!-- Top  -->
                <div>
                    <div>
                        <div class="flex mb-6">
                            <h3 class="text-4xl font-semibold">
                                {{ $user->username }}
                            </h3>
                            <a class="ml-5 text-sm font-medium p-2  border rounded-lg cursor-pointer"
                                href="{{ route('profile-edit' ,['user'=>$user]) }}">
                                Edit profile
                            </a>
                        </div>
                        <p class="text-sm text-gray-700 mb-2">
                            Member sice 2020
                        </p>
                        <p class="text-sm text-gray-700">2 following</p>
                    </div>
                </div>
                <div>
                    <img src="{{ $user->avatar }}" class="rounded-full h-32 w-32 object-cover" />
                </div>
            </div>

            <div class="mt-10">
                <!-- Claps -->
                <ul class="flex border-b">
                    <li class="mr-1 ">
                        <a class="{{
                                $is_recommended
                                    ? 'text-gray-500 inline-block px-4 py-2 font-medium hover:text-black'
                                    : 'text-black inline-block px-4 py-2 font-medium hover:text-black'
                            }}" href=" {{ route('profile-index',[
                            'user'=>Auth()->user()->username ,
                            'state'=>''])}}">Profile</a>
                    </li>
                    <li class="mr-1">
                        <a class="{{
                                $is_recommended
                                    ? 'text-black inline-block px-4 py-2 font-medium hover:text-black'
                                    : 'text-gray-500 inline-block px-4 py-2 font-medium hover:text-black'
                            }}" href="{{ route('profile-index',[
                            'user'=>Auth()->user()->username ,
                            'state'=>'is_recommended'])}}">Claps</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</x-app>