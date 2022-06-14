<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyUnit extends Model
{
    use HasFactory;

    protected $fillable = [
        'Unit_title',
        'Rent',
        'Initial_deposit',
        'status',
        'description',
        'property_id',
        'created_by'
    ];
    public function Property(){
        return $this->belongsTo('App\Models\Property','property_id')
             ->withTimestamps();
    }
    public function Status(){
        return $this->belongsTo('App\Models\PropertyStatus','status')
             ->withTimestamps();
    }
}
