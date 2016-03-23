<!DOCTYPE html>
<html lang="pt-br" ng-app="Sport">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= $title; ?></title>
        <link href="<?= base_url('css/bootstrap.css')?>" rel="stylesheet">
        <link href="<?= base_url('css/style.css')?>" rel="stylesheet">
    </head>
    <body ng-controller="SportCtrl">
        <div id="content">
            <header class="header">
                <nav class="navbar navbar-inverse">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li><a class="navbar-brand item-menu" href="#">Link </a></li>
                                <li><a class="navbar-brand item-menu" href="#">Link </a></li>
                                <li><a class="navbar-brand item-menu" href="#">Link </a></li>
                                <li><a class="navbar-brand item-menu" href="#">Link </a></li>
                                <li><a class="navbar-brand item-menu" href="#">Link </a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
            <main>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 jumbotron">
                            <p>Dentro desta linha tem esta coluna de 12</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 jumbotron">
                            <p>Dentro desta linha tem esta coluna de 6</p>
                        </div>
                        <div class="col-md-6 jumbotron">
                            <p>Dentro desta linha tem esta coluna de 6</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 jumbotron">
                            <p>Dentro desta linha tem esta coluna de 4</p>
                        </div>
                        <div class="col-md-4 jumbotron">
                            <p>Dentro desta linha tem esta coluna de 4</p>
                        </div>
                        <div class="col-md-4 jumbotron">
                            <p>Dentro desta linha tem esta coluna de 4</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 jumbotron">
                            <p>Dentro desta linha tem esta coluna de 3</p>
                        </div>
                        <div class="col-md-3 jumbotron">
                            <p>Dentro desta linha tem esta coluna de 3</p>
                        </div>
                        <div class="col-md-3 jumbotron">
                            <p>Dentro desta linha tem esta coluna de 3</p>
                        </div>
                        <div class="col-md-3 jumbotron">
                            <p>Dentro desta linha tem esta coluna de 3</p>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="footer">
                <p class="text-center">Aqui fica o rodapé</p>
            </footer>
        </div>
        <script src="<?= base_url('js/angular.min.js')?>"></script>
        <script src="<?= base_url('js/app.js')?>"></script>
        <script src="<?= base_url('js/controller/sportCtrl.js')?>"></script>
    </body>
</html>