<?php
include'functions.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="icon" href="favicon.ico"/>

    <title>Sistem Pakar Diagnosa Sistem Pernapasan Naive Bayes</title>
    <link href="assets/css/darkly-bootstrap.min.css" rel="stylesheet"/>
    <link href="assets/css/general.css" rel="stylesheet"/>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>           
  </head>
  <body>
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="?">Metode Bayes V1</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
          <?php if(isset($_SESSION['login']) && $_SESSION['login'] == true):?>
            <li><a href="?m=penyakit"><span class="glyphicon glyphicon-pushpin"></span> Penyakit</a></li>
            <li><a href="?m=gejala"><span class="glyphicon glyphicon-flash"></span> Gejala</a></li>
            <li><a href="?m=aturan"><span class="glyphicon glyphicon-star"></span> Aturan</a></li>
            <li><a href="?m=password"><span class="glyphicon glyphicon-lock"></span> Password</a></li>        
            <li><a href="aksi.php?act=logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>   
          <?php else:?>
            <li><a href="?m=login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          <?php endif?>   
            <li><a href="?m=konsultasi"><span class="glyphicon glyphicon-stats"></span> Konsultasi</a></li>
          </ul>          
        </div>
    </nav>
    <div class="container">
    <?php
        if(file_exists($mod.'.php')){
            if(isset($_SESSION['login']) || $mod=='login' || $mod=='konsultasi' || $mod=='thumbs'){
                include $mod.'.php';
            } else {
                redirect_js('index.php?m=login');
            }
        }else{
            include 'home.php';
        }
    ?>
    </div>
    <footer class="footer bg-primary">
      <div class="container">
          <p>
          Metode Bayes
          <span class="pull-right">
          Copyright &copy; <?= date('Y') ?> <i class="fa fa-heart pulse"></i> <b><a href="http://www.mycoding.net" target="_blank">My Coding</a></b>
          <p>
        </span>
      </div>
    </footer>
</html>