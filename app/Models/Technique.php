<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Technique extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function works()
    {
        return $this->hasMany(Work::class, 'technique_id', 'id');
    }
}
