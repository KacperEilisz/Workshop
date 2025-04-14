<?php
// Ładujemy konfigurację oraz autoload (Smarty, funkcje itp.)
require_once dirname(__FILE__) . '/../config.php'; // Plik config.php z definicjami
require_once _ROOT_PATH . '/app/lib/Messages.class.php';

// Jeśli użytkownik jest już zalogowany, przekierowujemy go na stronę kalkulatora
if (isset($_SESSION['user'])) {
    header('Location: ' . _APP_URL . '/controlers/calc.php');
    exit;
}

// Tworzymy obiekt wiadomości do przesyłania błędów
$msgs = new Messages();

// Sprawdzamy, czy zostały wysłane dane z formularza
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Tworzymy obiekt formularza logowania
    $login = $_POST['login'];
    $pass = $_POST['pass'];

    // Sprawdzamy poprawność danych
    if (empty($login) || empty($pass)) {
        $msgs->addError('Login i hasło są wymagane.');
    } else {
        // Prosta logika logowania - sprawdzenie loginu i hasła
        if (($login == 'admin' && $pass == 'admin') || ($login == 'user' && $pass == 'user')) {
            // Zapisujemy sesję
            $_SESSION['user'] = $login;
            $_SESSION['role'] = ($login == 'admin') ? 'admin' : 'user'; // Przechowujemy rolę

            // Przekierowanie do kalkulatora po zalogowaniu
            header('Location: ' . _APP_URL . '/controlers/calc.php');
            exit;
        } else {
            $msgs->addError('Niepoprawny login lub hasło.');
        }
    }
}

// Przekazujemy dane do widoku
$smarty->assign('msgs', $msgs);

// Wyświetlamy widok logowania
$smarty->display('LoginView.tpl');