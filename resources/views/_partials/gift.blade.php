<section class="py-5 my-5" id="event">
<div class="container">
    <h2 class="text-center script display-5 mb-4">{{ $navbar->gift }}</h2>
    <hr class="col-3 mx-auto mb-5">
    <div class="row">
        @forelse ($gifts as $gift)
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card">
                    <img src="{{ $gift->icon }}" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3 class="fw-bold h4">{{ $gift->name }}</h3>
                        <ul class="list-unstyled">
                            <li><i class="far text-muted fa-calendar me-3"></i> {{ $gift->no_rekening }}</li>
                            <li><i class="far text-muted fa-map me-3"></i>{{ $gift->note }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        @empty
            <div class="col">Kosong</div>
        @endforelse
    </div>
</div>
</section>
