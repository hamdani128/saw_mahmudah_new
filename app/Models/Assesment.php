<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assesment extends Model
{
    protected $guarded = [];

    public function alternatif()
    {
        return $this->belongsTo(Alternatif::class);
    }

}
