<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Showtime extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'duration', 'cinema_id'];

    public function cinema(){

    	return $this->belongsTo(Cinema::class);
    }

    public function movies(){

    	return $this->hasMany(Movie::class);
    }
}
