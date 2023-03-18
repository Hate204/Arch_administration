<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chambre extends Model
{
    protected $guarded = ['	created_at','updated_at'];
    use HasFactory;

    public function hotel ()
    {
        return $this->belongsTo(Hotel::class);
    }

    public function photos ()
    {
        return $this->hasMany(Photo::class);
    }
}
