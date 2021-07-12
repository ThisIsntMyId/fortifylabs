<h1>Reset Password</h1>

<form method="POST" action="/reset-password">
    @csrf
    Email: <input name="email" type="text"> <br>
    @error('email')
        Email Error {{$message}}
    @enderror
    Password: <input name="password" type="password"> <br>
    @error('password')
        Password Error {{$message}}
    @enderror
    Password Confirm: <input name="password_confirmation" type="password"> <br>
    @error('password_confirmation')
        Password Confirm Error {{$message}}
    @enderror
    <input name="token" type="hidden" value="{{request()->query('token')}}">
    <input type="submit"><br>
</form>
