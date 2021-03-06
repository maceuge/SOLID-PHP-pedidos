<?php

require_once ("./support.php");

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <title>Document</title>

    <style>
        .navbar-default .navbar-brand {
            color: #33a3ff;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">ShoppingCart</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
<!--                <li class="active"><a href="#">Lista de Productos</a></li>-->
                <li><a href="#">Lista de Productos</a></li>
                <li><a href="#">Carrito</a></li>
            </ul>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Buscar Producto">
                </div>
                <button type="submit" class="btn btn-default">Buscar</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
<!--                <li><a href="#">Link</a></li>-->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Operacional <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="index.php?page=createcategory">Nueva Categoria</a></li>
                        <li><a href="#">Cargar Producto</a></li>
                        <li><a href="#">Ver Productos</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Salir</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>


<div class="container">
    <div class="row">
        <div class="col-md-12">

           <?php $pageSecction->showSectionInTemplate(); ?>

        </div>
    </div>
</div>


<script type="text/javascript" src="./js/jquery-2.2.3.js"></script>
<script type="text/javascript" src="./js/bootstrap.js"></script>
</body>
</html>
