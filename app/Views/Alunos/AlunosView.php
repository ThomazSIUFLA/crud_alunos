<div class="alert alert-warning alert-dismissible fade show">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</div>

<div class="table-responsive" style="max-height:400px; overflow-x:auto;">
<?php

if(!$alunos){?>
    <table class="table table-dark table-hover">
        <thead class="header" style="overflow-y: auto; height: 100px;" >
        <th class="text-center">
        NÃO EXISTE ALUNO CADASTRADO!!!!
        </th>
        </thead>
        <tbody>
            <tr>
                <td class="row">
                    <div class="col-md-2"></div>
                    <h3 class="text-warning text-lg-right col-md-6"> Clique aqui para cadastrar</h3>
                    <a class="btn btn-lg btn-info col-md-2" href="<?= base_url('public/novo-aluno') ?>">
                    Cadastrar
                </a>
                </td>

            </tr>
        </tbody>
    </table>
    <?php
} else { ?>
    <table class="table table-dark table-hover">
        <thead class="header" style="overflow-y: auto; height: 100px;" >
            <th>Foto</th>
            <th>Id</th>
            <th>Nome</th>
            <th>Matrícula</th>
            <th>Telefone</th>
            <th>Turma</th>
            <th>Data Nascimento</th>
        </thead>
        <?php foreach ($alunos as $aluno) : ?>
            <tr tabindex="0" style="cursor: Pointer;" class="rowAluno" data-toggle="tooltip" 
            data-placement="bottom" title="clique para ver detalhes"
            onclick="location.href = '<?= base_url('public/alunos/' . $aluno->idaluno) ?>';">
                <td><img src="<?= base_url('public/assets/images/users').'/'.$aluno->img?>" alt="foto" width="60" height="80"></td>
                <td><?= $aluno->idaluno ?></td>
                <td> <?= $aluno->nome ?></td>
                <td> <?= $aluno->matricula ?></td>
                <td> <?= $aluno->telefone ?></td>
                <td> <?= $aluno->turma ?></td>
                <td> <?= date('d-m-Y',strtotime($aluno->nascimento))?></td>
            </tr>
            </a>
        <?php endforeach ?>
    </table>
<?php 
}
?>    
</div>
