<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $guarded = [];
    protected $casts = [];
    protected $appends = [];

    public function city() { return $this->belongsTo(City::class); }
}
