<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kuliah extends Model
{
    use HasFactory;
    protected $table = 'kuliahs';
    protected $fillable = [
        'kodeKuliah', 'namaKuliah',  'pengajar'
    ];
}
