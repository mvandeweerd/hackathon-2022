@extends('layouts.app')

@section('content')

    <div class="mx-auto container px-4">
        <div class="mt-8 row">
            <div class="">
                <img width="100" src="https://via.placeholder.com/400x400" alt="">
            </div>
            <div class="ml-4">
                <h1 class="text-2xl font-bold">[brand name]</h1>
                <div class="mt-2">
                    <p>Je zocht voor: <span class="text-blue-400">[search]</span></p>
                </div>
            </div>
            <div class="ml-auto">
                <a href="/claim/1" class="bg-grey-400 rounded" data-toggle="modal" data-target="#exampleModal">Claim deze pagina</a>
            </div>
        </div>
        <div class="my-4">

        </div>
        <div class="w-full mt-4">
            <iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no"></iframe>
        </div>
    </div>

@endsection

