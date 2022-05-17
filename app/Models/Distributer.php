<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Brend;

class Distributer extends Model
{
    use HasFactory;

    public function brendovi()
    {
        return $this->hasMany(Brend::class);
    }
}
