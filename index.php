<?php
date_default_timezone_set('Europe/Paris');

spl_autoload_register(function ($className) {
    include './classes/' . $className . '.php';
});

require_once './functions/autoLoadFunction.php';
autoLoadFunction();
require_once './includes/head.php';
require_once './includes/main.php';
require_once './includes/footer.php';
