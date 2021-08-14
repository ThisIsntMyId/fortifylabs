<h1>Register</h1>

<script>
    document.cookie = `clientTimezoneStr=${Intl.DateTimeFormat().resolvedOptions().timeZone}`;
    document.cookie = `clientTimezoneOffsetInMinutes=${-(new Date().getTimezoneOffset())}`;
</script>

<form method="POST" action="/register">
    @csrf
    Name: <input name="name" type="text"> <br>
    @error('name')
        Name Error {{$message}}
    @enderror
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

    @tzClientInput
    @error('clientTimezone_tz')
        Invalid timezone {{$message}}
    @enderror
    <input type="submit"><br>
</form>
