<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    protected $table = 'location';
    protected $fillable = [
        'model',
        'color',
        'price',
        'Transmission',
        'image',
        'location-id',
        'is_active'
    ];
    public function location()
    {
        return $this->hasOne(Cars::class, 'location_id', 'id');
    }
}
