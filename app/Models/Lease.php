<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lease extends Model
{
    use HasFactory;
    protected $fillable = [
        'type_id',
        'unit_id',
        'tenant_id',
        'status',
        'lease_start',
        'lease_end',
        'document',
        'created_by'
    ];
}
