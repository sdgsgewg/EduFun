@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-11 mt-5">
            <h2>{{ $cd->category->name }}</h2>
        </div>
        <div class="col-11 mt-2 mb-5 d-flex flex-column">
            <div class="d-flex flex-column mb-4">
                <div class="rounded-4" style="width: 100%; height:350px; overflow: hidden;">
                    <img src="{{ asset('img/category-detail/' . $cd->slug . '.jpg') }}" alt="">
                </div>
                <div class="mt-0">
                    @php
                        $writer = Str::words($cd->category->writer->name, 1, '');
                    @endphp
                    <small>{{ $cd->created_at->format('j F Y') }} | by: {{ $writer }}</small>
                </div>
                <div class="mt-2">
                    <p>{!! $cd->description !!}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
