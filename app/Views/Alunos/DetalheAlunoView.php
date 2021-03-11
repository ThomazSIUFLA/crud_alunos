<?= $this->include('Header', array('titulo')) ?>
    <div>
    <h1>Detalhes do aluno</h1>
    </div>
    <div class="card mb-4" style="width: 740px;">
  <div class="row g-0 ml-3">
    <div class="col-md-3" style="display:flex; margin-right:10px;">
      <img src="<?php echo base_url("assets/images/aluno$aluno->idaluno.jpg")?>" alt="foto Aluno">
    </div>
    <div class="col-md-8" style="margin-left: 20px;" >
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
<div>
<a href="<?=base_url('/editar-aluno/'.$aluno->idaluno)?>" class="btn btn-warning">Editar</a>
<a href="#" class="btn btn-danger">Excluir</a>
<a href="JavaScript: window.history.back();" class="btn btn-primary" style="width: 10rem;">Voltar</a>
</div>

<?= $this->include('Footer') ?>