<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $guarded = ['	created_at','updated_at'];
    use HasFactory;
    public function gestionnaire ()
    {
        return $this->hasOne(Gestionnaire::class);
    }

    public function chambres ()
    {
        return $this->hasMany(Chambre::class);
    }
}
