<?php

namespace App\Controllers;

use App\Models\AlunoModel;

class AlunoController extends BaseController
{
    protected $helpers = ['url','form'];
	public function index()
	{
        $alunoModel = new AlunoModel();
        $data['titulo'] = "Lista de alunos";
        $data['alunos'] = $alunoModel->find();
        echo view('Header',$data);
        echo view('Alunos\AlunosHome');
        echo view ('Footer');
	}

    public function list()
	{
        $alunoModel = new AlunoModel();
        $data['titulo'] = "Lista de alunos";
        $data['alunos'] = $alunoModel->find();
        echo view('Header',$data);
        echo view('Alunos\AlunosView');
        echo view ('Footer');
	}

    public function detalheAluno($idAluno)
	{
        $data['titulo'] = "Detalhe do aluno";
        $data["idAluno"] = $idAluno;
        $alunoModel = new AlunoModel();
        $aluno = $alunoModel->find($idAluno);
        $data['aluno']=$aluno;
		echo view('Header',$data);
        echo view('Alunos\DetalheAlunoView');
        echo view ('Footer');
	}

    public function inserir()
    {

        $data['titulo'] = "Inserir aluno";
        $data['acao'] = "Salvar";
        $data['msg'] = '';

        if($this->request->getMethod() === 'post'){
            $alunoModel = new AlunoModel();
            $alunoModel->set('nome', $this->request->getPost('nome'));
            $alunoModel->set('matricula', $this->request->getPost('matricula'));
            $alunoModel->set('telefone', $this->request->getPost('telefone'));
            $alunoModel->set('turma', $this->request->getPost('turma'));
            $alunoModel->set('nascimento', $this->request->getPost('nascimento'));
            $alunoModel->set('nascimento', $this->request->getPost('nascimento'));

            if($alunoModel->insert()){
                $data['msg'] = "Aluno ". $this->request->getPost('nome')." salvo com sucesso";
            } else {
                $data['msg'] = "Falha ao salvar aluno". $this->request->getPost('nome');
            }
        }

        echo view('Header',$data);
        echo view('Alunos\FormAlunoView');
        echo view ('Footer');
        
    }
}