<h1>2FA Challenge</h1>

<form method="POST" action="/two-factor-challenge">
    @csrf
    Code: <input name="code" type="text"> <br>
    @error('code')
        Code Error {{$message}}
    @enderror
    Recovery Code: <input name="recovery_code" type="text"> <br>
    @error('recovery_code')
        Recovery Code Error {{$message}}
    @enderror
    <input type="submit"><br>
</form>
