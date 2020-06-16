<x-app>

    <div class="container mx-auto sm:w-1/2 ">

        <x-post-form path="{{ route('post-update',['post'=>$post]) }}" isEdit="1" :post="$post" />
    </div>

</x-app>