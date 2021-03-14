<div class="album py-2 bg-danger ">
  <div class="card text-white bg-warning mb-3 mx-auto" style="max-width: 900px;">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="<?= base_url('public/assets/images/users') . '/' . $aluno->img ?>" alt="foto Aluno" width="240">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <div class="card-title bg-danger">
            <h1>DESEJA EXCLUIR O ALUNO </h1>
            <h2><?= $aluno->nome ?></h2>
          </div>
          <p class="card-text">Id do aluno: <strong><?= $aluno->idaluno ?></strong></p>
          <p class="card-text">Telefone: <strong><?= $aluno->telefone ?></strong></strong></p>
          <p class="card-text">Turma: <strong><?= $aluno->turma ?></strong></p>
          <p class="card-text">Data de nascimento <strong><?= date('d-m-Y', strtotime($aluno->nascimento)) ?></strong></p>
          <p class="card-text">Data cadastro <strong><?= date('d-m-Y -- H:i:s', strtotime($aluno->created_at)) ?></strong></p>
          <p class="card-text"><small class="text-muted"><?= (isset($aluno->updated_at) ? 'Modificado em ' . date('d-m-Y -- H:i:s', strtotime($aluno->updated_at)) : '') ?></small></p>
        </div>
      </div>

      <?= form_open('public/excluir-aluno/'.$aluno->idaluno); ?>
        <input type="text" name="id" value="<?= $aluno->idaluno ?>" hidden>
        <div class=" row justify-content-end">
          <button type="submit" href="" class="btn btn-lg col-md-2 btn-outline-danger ml-2">Excluir</button>
          <a href="JavaScript: window.history.back();" class="btn btn-lg col-md-4 btn-success ml-2">Voltar</a>
        </div>
      </form>
    </div>

  </div>

</div>