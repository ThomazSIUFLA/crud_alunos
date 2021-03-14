<h2><?= $msg ?></h2>
<link href="<?= base_url('public/assets/css/floating-labels.css') ?>" rel="stylesheet">
<div class="container col-12">
    <div class="text-center mb-4">
        <h1 class="h3 mb-3 font-weight-normal">Cadastrar Novo aluno</h1>
    </div>
    <div class="justify-content-start col-md-3 mt-4">
        <div>
            <img src="<?= base_url('public/assets/images/usuarioPadrao.png') ?>" id="imgUp" class="img-thumbnail img-responsive" width="400" height="600" alt="foto aluno">
        </div>
    </div>
    <?php
    $atributos = array(
        "class" => "formform-signin"
    );
    echo form_open_multipart('public/novo-aluno', $atributos); ?>
    <div class="formform-label-group">
        <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome" required autofocus>
        <label for="nome">Nome</label>
    </div>
    <div class="formform-label-group">
        <input type="number" id="matricula" name="matricula" class="form-control" placeholder="Matricula" required>
        <label for="matricula">Matricula</label>
    </div>
    <div class="formform-label-group">

        <input class="form-control" type="tel" name="telefone" id="telefone" pattern="\([0-9]{2}\)[\s][0-9]{4,5}-[0-9]{4}" placeholder="Telefone" />
        <label for="telefone">Telefone</label>
        <script type="text/javascript">
            $("#telefone").mask("(##) 90000-0000");
        </script>
    </div>
    <div>
        <label for="turma">Turma</label>
        <select class="form-select" name="turma" id="turma" required>
            <option value=''>Selecione...</option>
            <option value="1-a">1º A</option>
            <option value="1-b">1º B</option>
            <option value="1-c">1º C</option>
            <option value="2-a">2º A</option>
            <option value="2-a">2º B</option>
            <option value="2-a">2º C</option>
            <option value="2-a">3º A</option>
            <option value="2-a">3º B</option>
            <option value="2-a">3º C</option>
        </select>
    </div>
    <div>
        <label for="nascimento">Data de Nascimento</label>
        <input class="form-control" type="date" name="nascimento" id="nascimento" required>
    </div>
    <div class="mt-2">
        <label for="img">Formatos .jpg.png.gif</label>
        <input class="form-control" onchange="previewImagem()" type="file" name="img" id="img" required>
    </div>
    <div class="btn-group btn-goup-lg mr-2 justify-content-end">
        <a class="btn btn-success btn-lg mt-4" type="reset">Cancelar</a>
        <a class="btn btn-success btn-lg mt-4" type="reset">Limpar</a>
        <button class="btn btn-primary btn-lg mt-4 col-md-6" value="cadastrar" type="submit"><?= $acao ?></button>
    </div>
    </form>
</div>
<script>
    function previewImagem() {
        var img = document.querySelector('input[name=img]').files[0];
        var preview = document.querySelector('[id=imgUp]')
        var reader = new FileReader();
        reader.onloadend = function() {
            preview.src = reader.result;
        }

        if (img) {
            reader.readAsDataURL(img);
        } else {
            preview.src = "";
        }
    }
</script>