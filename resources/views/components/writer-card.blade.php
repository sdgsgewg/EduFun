<div class="d-flex flex-column">
    <div class="rounded-circle shadow" style="width: 300px; height:300px; overflow: hidden;">
        <img src="{{ asset($w->image) }}" alt="">
    </div>
    <div>
        <h5 class="text-center fw-bold mt-3">{{ $w->name }}</h5>
        <h5 class="text-center mt-4">Spesialis {{ $c->name }}</h5>
    </div>
</div>
