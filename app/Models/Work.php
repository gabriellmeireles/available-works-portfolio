<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Work extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function serie()
    {
        return $this->belongsTo(Serie::class);
    }

    public function technique(){
        return $this->belongsTo(Technique::class);
    }

}
