<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Artist extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function series()
    {
        return $this->hasMany(Serie::class, 'artist_id','id');
    }


}
