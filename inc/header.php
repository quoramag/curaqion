<?php require 'config.php' ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>
        <?php if (isset($title)) {
            echo $title.' - curaqion.';
        } else {
            echo "curaqion.";
        } ?>
    </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="<?php echo $rootpath ?>/css/normalize.css">
    <link rel="stylesheet" href="<?php echo $rootpath ?>/css/main.css">
    <link rel="stylesheet" href="<?php echo $rootpath ?>/css/custom.css">
    <link rel="stylesheet" href="<?php echo $rootpath ?>/css/issues.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <script src="<?php echo $rootpath ?>/js/vendor/modernizr-2.6.1.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo $rootpath ?>/js/vendor/jquery-1.8.0.min.js"><\/script>')</script>
    <script src="j<?php echo $rootpath ?>/js/plugins.js"></script>
    <script src="<?php echo $rootpath ?>/js/main.js"></script>
    <script type="text/javascript" src="//use.typekit.net/vlb5bib.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
</head>
<body>
    <!--[if lt IE 7]>
        <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
    <![endif]-->
    <header>
        <p id="brand"><a href="<?php echo $rootpath ?>">curaqion</a></p>
    </header>

    <div id="content" class="wrap">