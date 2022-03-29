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
   
    public function landlords(){
        return $this->belongsTo('App\Models\User','landlord_id')
             ->withTimestamps();
    }
    
    public function types(){
        return $this->belongsTo('App\Models\PropertyType','Type_id');
    }
    public function Units(){
        return $this->hasMany('App\Models\PropertyUnit')
             ->withTimestamps();
    }
    // public function Status()
    // {
    //     return $this
    //         ->belongsToMany('App\Models\PropertyStatus')
    //         ->withTimestamps();
    // }
}
