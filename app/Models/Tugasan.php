<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tugasan extends Model
{
    use HasFactory;

    public function senarai()
    {
        return $this->belongsTo(Senarai::class);
    }
}
