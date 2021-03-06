<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyType extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_name',
        'description',
        'created_by'
    ];
    
    public function property(){
        return $this->hasMany('App\Models\Property');
    }
}
