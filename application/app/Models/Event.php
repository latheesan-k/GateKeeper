<?php

namespace App\Models;

use App\Casts\Json;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /**
     * @var string[] $fillable
     */
    protected $fillable = [
        'uuid',
        'name',
        'policyIds',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'policyIds' => Json::class,
    ];
}
