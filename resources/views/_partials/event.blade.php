<section class="py-5 my-5" id="event">
<div class="container">
    <h2 class="text-center script display-5 mb-4">{{ $navbar->event }}</h2>
    <hr class="col-3 mx-auto mb-5">
    <div class="row">
        @forelse ($events as $event)
            <div class="col-md-6 col-lg-4 mb-4 text-center">
                <div class="card">
                    <img src="{{ $event->photo_src }}" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3 class="fw-bold h4">{{ $event->name }}</h3>
                        <ul class="list-unstyled">
                            <li><i class="far text-muted fa-calendar me-3"></i> {{ $event->date_formatted }}</li>
                            <li><i class="far text-muted fa-clock me-3"></i> {{ \Carbon\Carbon::parse($event->start_time)->format('H:i') }} WIB - {{ \Carbon\Carbon::parse($event->finish_time)->format('H:i') }} WIB</li>
                            <li><i class="far text-muted fa-map me-3"></i>{{ $event->location }}</li>
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
