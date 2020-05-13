<x-master>
  <div class="container mx-auto mt-20 text-center font-merriweather">
    <h1 class="text-5xl">Welcome, Laravel Medium</h1>
    <p class="mt-10 text-2xl bg-green-100">This is a clone of the "Medium" blog, it is intended to horn my web development skills</p>
    <a href="{{route('register')}}" class="inline-block px-2 py-4 mt-20 mb-10 font-sans text-xl font-semibold text-white bg-green-600 border rounded shadow ">Get started</a>
    <p class="">Already have an account? <a href="{{route('login')}}" class="text-green-600">Sign in</a>.</p>
  </div>
</x-master>
