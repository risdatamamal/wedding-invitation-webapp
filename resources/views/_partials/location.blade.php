<section class="py-5 time text-white" style="background-image: url({{ $wedding->image_src }}); background-size: cover; background-position: center; background-repeat: no-repeat;" id="location">
    <div class="container my-5">
        <p class="script text-center display-4">{{ $navbar->location }}</p>
        <div class="card mt-4 text-dark">
            <div class="card-body text-center border-bottom py-5">
                <i class="far fa-calendar me-2 text-danger"></i> {{ $wedding->dateFormatted }}
                <span class="d-block my-2"><i class="far fa-map me-2 text-danger"></i> {{ $wedding->location }}</span>
                <time><i class="far fa-clock me-2 text-danger"></i> {{ date('H:i', strtotime($wedding->time)) }} WIB</time>
            </div>
            <div class="card-body">
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe
                            src="{!! $wedding->iframe !!}"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
</section>
