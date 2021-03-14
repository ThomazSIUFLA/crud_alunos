<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $titulo ?></title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
</head>

<body style="background-color: #ADD8E6; font-size: 1.6rem;">
  <nav class="container-fluid navbar navbar-expand navbar-dark bg-dark mb-4">
    <a class="navbar-brand" href="<?= base_url('public/') ?>"><img src="<?= base_url('public/assets/images/logo.png') ?>" alt="logo" width="100"></a>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link active" href="<?= base_url('/') ?>">Home </a>
        <a class="nav-item nav-link" href="<?= base_url('public/alunos') ?>">Lista de alunos</a>
        <a class="nav-item nav-link" href="<?= base_url('public/novo-aluno') ?>">Inserir aluno</a>
      </div>
    </div>
  </nav>
  <div class="text-center text-success">
    <h2><?= $titulo ?></h2>
  </div>
  <main class="container"  role="main">