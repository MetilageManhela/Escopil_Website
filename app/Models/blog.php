<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    protected $fillable = [
        'titulo', 'mensagem', 'imagem', 'user_id'
    ];
    use HasFactory;
}
