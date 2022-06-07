<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    use HasFactory;
    // Definindo a PK
    protected $primaryKey = 'idDisciplina';

    /*
    idDisciplina vai ser um inteiro autoincrementado;
    Timestamps desligados
    */
    public $incrementing = true;
    public $timestamps = false;
    

    // Evitar que o usuario acesse diretamente o userRole
    protected $fillable = [
        'idDisciplina',
        'nameDisciplina'
    ];

}
