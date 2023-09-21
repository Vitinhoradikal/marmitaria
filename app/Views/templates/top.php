<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marmitaria</title>
</head>
<body>
<nav class="navbar bg-primary" data-bs-theme="dark">

<div class="container-fluid">
  <a class="navbar-brand" href="<?= site_url('Home/index')?>">MARMITARIA</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="<?= site_url('Home/index')?>">Pedidos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= site_url('Clientes/todososclientes') ?>">Clientes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= site_url('Produtos/todososprodutos') ?>">Produtos</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Dropdown link
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="<?= site_url('Produtos/todososprodutos') ?>">Produtos</a></li>
          <li><a class="dropdown-item" href="#">2</a></li>
          <li><a class="dropdown-item" href="#">3</a></li>
        </ul>
      </li>
    </ul>
  </div>
</div>
</nav>
<div class="row">
  <div class="col-12 p-3"><p></p></div>
</div>
