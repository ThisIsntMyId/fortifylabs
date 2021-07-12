<h1>Password Confirm</h1>

<form method="POST" action="/user/confirm-password">
    @csrf
    Password: <input name="password" type="password"> <br>
    @error('password')
        Password Error {{$message}}
    @enderror
    <input type="submit"><br>
</form>
