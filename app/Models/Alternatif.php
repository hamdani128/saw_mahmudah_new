<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Alternatif extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class,"user_id");
    }

    public function detail_alternatif()
    {
        return $this->hasMany(DetailAlternatif::class,"alternatif_id");
    }

}
