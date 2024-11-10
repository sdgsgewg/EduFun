@extends('layouts.main')

@section('container')
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
                        @foreach ($category as $c)
                            <p class="m-0">Spesialis {{ $c->name }}</p>
                        @endforeach
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
