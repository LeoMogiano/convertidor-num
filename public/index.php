<?php
require_once('../app/controllers/CHome.php');
/* require_once('../app/models/Context.php'); */
require_once('../app/models/Proxy.php');


if ($_SERVER['REQUEST_METHOD'] == 'GET' && $_SERVER['REQUEST_URI'] == '/') {
    $home = new CHome();
    $home->index();
    return;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_SERVER['REQUEST_URI'] == '/conversor') {
    if (isset($_POST['num']) && isset($_POST['base'])) {

        $num = $_POST['num'];
        $base = $_POST['base'];

        $proxy = new Proxy();
        $proxy->conversionNumerica($_POST['num'], $_POST['base']);

        return;
    }
}
