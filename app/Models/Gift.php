<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gift extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'no_rekening', 'note', 'icon'];

    public function getPhotoSrcAttribute(): String
    {
    	return image($this->icon);
    }

    public function getDateFormattedAttribute(): String
    {
    	return localDate($this->date);
    }
}
