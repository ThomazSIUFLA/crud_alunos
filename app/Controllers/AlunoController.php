<?php

namespace App\Controllers;

class AlunoController extends BaseController
{
	public function index()
	{
        $data['titulo'] = "Lista de alunos";
		return view('AlunosView', $data);
	}

    public function detalheAluno($idAluno)
	{
        $data['titulo'] = "Detalhe do aluno";
        $data["idAluno"] = 25;
		return view('DetalheAlunoView',$data);
	}
}