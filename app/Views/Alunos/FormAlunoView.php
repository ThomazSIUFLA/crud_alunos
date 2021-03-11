<?= $this->include('Header', array('titulo')) ?>
    <h2><?=$titulo?></h2>
    <a class="badge bg-primary text-wrap" style="width: 10rem;" href="<?= base_url('/alunos') ?>">Lista de alunos</a>
    <h2><?=$msg?></h2>
    <form method="post">
    <p>Número da matrícula</p>
    <input type="text" name="matricula" id="matricula" required>
    <p>Nome</p>
    <input type="text" name="nome" id="nomeAluno" required>
    <p>Telefone</p>
    <input type="text" name="telefone" id="telefone" required>
    <p>Turma</p>
    <select name="turma" id="turma" required>
    <option value=''>Selecione...</option>
    <option value="1-a">1º A</option>
    <option value="1-b">1º B</option>
    <option value="1-c">1º C</option>
    <option value="2-a">2º A</option>
    <option value="2-a">2º B</option>
    <option value="2-a">2º C</option>
    </select>
    <p>Data de Nascimento</p>
    <input type="date" name="nascimento" id="nascimento" required>
    <button type="submit"><?=$acao?></button>
    </form>


<?= $this->include('Footer') ?>