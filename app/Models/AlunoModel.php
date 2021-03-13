<?php
namespace app\Models;

use CodeIgniter\Model;

class AlunoModel extends Model{
    protected $table = 'aluno';
    protected $primaryKey = 'idAluno';
    protected $allowedFields = ['nome','matricula','telefone','turma',
    'nascimento','created','update','created_at','updated_at','img'];
    protected $returnType = 'object';
}
?>