<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'role_name',
        'description',
        'created_by',
        'updated_by',

    ];
    /**
     * The users that belong to the role.
     */
   //creating foreign key relationship
    public function user()
    {
        return $this->hasMany('App\Models\User');
    }
}
