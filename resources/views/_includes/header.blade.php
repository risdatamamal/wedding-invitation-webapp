<header class="bg-dark"
    style="background-image: url({{ $banner->imageSrc }}); background-size: cover; background-position: center; background-repeat: no-repeat;"
    id="header">
    @include('_includes.navbar')
    <div class="h-100 d-flex align-items-center banner">
        <div class="container text-center text-white">
            <p class="h4">{{ $banner->text }}</p>
            <h1 class="script display-1 my-4">{{ $about->man_nickname }} & {{ $about->woman_nickname }}</h1>
        </div>
    </div>
</header>

{{-- <header class="bg-dark" id="header">
    <picture>
        <source media="(min-width: 640px)" src="{{ Storage::url($banner->imageSrc) }}">
        <source media="(min-width: 1080px)" src="{{ Storage::url($banner->imageSrc) }}">
    </picture>
	@include('_includes.navbar')
	<div class="h-100 d-flex align-items-center banner">
		<div class="container text-center text-white">
			<p class="h4">{{ $banner->text }}</p>
			<h1 class="script display-1 my-4">{{ $about->man_nickname }} & {{ $about->woman_nickname }}</h1>
		</div>
	</div>
</header> --}}
