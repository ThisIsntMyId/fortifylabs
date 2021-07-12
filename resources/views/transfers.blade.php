Hello this is transfer screen.
It rerquired email verification.

Your, Mr. {{ Auth::user()->name ?? Auth::user()->email }}, no transfers yet.

<form method="POST" action="/logout">
    @csrf
    <button>Logout</button>
</form>
