@extends('layouts.main')

@section('container')
    <link rel="stylesheet" href="{{ asset('css/home/home.css') }}">

    <div class="row justify-content-center">
        <div class="col-11 pt-5">
            <h1 class="fw-bold">Our Writers:</h1>
        </div>
        <div class="col-11 mt-5 pt-3 d-flex flex-row justify-content-evenly">
            @foreach ($writers as $w)
                @foreach ($categories as $c)
                    @if ($c->writer->id == $w->id)
                        <a class="text-decoration-none text-black"
                            href="{{ route('writers.detail', ['writer' => $w->username]) }}">
                            @include('components.writer-card')
                        </a>
                    @endif
                @endforeach
            @endforeach
        </div>
    </div>
@endsection
