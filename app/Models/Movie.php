<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable =  ['name', 'showtime_id'];

    public function showtime(){

    	return $this->belongsTo(Showtime::class);
    }
}
