<div class="album py-2 bg-dark ">
  <div class="card text-white bg-info mb-3 mx-auto" style="max-width: 900px;">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="<?= base_url('public/assets/images/users') . '/' . $aluno->img ?>" alt="foto Aluno" width="240">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h3 class="card-title"><strong><?= $aluno->nome ?></strong></h3>
          <p class="card-text">Id do aluno: <strong><?= $aluno->idaluno ?></strong></p>
          <p class="card-text">Telefone: <strong><?= $aluno->telefone ?></strong></strong></p>
          <p class="card-text">Turma: <strong><?= $aluno->turma ?></strong></p>
          <p class="card-text">Data de nascimento <strong><?= date('d-m-Y', strtotime($aluno->nascimento)) ?></strong></p>
          <p class="card-text">Data cadastro <strong><?= date('d-m-Y -- H:i:s', strtotime($aluno->created_at)) ?></strong></p>
          <p class="card-text"><small class="text-muted"><?= (isset($aluno->updated_at) ? 'Modificado em ' . date('d-m-Y -- H:i:s', strtotime($aluno->updated_at)) : '') ?></small></p>
        </div>
      </div>
      <div class="row justify-content-end">
        <a href="<?= base_url('public//editar-aluno/' . $aluno->idaluno) ?>" class="btn btn-lg col-md-2 btn-outline-warning ml-2">Editar</a>
        <a href="<?= base_url('public//excluir-aluno/' . $aluno->idaluno) ?>" class="btn btn-lg col-md-2 btn-outline-danger ml-2">Excluir</a>
        <a href="JavaScript: window.history.back();" class="btn btn-lg col-md-4 btn-primary" >Voltar</a>
      </div>
    </div>
  </div>
</div>