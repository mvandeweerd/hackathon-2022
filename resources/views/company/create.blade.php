@extends('layouts.admin')

@section('content')
    <div class="mx-auto container px-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>Bedrijf toevoegen</h2>
                <div class="card mt-4">
                    <div class="card-body">
                        {{ Form::open() }}
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">Bedrijfsnaam: <span style="color: red;">*</span></label>
                            <div class="col-md-6">
                                {{ Form::text('name', null, ['required', 'class' => 'form-control']) }}
                                <span class="form-text">De naam van het bedrijf</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">Domein: <span style="color: red;">*</span></label>
                            <div class="col-md-6">
                                {{ Form::text('website', null, ['required', 'class' => 'form-control']) }}
                                <span class="form-text">Bijv: trengo.com</span>
                            </div>
                        </div>
                        <br />
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">Telefoonnummer:</label>
                            <div class="col-md-6">
                                {{ Form::text('phone_number', null, ['class' => 'form-control']) }}
                                <span class="form-text">Vul een telefoonnummer waarop het bedrijf bereikbaar is.</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">WhatsApp:</label>
                            <div class="col-md-6">
                                {{ Form::text('whatsapp', null, ['class' => 'form-control']) }}
                                <span class="form-text">Vul hier het WhatsApp nummer in</span>
                            </div>
                        </div>
                        <br />
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">Facebook-pagina:</label>
                            <div class="col-md-6">
                                {{ Form::url('facebook', null, ['class' => 'form-control']) }}
                                <span class="form-text">Vul de URL in van de Facebook-pagina van het bedrijf.</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">Twitter:</label>
                            <div class="col-md-6">
                                {{ Form::text('twitter', null, ['class' => 'form-control']) }}
                                <span class="form-text">Vul de URL in van de Twitter-pagina van het bedrijf.</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">Instagram:</label>
                            <div class="col-md-6">
                                {{ Form::url('instagram', null, ['class' => 'form-control']) }}
                                <span class="form-text">Vul de URL in van de Instagram-pagina van het bedrijf.</span>
                            </div>
                        </div>
                        <br />
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                {{ Form::submit('Pagina opslaan', ['class' => 'btn btn-primary']) }}
                                <br />
                                <br />
                                @if (\Session::has('success'))
                                    <span class="form-text">Pagina toevoegen</span>
                                @endif
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

