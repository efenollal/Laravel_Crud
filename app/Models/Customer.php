<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public const VALIDATION_RULES = [
        'name'      => 'required|string|max:50',
        'last_name' => 'required|string|max:50',
        'company'   => 'required',
];

    /**
     * Mass assignable attributes.
     * 
     * @var array
     */
    protected $fillable = [
        'name',
        'last_name',
        'email',
        'company',
    ];

    protected $casts = [
        'name'      => 'string',
        'last_name' => 'string',
        'email'     => 'string',
        'company'   => 'string',
    ];
}
