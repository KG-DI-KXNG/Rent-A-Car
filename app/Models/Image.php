<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    public $guarded = [];

    public function vehicle()
    {
        return $this->belongsTo(Vehicles::class);
    }
}
