<?= $this->include('Header', array('titulo')) ?>
<h2 class="title"><?=$titulo?></h2>
<a class="badge bg-primary text-wrap" style="width: 10rem;" href="<?= base_url('/novo-aluno') ?>">+ Inserir novo aluno</a>

<table class="table table-dark table-hover">
<thead>
<th>Id</th>
<th>Nome</th>
<th>Matrícula</th>
<th>Telefone</th>
<th>Turma</th>
<th>Data Nascimento</th>
<th>Data Cadastro</th>
<th>Última atualização</th>
</thead>
<?php foreach ($alunos as $aluno) :?>
<tr tabindex="0" style="cursor: Pointer;" onclick="location.href = '<?= base_url('/alunos/'.$aluno->idaluno) ?>';">
<td><?= $aluno->idaluno ?></td>
<td> <?= $aluno->nome ?></td>
<td> <?= $aluno->matricula ?></td>
<td> <?= $aluno->telefone ?></td>
<td> <?= $aluno->turma ?></td>
<td> <?= $aluno->nascimento ?></td>
<td> <?= $aluno->created_at ?></td>
<td> <?= $aluno->updated_at ?></td>
</tr>
</a>
<?php endforeach?>
</table>
<?= $this->include('Footer') ?>