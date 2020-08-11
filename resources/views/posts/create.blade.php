<x-app>

    <div class="container mx-auto sm:w-1/2 ">

        <x-post-form path="{{ route('post-store') }}" isEdit="0" />

    </div>

    {{-- <script src="{{ asset('js/editor.js') }}" defer></script> --}}
</x-app>