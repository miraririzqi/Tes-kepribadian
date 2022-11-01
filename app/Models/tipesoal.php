<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipesoal extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function soals()
    {
        return $this->hasMany(soal::class);
    }
}
