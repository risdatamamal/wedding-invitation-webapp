<?php

namespace App\Repositories;

use App\Models\Gift;

class GiftRepository extends Repository {

	public function __construct(Gift $gift)
	{
		$this->model = $gift;
	}

	public function get(): Object
	{
		return $this->model->orderBy('updated_at', 'asc')->take(6)->get();
	}


}

 ?>
