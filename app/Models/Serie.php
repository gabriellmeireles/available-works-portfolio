<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Serie extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }

    public function works()
    {
        return $this->hasMany(Work::class, 'serie_id', 'id');
    }
}
