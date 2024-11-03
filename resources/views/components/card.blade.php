<div class="d-flex flex-row mb-4" style="height: 200px; overflow: hidden;">
    <div class="card-img rounded-4" style="width: 30%; height:100%; overflow: hidden;">
        <img src="{{ asset('img/category-detail/' . $cd->slug . '.jpg') }}" alt="">
    </div>
    <div class="ms-4 d-flex flex-column" style="width: 70%; height:100%;">
        <div class="d-flex flex-column">
            <h5 class="fw-bold">{{ $cd->name }}</h5>

            @php
                $writer = Str::words($cd->category->writer->name, 1, '');
            @endphp
            <small class="m-0">{{ $cd->created_at->format('j F Y') }} | by: {{ $writer }}</small>

            @php
                $limitedText = Str::words($cd->description, 12, '...');
            @endphp
            <p class="mt-0">{!! $limitedText !!}</p>
        </div>

        <div class="d-flex mt-auto align-items-end justify-content-end">
            <a href="{{ route('category.detail', ['id' => $cd->category->id, 'cd' => $cd->slug]) }}"
                class="btn btn-primary rounded-5 py-1 px-5">read
                more...</a>
        </div>
    </div>
</div>
