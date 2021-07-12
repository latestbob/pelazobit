@component('mail::message')
# New Transaction Made on Pelazobit

Login to admin Transaction to  see new Transaction

@component('mail::button', ['url' => 'https://pelazobit.com.ng/auth'])
Login
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
