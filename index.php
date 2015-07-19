<?php session_start('short_url'); ?><!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8" />
<title> Encurtador de URL com migre.me </title>

<!--
    by Fernando Moreira <nandomoreira.me@gmail.com>
-->

<!-- Bootstrap 3 -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<style>
body {
    padding-top: 25px;
}
#main > .container {
    max-width: 600px;
    margin: 0 auto;
}
.page-header {
    font-size: 1.8em;
}
</style>
</head>
<body>
    <div id="main">

        <div class="container">
            <h1 class="page-header">Fazer encurtador de url com PHP e migre.me</h1>

            <?php
            include_once "short-url.php";
            $urlAntes = "http://nandomoreira.me/2012/12/22/fazer-encurtador-de-url-com-php-e-migre-me/";

            if(!isset($_SESSION['shorturl']) || empty($_SESSION['shorturl'])) {
                $url      = shortURL($urlAntes);
                $_SESSION['shorturl'] = $url;
            }

            $shorturl = $_SESSION['shorturl'];
            ?>

            <p>URL Normal: <a href="<?php echo $urlAntes; ?>"><?php echo $urlAntes; ?></a> </p>
            <p>URL Curta: <a href="<?php echo $shorturl; ?>"><?php echo $shorturl; ?></a></p>

            <hr>

            <p><strong>No botão do twitter:</strong></p>
            <a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo $shorturl; ?>" data-text="Demo tutorial - Fazer encurtador de url com PHP e migre.me" data-via="nando_dev" data-hashtags="demo">Tweet</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

            <hr>

            <p><strong>No botão do Facebook:</strong></p>
            <div class="fb-like" data-href="<?php echo $shorturl; ?>" data-send="true" data-width="450" data-show-faces="true"></div>

            <hr>
            <div class="alert alert-info">
                <strong>Importante:</strong> toda vez que essa função for chamada ela irá gerar uma URL nova, então para os botões do twitter e do facebook chame apenas 1 (uma) vez a função e armazene o resultado. As redes sociais armazenam a URL para fazer a contagem.
            </div>
            <hr>

            <a href="<?php echo $urlAntes; ?>" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-arrow-left"></span> Voltar ao tutorial</a>
            <a href="https://app.box.com/s/shckg2la8m9ydmnpr28d" class="btn btn-success btn-lg pull-right"><span class="glyphicon glyphicon-download-alt"></span> Download</a>

        </div>

    </div>

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1&appId=433482833379549";
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
</body>
</html><!-- by nando_dev -->