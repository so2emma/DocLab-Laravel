<form id="logout-form" action="{{ route('doctor.logout') }}" method="POST" style="display: none;">
    @csrf
</form>

<a href="{{ route('doctor.logout') }}"
    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
    Logout
</a>

