<form id="logout-form" action="{{ route('laboratory.logout') }}" method="POST" style="display: none;">
    @csrf
</form>

<a href="{{ route('laboratory.logout') }}"
    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
    Logout
</a>

