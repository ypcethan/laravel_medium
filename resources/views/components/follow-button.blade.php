@if(auth()->user()->isNot($user))
<form method="POST" action="{{ route('follow' ,['user'=>$user]) }}">
  @csrf
  <button class='p-1 ml-2 text-xs font-semibold text-purple-700 bg-transparent border border-purple-500 rounded hover:bg-purple-500 hover:text-white hover:border-transparent'>
    {{ auth()->user()->following($user) ? "Follow" : "Unfollow"}}
  </button>
</form>
@endif
