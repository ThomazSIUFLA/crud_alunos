<?php

namespace App\Controllers;

use App\Models\AlunoModel;


class AlunoController extends BaseController
{
    protected $helpers = ['url', 'form', 'string'];

    public function index()
    {
        $alunoModel = new AlunoModel();
        $data['titulo'] = "Lista de alunos";
        $data['alunos'] = $alunoModel->find();
        echo view('Header', $data);
        echo view('Alunos\AlunosHome');
        echo view('Footer');
    }

    public function list()
    {
        $alunoModel = new AlunoModel();
        $data['titulo'] = "Lista de alunos";
        $data['alunos'] = $alunoModel->find();
        echo view('Header', $data);
        echo view('Alunos\AlunosView');
        echo view('Footer');
    }

    public function detalheAluno($idAluno)
    {
        $data['titulo'] = "Detalhe do aluno";
        $data["idAluno"] = $idAluno;
        $alunoModel = new AlunoModel();
        $aluno = $alunoModel->find($idAluno);
        $data['aluno'] = $aluno;
        echo view('Header', $data);
        echo view('Alunos\DetalheAlunoView');
        echo view('Footer');
    }

    public function inserir()
    {

        $data['titulo'] = "Inserir aluno";
        $data['acao'] = "Salvar";
        $data['msg'] = '';

        if ($this->request->getMethod() === 'post') {

            $imagem = $_FILES['img'];
            $nome = $imagem['name'];
            $info = pathinfo($nome);

            $extensao = $info['extension'];
            $img = $this->request->getFile('img');

            if ($img->isValid() && !$img->hasMoved()) {
                $ext = pathinfo($_FILES['img']['name'])['extension'];
                if ($ext === 'jpg' || $ext === 'jpeg' || $ext === 'png' || $ext === 'gif') {
                    $newName = $img->getRandomName();
                    $pasta = ROOTPATH . 'public\assets\images\users';

                    if (file_exists($pasta)) {
                        echo '';
                    } else {
                        $old_umask = umask(0);
                        mkdir($pasta, 0777, true);
                        umask($old_umask);
                    }

                    $img->move($pasta, $newName);

                    $image = \Config\Services::image()
                        ->withFile($pasta . '\\' . $newName)
                        ->resize(90, 120, true, 'auto')
                        ->save($pasta . '\\' . $newName);
                } else {
                    $data['msg'] = '<h1 color="red">ERRO ao salvar imagem, ALUNO NÃO FOI SALVO</h1>';
                    echo view('Header', $data);
                    echo view('Alunos/FormAlunoView');
                    echo view('Footer');
                }
            }

            $alunoModel = new AlunoModel();
            $alunoModel->set('nome', $this->request->getPost('nome'));
            $alunoModel->set('matricula', $this->request->getPost('matricula'));
            $alunoModel->set('telefone', $this->request->getPost('telefone'));
            $alunoModel->set('turma', $this->request->getPost('turma'));
            $alunoModel->set('nascimento', $this->request->getPost('nascimento'));
            $alunoModel->set('nascimento', $this->request->getPost('nascimento'));
            $alunoModel->set('img', $newName);

            if ($alunoModel->insert()) {
                $data['msg'] = "Aluno " . $this->request->getPost('nome') . " salvo com sucesso";
            } else {
                $data['msg'] = "Falha ao salvar aluno" . $this->request->getPost('nome');
            }
        }

        echo view('Header', $data);
        echo view('Alunos/FormAlunoView');
        echo view('Footer');
    }

    public function editar($id)
    {

        $data['titulo'] = "Editar aluno";
        $data['acao'] = "Salvar alterações";
        $data['msg'] = '';

        $alunoModel = new AlunoModel();
        $aluno = $alunoModel->find($id);

        if ($this->request->getMethod() === 'post') {

            $img = $this->request->getFile('img');

            if ($_FILES['img']['size'] > 0) {

                if ($img->isValid() && !$img->hasMoved()) {
                    $ext = pathinfo($_FILES['img']['name'])['extension'];
                    if ($ext === 'jpg' || $ext === 'jpeg' || $ext === 'png' || $ext === 'gif') {
                        $newName = $img->getRandomName();
                        $pasta = ROOTPATH . 'public\assets\images\users';

                        if (file_exists($pasta)) {
                            echo '';
                        } else {
                            $old_umask = umask(0);
                            mkdir($pasta, 0777, true);
                            umask($old_umask);
                        }

                        $img->move($pasta, $newName);

                        $aluno->img = $newName;

                        $image = \Config\Services::image()
                            ->withFile($pasta . '\\' . $newName)
                            ->resize(90, 120, true, 'auto')
                            ->save($pasta . '\\' . $newName);
                    } else {
                        $data['msg'] = '<h1 color="red">ERRO ao salvar imagem, ALUNO NÃO FOI SALVO</h1>';
                        echo view('Header', $data);
                        echo view('Alunos/FormAlunoView');
                        echo view('Footer');
                    }
                }
            }
            $aluno->nome = $this->request->getPost('nome');
            $aluno->matricula = $this->request->getPost('matricula');
            $aluno->telefone = $this->request->getPost('telefone');
            $aluno->turma = $this->request->getPost('turma');
            $aluno->turma = $this->request->getPost('nascimento');
            $aluno->nascimento = $this->request->getPost('nascimento');


            if ($alunoModel->update($id, $aluno)) {
                $data['msg'] = "Aluno " . $this->request->getPost('nome') . " alterado com sucesso";
            } else {
                $data['msg'] = "Falha ao salvar aluno" . $this->request->getPost('nome');
            }
        }

        $data['aluno'] = $aluno;
        echo view('Header', $data);
        echo view('Alunos/FormAlunoView');
        echo view('Footer');
    }

    public function excluir($id)
    {

        $data['titulo'] = "Excluir aluno";
        $data['acao'] = "Excluir";

        $alunoModel = new AlunoModel();
        $aluno = $alunoModel->find($id);


        if ($this->request->getMethod() === 'post') {
            $img = ROOTPATH.'public/assets/images/users/'.$aluno->img;
            if (unlink($img)) {
                
                if ($alunoModel->delete($id)) {

                    $data['msg'] = "Aluno " . $this->request->getPost('nome') . " excluido com sucesso";
                } else {
                    $data['msg'] = "Falha ao excluir aluno" . $this->request->getPost('nome');
                }
            }

            return $this->list();
        }


        $data['aluno'] = $aluno;

        echo view('Header', $data);
        echo view('Alunos/ExcluirAlunoView');
        echo view('Footer');
    }
}
