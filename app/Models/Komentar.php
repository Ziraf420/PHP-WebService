<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable = [
        'nama',
        'komentar',
        'project_id'
    ];
}
