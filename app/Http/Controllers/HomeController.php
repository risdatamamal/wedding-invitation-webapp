<?php

namespace App\Http\Controllers;

use App\Repositories\AboutRepository as About;
use App\Repositories\NavbarRepository as Navbar;
use App\Repositories\BannerRepository as Banner;
use App\Repositories\QuoteRepository as Quote;
use App\Repositories\WeddingRepository as Wedding;
use App\Repositories\CountdownRepository as Countdown;
use App\Repositories\StoryRepository as Story;
use App\Repositories\EventRepository as Event;
use App\Repositories\GalleryRepository as Gallery;
use App\Repositories\GiftRepository as Gift;
use App\Repositories\RSVPRepository as RSVP;

use Illuminate\View\View;

class HomeController extends Controller
{
	public function index(About $aboutRepo, Navbar $navbarRepo, Banner $bannerRepo, Quote $quoteRepo, Wedding $weddingRepo, Countdown $countdownRepo, Story $storyRepo, Event $eventRepo, Gallery $galleryRepo, Gift $giftRepo, RSVP $rsvpRepo): View
	{
		$about = $aboutRepo->getFirst();
		$navbar = $navbarRepo->getFirst();
		$banner = $bannerRepo->getFirst();
		$quote = $quoteRepo->getFirst();
		$wedding = $weddingRepo->getFirst();
		$countdown = $countdownRepo->getFirst();
		$stories = $storyRepo->get();
		$events = $eventRepo->get();
		$galleries = $galleryRepo->get();
        $gifts = $giftRepo->get();
        $rsvps = $rsvpRepo->get();

		return view('home', compact('about', 'navbar', 'banner', 'quote', 'wedding', 'countdown', 'stories', 'events', 'galleries', 'gifts', 'rsvps'));
	}
}
