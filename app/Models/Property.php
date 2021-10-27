<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'Property_name',
        'Rent_amount',
        'landlord_id',
        'status',
        'Location',
        'Type_id',
        'description',
        'created_by'
    ];


    public function Status()
    {
        return $this
            ->belongsToMany('App\Models\PropertyStatus')
            ->withTimestamps();
    }
}
