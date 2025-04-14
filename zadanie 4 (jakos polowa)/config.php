<?php
// Bezpieczne definiowanie stałych
if (!defined('_ROOT_PATH')) define('_ROOT_PATH', dirname(__FILE__));
if (!defined('_APP_ROOT')) define('_APP_ROOT', '');
if (!defined('_SERVER_NAME')) define('_SERVER_NAME', 'localhost:80');
if (!defined('_SERVER_URL')) define('_SERVER_URL', 'http://'._SERVER_NAME);
if (!defined('_APP_URL')) define('_APP_URL', _SERVER_URL._APP_ROOT);

// Ładowanie Smarty 5
require_once _ROOT_PATH.'/app/lib/Smarty/libs/Smarty.class.php';
$smarty = new Smarty\Smarty();

// Konfiguracja katalogów Smarty
$smarty->setTemplateDir(_ROOT_PATH.'/app/view');  // Zmieniono na odpowiednią ścieżkę
$smarty->setCompileDir(_ROOT_PATH.'/templates_c');

// Przekazanie podstawowych zmiennych do szablonów
$smarty->assign('app_url', _APP_URL);
$smarty->assign('app_root', _APP_ROOT);

// Funkcja pomocnicza
function out(&$param){
    if (isset($param)){
        echo $param;
    }
}
?>