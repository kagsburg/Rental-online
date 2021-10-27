<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyStatus extends Model
{
    use HasFactory;
    protected $fillable = [
        'status_name',
        'description',
        'created_by',
        'updated_by',

    ];
    public function Property() {
        return $this->hasMany('App\Models\Property');
    }
}
