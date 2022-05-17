<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Proizvod;
use App\Models\Distributer;

class Brend extends Model
{
    use HasFactory;

    public function proizvodi()
    {
        return $this->hasMany(Proizvod::class);
    }

    public function distributer()
    {
        return $this->belongsTo(Distributer::class);
    }
}
