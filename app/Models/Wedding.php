<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wedding extends Model
{
    use HasFactory;

    protected $fillable = ['image', 'date', 'time', 'location', 'iframe'];

    public function getDateFormattedAttribute(): String
    {
    	return localDate($this->date);
    }

    public function getImageSrcAttribute(): String
    {
        return image($this->image);
    }
}
