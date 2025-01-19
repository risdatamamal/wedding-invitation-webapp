<section class="py-5 my-5" id="gift">
    <div class="container">
        <h2 class="text-center script display-5 mb-4">{{ $navbar->gift }}</h2>
        <p class="text-center mb-4">Tanpa Mengurangi rasa hormat, kepada anda yang ingin memberikan tanda kasih kepada
            kami, dapat dikirim melalui:</p>
        <hr class="col-3 mx-auto mb-5">
        <div class="row justify-content-center">
            @forelse ($gifts as $gift)
                <div class="col-md-6 col-lg-4 mb-4 text-center">
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
        <p class="text-center mb-4">Merupakan suatu kehormatan & kebahagiaan bagi kami. Apabila Bapak/Ibu/Saudara/i
            berkenan hadir & memberikan doa restu kepada kami. Atas kehadiran & Doa restunya kami ucapkan Terimakasih.
        </p>
        <p class="text-center mb-4">Kami Yang Berbahagia,</p>
        <h2 class="text-center script display-5 mb-4">{{ $about->man_nickname }} & {{ $about->woman_nickname }}</h2>
    </div>
</section>
