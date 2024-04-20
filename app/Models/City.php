<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public $timestamps = false;

    protected $guarded = [];
    protected $casts = [];
    protected $appends = [];

    public function department() { return $this->belongsTo(Department::class); }
}
