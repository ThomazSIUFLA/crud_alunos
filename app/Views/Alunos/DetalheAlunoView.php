<div class="album py-2 bg-dark ">
<div class="card text-white bg-info mb-3 mx-auto" style="max-width: 900px;">
  <div class="row no-gutters">
    <div class="col-md-4">
    <img src="<?= base_url('public/assets/images/users').'/'.$aluno->img?>" alt="foto Aluno" width="240">
    </div>
    <div class="col-md-8">
      <div class="card-body">
      <h3 class="card-title"><strong><?= $aluno->nome ?></strong></h3>
        <p class="card-text">Id do aluno: <strong><?= $aluno->idaluno ?></strong></p>
        <p class="card-text">Telefone: <strong><?= $aluno->telefone ?></strong></strong></p>
        <p class="card-text">Turma: <strong><?= $aluno->turma ?></strong></p>
        <p class="card-text">Data de nascimento <strong><?= $aluno->nascimento ?></strong></p>
        <p class="card-text">Data cadastro <strong><?= $aluno->created_at ?></strong></p>
        <p class="card-text"><small class="text-muted"><?= (isset($aluno->updated_at) ? 'Modificado em '. $aluno->updated_at : '')?></small></p>
      </div>
    </div>
  </div>
</div>
<div class="d-flex justify-content-end">
<a href="<?=base_url('public//editar-aluno/'.$aluno->idaluno)?>" class="btn btn-outline-warning ml-2">Editar</a>
<a href="#" class="btn btn-outline-danger ml-2">Excluir</a>
<a href="JavaScript: window.history.back();" class="btn btn-primary" style="width: 10rem;">Voltar</a>
</div>
</div>
