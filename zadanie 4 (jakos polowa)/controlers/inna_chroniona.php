<?php
// Ładujemy konfigurację oraz autoload (Smarty, funkcje itp.)
require_once dirname(__FILE__) . '/../config.php'; // Plik config.php z definicjami

// Sprawdzamy, czy użytkownik jest zalogowany
if (!isset($_SESSION['user'])) {
    header('Location: ' . _APP_URL . '/controlers/login.php'); // Jeśli nie, przekierowujemy do logowania
    exit;
}

// Przekazujemy dane do widoku
$smarty->assign('app_root', _APP_ROOT);

// Wyświetlamy widok chronionej strony
$smarty->display('InnaView.tpl');