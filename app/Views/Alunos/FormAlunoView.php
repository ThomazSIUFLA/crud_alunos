<h2><?= $msg ?></h2>
<link href="<?= base_url('public/assets/css/floating-labels.css') ?>" rel="stylesheet">
<div class="container col-12">
    <div class="card bg-dark flex-md-row">
        <div class="col-md-3 mt-4">
            <div>
                <img src="<?= (isset($aluno) ?
                                base_url('public/assets/images/users') . '/' . $aluno->img :
                                base_url('public/assets/images/usuarioPadrao.png')) ?>" id="imgUp" class="img-thumbnail img-responsive" width="400" height="600" alt="foto aluno">
            </div>
        </div>
        <?php
        if (isset($aluno)) {
            echo form_open_multipart('public/editar-aluno/' . $aluno->idaluno);
        ?>
            <div class="formform-label-group">
                <input type="text" id="idaluno" name="idaluno" class="form-control" value="<?= $aluno->idaluno ?>" disabled />
                <label for="nome">ID</label>
                <input type="text" name="imgOld" id="imgOld" value="<?= base_url('public/assets/images/users') . '/' . $aluno->img ?>" hidden>
            </div>
        <?php
        } else {
            echo form_open_multipart('public/novo-aluno');
        }
        ?>

        <div class="formform-signin ">
            <div class="formform-label-group">
                <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome" required autofocus value="<?= isset($aluno) ? $aluno->nome : "" ?>">
                <label for="nome">Nome</label>
            </div>
            <div class="formform-label-group">
                <input type="text" id="matricula" name="matricula" class="form-control" onkeypress="return onlynumber();" maxlength="8" placeholder="Matricula" required value="<?= isset($aluno) ? $aluno->matricula : "" ?>">
                <label for="matricula">Matricula</label>
            </div>
            <div class="formform-label-group">

                <input class="form-control" type="tel" name="telefone" id="telefone" pattern="\([0-9]{2}\)[\s][0-9]{4,5}-[0-9]{4}" placeholder="Telefone" value="<?= isset($aluno) ? $aluno->telefone : "" ?>" />
                <label for="telefone">Telefone</label>
                <script type="text/javascript">
                    $("#telefone").mask("(##) 90000-0000");
                </script>
            </div>
            <div>
                <label for="turma">Turma</label>
                <select class="form-select" name="turma" id="turma" required value="<?= isset($aluno) ? $aluno->turma : "" ?>">
                    <option value='<?= isset($aluno) ? $aluno->turma : "" ?>'><?= isset($aluno) ? $aluno->turma : "Selecione..." ?></option>
                    <option value="1º A">1º A</option>
                    <option value="1º B">1º B</option>
                    <option value="1º C">1º C</option>
                    <option value="2º A">2º A</option>
                    <option value="2º B">2º B</option>
                    <option value="2º C">2º C</option>
                    <option value="3º A">3º A</option>
                    <option value="3º B">3º B</option>
                    <option value="3º C">3º C</option>
                </select>
            </div>
            <div>
                <label for="nascimento">Data de Nascimento</label>
                <input class="form-control" type="date" name="nascimento" id="nascimento" required value="<?= isset($aluno) ? date('Y-m-d', strtotime($aluno->nascimento)) : "" ?>">
            </div>

        </div>
        <div class="row">
            <div class="mt-2 col-md-4">
                <label for="img">Formatos .jpg.png.gif</label>
                <?php if (isset($aluno)) {
                    echo '<input class="form-control custom-file-input " onchange="previewImagem()" type="file" name="img" id="img">';
                } else {
                    echo '<input class="form-control custom-file-input" onchange="previewImagem()" type="file" name="img" id="img" required>';
                } ?>
            </div>
            <div class="col-md-2"></div>
            <div class=" mt-3 col-md-6 p-3">
                <button class="btn btn-primary btn-lg mt-4 col-md-6" value="cadastrar" type="submit"><?= $acao ?></button>
                <a class="btn btn-success btn-lg mt-4" href="<?= base_url('public/alunos') ?>" type="reset">Cancelar / Sair</a>
            </div>
        </div>
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
    function onlynumber(evt) {
   var theEvent = evt || window.event;
   var key = theEvent.keyCode || theEvent.which;
   key = String.fromCharCode( key );
   //var regex = /^[0-9.,]+$/;
   var regex = /^[0-9.]+$/;
   if( !regex.test(key) ) {
      theEvent.returnValue = false;
      if(theEvent.preventDefault) theEvent.preventDefault();
   }
}
</script>