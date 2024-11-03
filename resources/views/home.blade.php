@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="wrapper">
                <img src="{{ asset('img/home/home.jpg') }}" alt="">
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-11 pt-5 pb-4 d-flex flex-column">
            @foreach ($category_details->take(2) as $cd)
                @include('components.card')
            @endforeach
        </div>
    </div>
@endsection
