<table >

</table>
<div class="table-responsive" style="max-height:400px; overflow-x:auto;">
    <table class="table table-dark table-hover">
        <!-- se estiver usando bootstrap coloque a classe table -->
        <thead class="header" style="overflow-y: auto; height: 100px; ">
            <th>Foto</th>
            <th>Id</th>
            <th>Nome</th>
            <th>Matrícula</th>
            <th>Telefone</th>
            <th>Turma</th>
            <th>Data Nascimento</th>
        </thead>
        <?php foreach ($alunos as $aluno) : ?>
            <tr tabindex="0" style="cursor: Pointer;" onclick="location.href = '<?= base_url('public/alunos/' . $aluno->idaluno) ?>';">
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
</div>