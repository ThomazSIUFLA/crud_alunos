<?php

namespace App\Controllers;

use App\Models\AlunoModel;


class AlunoController extends BaseController
{
    protected $helpers = ['url','form','string'];
    protected $libraries = ['upload'];

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

            $imagem = $_FILES['img'];
            $nome = $imagem['name'];
            $info = pathinfo($nome);

            $extensao = $info['extension'];
            $img = $this->request->getFile('img');

            if ($img->isValid() && ! $img->hasMoved())
            {
                $ext = pathinfo($_FILES['img']['name'])['extension'];
                if($ext === 'jpg' || $ext === 'jpeg' || $ext === 'png' || $ext === 'gif'){
                    $newName = $img->getRandomName();
                    $pasta = WRITEPATH.'images';
                    mkdir($pasta, 0777, true);
                    $img->move(WRITEPATH.'images', $newName);   
                    $image = \Config\Services::image()
                    ->withFile(WRITEPATH.'images'.$newName)
                    ->resize(60, 80, true, 'auto')
                    ->save(WRITEPATH.'images'.$newName);                 
                } else {
                    $data['msg'] = '<h1 color="red">ERRO ao salvar imagem, ALUNO NÃO FOI SALVO</h1>';
                    echo view('Header',$data);
                    echo view('Alunos\FormAlunoView');
                    echo view ('Footer'); 
                }
                
                
                
            }
            
            $alunoModel = new AlunoModel();
            $alunoModel->set('nome', $_POST['nome']);
            $alunoModel->set('matricula', $this->request->getPost('matricula'));
            $alunoModel->set('telefone', $this->request->getPost('telefone'));
            $alunoModel->set('turma', $this->request->getPost('turma'));
            $alunoModel->set('nascimento', $this->request->getPost('nascimento'));
            $alunoModel->set('nascimento', $this->request->getPost('nascimento'));
            $alunoModel->set('img', $newName);

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