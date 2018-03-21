<?php
ini_set('display_errors',1);
$GLOBALS['config'] = array (
    'mysql' => array (
        'username' => 'root',
        'password' => '12345678',
        'database' => 'thuctapPHP',
        'host' => 'thuctapphp.com'
    )
);
// Autoloading with Composer
require_once('../vendor/autoload.php');
require_once('Loader.php');
//Load Smarty
require_once('./smarty/Smarty.class.php');
$expected_controllers = array ( 'index', 'home' );
$_GET['controller'] = 'home';
if(!empty($_GET)) {
    if(in_array($_GET['controller'], $expected_controllers )) {
        $controller = new Loader($_GET);
        $controller = $controller->createController();
        $controller->executeAction();
    }
}
?>