<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    // Definindo a PK
    protected $primaryKey = 'ID';

    /*
    As proximas duas linhas sao para evitar que ele tente incrementar
    a PK automaticamente, além de definir que o tipo é uma string.
    
    Necessário porque se não o Laravel vai tentar tratar como um int

    Timestamps desligados
    */
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    

    // Evitar que o usuario acesse diretamente o userRole
    protected $fillable = [
        'ID',
        'email',
        'matricula',
        'name',
        'picture',
    ];
}
