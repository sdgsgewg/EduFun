@extends('layouts.main')

@section('container')
    <link rel="stylesheet" href="{{ asset('css/home/home.css') }}">

    <div class="row justify-content-center">
        <div class="col-11 mt-5 mb-4">
            <div class="col-6 d-flex flex-row" style="height: 60px;">
                <div class="rounded-circle shadow overflow-hidden" style="width: 60px; height:60px;">
                    <img src="{{ asset($writer->image) }}" alt="">
                </div>
                <div class="d-flex flex-column ms-4">
                    <div>
                        <p class="m-0 fw-bold">{{ $writer->name }}</p>
                    </div>
                    <div class="mt-auto">
                        <p class="m-0">Spesialis {{ $category->name }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-11 mb-5 d-flex flex-column">
            @foreach ($category_details as $cd)
                @include('components.card')
            @endforeach
        </div>
    </div>
@endsection
