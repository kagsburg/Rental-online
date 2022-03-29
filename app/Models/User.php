<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'Full_name',
        'Email',
        'password',
        'role_id',   //admin,landlord,tenant
        'created_by',
        'NIN',
        'Address',
        'bank',
        'bank_a/c_no',
        'Occupation_place',
        'Occupation_status',
        'Emergency_contact_name',
        'Emergency_contact',
        'Unit_id',
        'property_id',
        'created_by',
        'updated_by',

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
    // protected $with = ['roles'];
    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    /**
     * The attributes that should be cast.
     *
     * @param User $password
     * @return void
     */
    public function setPasswordAttribute($password){
        if(trim($password)==='' ){
            return;
        }
        $this->attributes['password']=Hash::make($password);
    }
  /**
     * The roles that belong to the user.
     */
    public function role(){
        return $this->belongsTo('App\Models\Role','role_id');
    }
    public function property(){
        return $this->hasMany('App\Models\Property')
             ->withTimestamps();
    }
}
