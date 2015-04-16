<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Djibs">
    <link rel="icon" href="">

    <title>Activ : Extranet du Groupe Aubrée Garages</title>

    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('styles.css') ?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
</head>

<body style="padding-top: 30px;">

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Activ</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Tableau de bord</a></li>
                <li><a href="#">Gestion de parc</a></li>
                <li><a href="#">Commerce</a></li>
                <li><a href="#">Comptabilité</a></li>
            </ul>
            <form class="navbar-form navbar-right">
                <div class="form-group">
                    <input type="text" placeholder="Identifiant" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Mot de passe" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">S'identifier</button>
            </form>
        </div>
        <!--/.navbar-collapse -->
    </div>
</nav>
<!-- /nav -->
<div class="container-fluid">

    <div class="row">
        <div class="col-sm-12">
            <?= $this->Flash->render() ?>
        </div>
        <div class="col-sm-12">
            <?= $this->fetch('content') ?>
        </div>
    </div>

</div>
<!-- /container-fluid -->

<footer class="footer hidden-xs">
    <div class="container-fluid">
        <p class="text-muted text-center">&copy; Groupe Aubrée Garages <?= date('Y'); ?></p>
    </div>
</footer>
<!-- /footer -->

<?= $this->Html->script('jquery-1.11.2.min.js') ?>
<?= $this->Html->script('bootstrap.min.js') ?>
<?= $this->fetch('script') ?>
</body>
</html>
