<h1>Login</h1>

@if (session('status'))
    <div class="mb-4 font-medium text-sm text-green-600">
        {{ session('status') }}
    </div>
@endif

<form method="POST" action="/login">
    @csrf
    Email: <input name="email" type="text"> <br>
    @error('email')
        Email Error {{$message}}
    @enderror
    Password: <input name="password" type="password"> <br>
    @error('password')
        Password Error {{$message}}
    @enderror
    Remember Me: <input name="remember" type="checkbox"> <br>
    <input type="submit"><br>
</form>

or

Login with

<a href="/my/auth/social/google/redirect">Google</a>

<a href="/my/auth/social/facebook/redirect">Facebook</a>

<a href="/my/auth/social/apple/redirect">Apple</a>
