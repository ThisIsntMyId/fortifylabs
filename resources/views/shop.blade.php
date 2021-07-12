Shop here. Public page.

@auth
Hi, {{ Auth::user()->name ?? Auth::user()->email }}

You can shop here.

<form method="POST" action="/logout">
    @csrf
    <button>Logout</button>
</form>
@endauth
