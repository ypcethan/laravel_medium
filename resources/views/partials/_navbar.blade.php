<nav class="py-10 mb-8 bg-white shadow sm:px-32 font-merriweather">
  <div class="container mx-auto md:px-0">
    <div class="flex items-center justify-center">
      <div class="mr-6">
        <a href="{{ url('/') }}" class="text-lg font-serif font-semibold no-underline text-dark ">
          {{ config("app.name", "Laravel") }}
        </a>
      </div>
      <div class="flex-1 text-right">
        @guest
        <a class="no-underline hover:underline btn-nav" href="{{ route('login') }}">{{ __("Login") }}</a>
        @if (Route::has('register'))
        <a class="no-underline hover:underline btn-nav" href="{{ route('register') }}">{{ __("Register") }}</a>
        @endif @else

        <a href="{{ route('profile-index', ['user'=> Auth::user()->username]) }}"
          class="no-underline hover:underline btn-nav">{{ Auth::user()->name }}</a>
        <a href="{{ route('own-posts-show',['state'=>'drafts'])}}"
          class="no-underline hover:underline btn-nav">Stories</a>
        <a href="{{ route('logout') }}" class="no-underline hover:underline btn-nav" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">{{ __("Logout") }}</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
          {{ csrf_field() }}
        </form>
        @endguest
      </div>
    </div>
  </div>
</nav>