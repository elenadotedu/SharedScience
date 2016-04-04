@if(!$user->confirmed)
    Click here to set your password:
@else
    Click here to reset your password:
@endif
    <a href="{{ $link = url('password/reset', $token).'?email='.urlencode($user->getEmailForPasswordReset()) }}"> {{ $link }} </a>
