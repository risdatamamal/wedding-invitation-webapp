<section class="py-5 my-5" id="list-rsvp">
    <div class="container">
        <h2 class="text-center script display-5 mb-4">
            <a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#rsvp">{{ $navbar->rsvp }}</a>
        </h2>

        <hr class="col-3 mx-auto mb-5">
        <div class="row">
            @forelse ($rsvps as $rsvp)
                <div class="col-md-6 col-lg-4 mb-4 text-center">
                    <div class="card">
                        {{-- <img src="{{ $rsvp->icon_user }}" alt="" class="card-img-top"> --}}
                        <div class="card-body">
                            <h3 class="fw-bold h4">{{ $rsvp->name }}</h3>
                            <ul class="list-unstyled">
                                <li><i class="far text-muted fa-calendar me-3"></i> {{ $rsvp->message }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col text-center">Masukan RSVP pertama kali!</div>
            @endforelse
        </div>
    </div>
</section>
