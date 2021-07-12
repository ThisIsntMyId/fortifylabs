<h1>Verify Email</h1>

@if (session('status') == 'verification-link-sent')
    <div class="mb-4 font-medium text-sm text-green-600">
        A new email verification link has been emailed to you!
    </div>
@endif

You have to verify email to access some pages. We have sent you the link in mail already. click the button below to resend link again.

<form method="POST" action="/email/verification-notification">
    @csrf
    <button>Resend Mail</button>
</form>
