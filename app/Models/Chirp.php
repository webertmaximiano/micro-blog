<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo; // cria uma relação pertence a um user

class Chirp extends Model
{
    use HasFactory;
    //protege para inserção de dados habilita a atribuição em massa
    protected $fillable = [
        'message',
    ];
    // cria uma relação um post pertence a um usuario
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
