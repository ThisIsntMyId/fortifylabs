User account settings here. Private to user.

{{ Auth::user()->name ?? Auth::user()->email }}

Your settings are here

<form method="POST" action="/logout">
    @csrf
    <button>Logout</button>
</form>


----
<h1>manage 2fa</h1>
---
@if (session('status') == 'two-factor-authentication-enabled')
    <div class="mb-4 font-medium text-sm text-green-600">
        Two factor authentication has been enabled.
    </div>
@endif

<form method="POST" action="/user/two-factor-authentication">
    @csrf
    <button>Enable 2fa</button>
</form>
<form method="POST" action="/user/two-factor-authentication">
    @csrf
    @method('DELETE')
    <button>Disable 2fa</button>
</form>


@if (Auth::user()->two_factor_secret)
<h1>If you enable or disable, scan qr code again</h1>
<h1>Same recovery code cant be used again</h1>
<h3>2fa codes</h3>
---
qr code

{!! Auth::user()->twoFactorQrCodeSvg() !!}

---
recovery codes
<ul>
@foreach ((array) Auth::user()->recoveryCodes() as $recoveryCode)
    <li>{{$recoveryCode}}</li>
@endforeach
</ul>

<form method="POST" action="/user/two-factor-recovery-codes">
    @csrf
    <button>Regenerate Recovery Code</button>
</form>
---
@endif
