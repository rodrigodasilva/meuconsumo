<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="pt-br"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MeuConsumo - Excluir usuário</title>
  <meta name="description" content="MeuConsumo">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="assets/css/normalize.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/themify-icons.css">
  <link rel="stylesheet" href="assets/css/flag-icon.min.css">
  <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
  <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
  <link rel="stylesheet" href="assets/scss/style.css">
  <link rel="stylesheet" href="assets/css/estilo-pessoal.css">

  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

  <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>

<?php
//Inclui a barra lateral através do arquivo php
include 'barra-lateral.php';
 ?>

<!-- Right Panel -->
<div id="right-panel" class="right-panel">

  <div class="breadcrumbs barra-superior">
    <div class="col-sm-12">
      <div class="page-header float-left" style="padding-left: 0px">
        <div class="page-title">
          <h1>Excluir Usuário</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="content mt-3">
    <div class="animated fadeIn">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
              <div class="card-body">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Usuário</th>
                      <th scope="col">Email</th>
                      <th scope="col">Nível de acesso</th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>joao</td>
                      <td>joao@teste.com</td>
                      <td>user</td>
                      <td>
                        <button class="btn btn-danger btn-sm botao">Excluir</button>
                        <button class="btn btn-info btn-sm botao">Editar</button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
        </div><!-- /# column -->
      </div>
    </div><!-- .animated -->
  </div><!-- .content -->
</div><!-- Fim do painel direito -->

<script src="assets/js/lib/jquery/jquery.min.js"></script>
<script src="assets/js/lib/bootstrap/popper.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>
<!--  Amchart  -->
<script src="assets/js/lib/chart-amchart/amcharts.js"></script>
<script src="assets/js/lib/chart-amchart/serial.js"></script>
<script src="assets/js/lib/chart-amchart/relatoriomensal.js"></script>
<script src="assets/js/lib/chart-amchart/light.js"></script>

</body>
</html>
