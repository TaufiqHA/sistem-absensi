<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class classes extends Model
{
    protected $guarded = ['id'];

    public function academicYears()
    {
        return $this->belongsTo(academicYears::class, 'academicYears_id');
    }
}
