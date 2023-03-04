<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chirp extends Model
{
    use HasFactory;
    //protege para inserção de dados habilita a atribuição em massa
    protected $fillable = [
        'message',
    ];
}
