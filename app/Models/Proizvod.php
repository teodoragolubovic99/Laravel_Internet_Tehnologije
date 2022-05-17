<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Brend;

class Proizvod extends Model
{
    use HasFactory;

    public function brend()
    {
        return $this->belongsTo(Brend::class);
    }
}
