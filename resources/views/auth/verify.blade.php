@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>Verifieer je e-mailadres</h2>
            <div class="card mt-4">


                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Er is een email verzonden om je pagina te claimen') }}.
                    {{ __('Als je geen email hebt ontvangen') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('verstuur opnieuw') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
