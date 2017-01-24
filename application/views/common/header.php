<!DOCTYPE html>
<html>
    <head>
        <?= meta('UTF-8', '', 'charset'); ?>
        <?= meta("X-UA-Compatible", "IE=edge", 'http-equiv'); ?>
        <?= meta("viewport", "width=device-width, initial-scale=1"); ?>
        <title><?= $title ?></title>
        <?= link_tag("assets/css/bootstrap.min.css"); ?>
        <?= link_tag("assets/css/bootstrap-theme.min.css"); ?>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <header>
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main_nav" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <?= anchor('index', "Loliveserious", ['class' => "navbar-brand"]); ?>
                    </div>
                    <div class="collapse navbar-collapse" id="main_nav">
                        <ul class="nav navbar-nav">
                            <li><?= anchor('index', "Accueil"); ?></li>
                            <li><?= anchor('blog/index', "Blog"); ?></li>
                            <li><?= anchor('apropos', "À propos"); ?></li>
                            <li><?= anchor('contact', "Contact"); ?></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <?php if ($this->auth_user->is_connected): ?>
                                <li><?= anchor('deconnexion', "Déconnexion"); ?></li>
                            <?php else: ?>
                                <li><?= anchor('connexion', "Connexion"); ?></li>
                            <?php endif; ?>
                        </ul>
                        <?php if ($this->auth_user->is_connected): ?>
                            <p class="navbar-text navbar-right">|</p>
                            <p class="navbar-text navbar-right">Bienvenue <strong><?= $this->auth_user->username; ?></strong></p>
                        <?php endif; ?>
                    </div>
                </div>
            </nav>
        </header>
