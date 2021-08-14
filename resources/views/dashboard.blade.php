Hello this is dashboard.
It will require authentication.

We welcome you, Mr. {{ Auth::user()->name ?? Auth::user()->email }}
Login at UTC {{auth()->user()->created_at->format('D d M Y @ h:i:s a')}}
Login at Locale @displayDate(auth()->user()->created_at, 'D d M Y @ h:i:s a')
@tzClientInput

<form method="POST" action="/logout">
    @csrf
    <button>Logout</button>
</form>
