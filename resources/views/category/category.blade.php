@extends('layouts.main')

@section('container')
    <link rel="stylesheet" href="{{ asset('css/home/home.css') }}">

    <div class="row justify-content-center">
        <div class="col-11 mt-5">
            <h2>{{ $category->name }}</h2>
        </div>
        <div class="col-11 mt-5 mb-5 d-flex flex-column">
            @foreach ($category_details as $cd)
                @include('components.card')
            @endforeach
        </div>
    </div>
@endsection
