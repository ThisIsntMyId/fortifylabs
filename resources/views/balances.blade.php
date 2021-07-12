Hello this is balance screen.
It rerquired password confirmation.

Your, Mr. {{ Auth::user()->name ?? Auth::user()->email }}, balance is $100.

<form method="POST" action="/logout">
    @csrf
    <button>Logout</button>
</form>
