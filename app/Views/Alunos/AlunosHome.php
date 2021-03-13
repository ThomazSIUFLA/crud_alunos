<div class="album py-4 bg-dark ">
  <div class="container">
    <div class="album-title text-white text-center"><h1>CRUD simples de alunos</h1></div>
    <div class="row">
      <div class="col-md-6">
        <a href="<?= base_url('alunos') ?>">
          <div class="card text-white bg-primary mx-auto" style="max-width: 18rem;">
            <div class="card-header">LISTA DE ALUNOS</div>
            <div class="card-body">
              <img class="card-img-top" src="<?= base_url('assets/images/lista.png') ?>" alt="imagem lista">
            </div>
          </div>
        </a>
      </div>

      <div class="col-md-6">
        <a href="<?= base_url('novo-aluno') ?>">
          <div class="card text-white bg-primary mx-auto" style="max-width: 18rem;">
            <div class="card-header">INSERIR NOVO ALUNO</div>
            <div class="card-body">
              <img class="card-img-top" src="<?= base_url('assets/images/lista.png') ?>" alt="imagem lista">
            </div>
          </div>
        </a>
      </div>
    </div>
    <br>
    <h3 class="text-success text-center m-2">Desenvolvido por Thomaz Flanklin para Processo seletivo Grupo Delta</h3>
  </div>