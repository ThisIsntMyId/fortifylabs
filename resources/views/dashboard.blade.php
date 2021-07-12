Hello this is dashboard.
It will require authentication.

We welcome you, Mr. {{ Auth::user()->name ?? Auth::user()->email }}

<form method="POST" action="/logout">
    @csrf
    <button>Logout</button>
</form>
