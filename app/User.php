<?php

namespace App;

use App\Models\Alternatif;
use App\Models\Assesment;
use App\Models\Criteria;
use App\Models\DetailAlternatif;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function alternatif()
    {
        return $this->hasMany(Alternatif::class,"user_id");
    }

    public function detail_alternatif()
    {
        return $this->hasMany(DetailAlternatif::class,"user_id");
    }

    public function assesments()
    {
        return $this->hasMany(Assesment::class,"user_id");
    }

    public function kriteria()
    {
        return $this->hasMany(Criteria::class,"user_id");
    }

}
