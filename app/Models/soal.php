<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class soal extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function tipesoals()
    {
        return $this->belongsTo(tipesoal::class);
    }
}
