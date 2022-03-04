<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicles extends Model
{

    protected $guarded = ["id"];
    protected $fillable = ["category_id","license_no","Make","Model","capacity","color","date_Rented","year","price","currency"];
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    public function image()
    {
        return $this->hasMany(Image::class);
    }

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'price' => 'decimal:2',
    ];

}
