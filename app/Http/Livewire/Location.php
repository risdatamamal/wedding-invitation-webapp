<?php

namespace App\Http\Livewire;

use App\Repositories\WeddingRepository;
use App\Traits\FileTrait;

use Livewire\Component;
use Livewire\WithFileUploads;

class Location extends Component
{
	use WithFileUploads, FileTrait;

	public $wedding, $image;

	protected $rules = [
		'image' => 'image|nullable'
	];

	public function save()
	{
		$this->validate();

		if ($this->image) {
			$image = $this->upload($this->image);

			$this->wedding->image = $image;
		}

		$this->wedding->save();

		session()->flash('success', 'Sukses Menyimpan Lokasi');
	}

	public function mount(WeddingRepository $weddingRepo)
	{
		$this->wedding = $weddingRepo->getFirst();
	}
    public function render()
    {
        return view('livewire.location');
    }
}
