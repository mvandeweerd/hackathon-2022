@extends('layouts.app')

@section('content')



    <div class="mx-auto container px-4">

        <a href="/company/{{ $company['slug'] }}">View</a>

        <hr>

       {{ Form::model($company) }}
        <div>
            <label>Phone Number</label>
            {{ Form::text('phone_number') }}
            @error('phone_number') {{ $message }} @enderror
        </div>
        <div>
            <label>Facebook</label>
            {{ Form::text('facebook') }}
            @error('facebook') {{ $message }} @enderror
        </div>
        <div>
            <label>Email Address</label>
            {{ Form::text('email_address') }}
            @error('email_address') {{ $message }} @enderror
        </div>
        <div>
            <label>WhatsApp</label>
            {{ Form::text('whatsapp') }}
        </div>
        <div>
            <label>Instagram</label>
            {{ Form::text('instagram') }}
        </div>
        {{ Form::submit() }}
    </div>

@endsection

