<nav class="bg-white shadow mb-8 py-10 sm:px-32 ">
  <div class="container mx-auto  md:px-0">
    <div class="flex items-center justify-center">
      <div class="mr-6">
        <a href="{{ url('/') }}" class="text-lg font-semibold text-dark no-underline logo">
          {{ config("app.name", "Laravel") }}
        </a>
      </div>
      <div class="flex-1 text-right">
        @guest
        <a class="no-underline hover:underline btn-nav" href="{{ route('login') }}">{{ __("Login") }}</a>
        @if (Route::has('register'))
        <a class="no-underline hover:underline btn-nav" href="{{ route('register') }}">{{ __("Register") }}</a>
        @endif @else
        <span class="btn-nav">{{ Auth::user()->name }}</span>

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
