<h1>Forget Password</h1>

@if (session('status'))
    <div class="mb-4 font-medium text-sm text-green-600">
        {{ session('status') }}
    </div>
@endif

<form method="POST" action="/forgot-password">
    @csrf
    Email: <input name="email" type="text"> <br>
    @error('email')
        Email Error {{$message}}
    @enderror
    <input type="submit"><br>
</form>
