<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Winner extends Model
{
    protected $table = 'winner';

    protected $guarded = [];
    protected $casts = [];
    protected $appends = [];

    public function customer() { return $this->belongsTo(Customer::class); }
}
