<?php
// Załadowanie plików konfiguracyjnych oraz klas pomocniczych
require_once _ROOT_PATH . '/app/forms/CalcForm.class.php';
require_once _ROOT_PATH . '/app/lib/CalcResult.class.php';
require_once _ROOT_PATH . '/app/lib/Messages.class.php';

class CalcCtrl {
    private $form;
    private $msgs;

    public function __construct() {
        // Tworzymy obiekt formularza i obiekt wiadomości
        $this->form = new CalcForm();
        $this->msgs = new Messages();

        // Jeśli użytkownik nie jest zalogowany, przekierowujemy go do logowania
        if (!isset($_SESSION['user'])) {
            header('Location: ' . _APP_URL . '/controlers/login.php');
            exit;
        }

        // Sprawdzamy, czy użytkownik jest adminem czy userem
        $role = $_SESSION['role']; // Admin lub user

        // Jeśli formularz został wysłany
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Pobieramy dane z formularza
            $this->form->kwota = $_POST['kwota'];
            $this->form->procent = $_POST['procent'];
            $this->form->okres = $_POST['okres'];

            // Walidacja danych (np. sprawdzanie, czy procent jest większy niż 5, jeśli użytkownik to 'user')
            if ($role == 'user' && $this->form->procent < 5) {
                $this->msgs->addError('Użytkownicy muszą mieć procent kredytu większy lub równy 5%.');
            }

            // Jeśli dane są poprawne, wykonujemy obliczenia
            if (empty($this->msgs->getErrors())) {
                // Tutaj możesz dodać logikę obliczania kredytu, jeśli formularz jest poprawny
                $result = new CalcResult();
                $result->calculate($this->form->kwota, $this->form->procent, $this->form->okres);

                // Przypisujemy wynik do Smarty
                $smarty->assign('result', $result->getResult());
            }
        }

        // Przypisujemy dane do widoku Smarty
        $smarty->assign('form', $this->form);
        $smarty->assign('msgs', $this->msgs);
        $smarty->display('CalcView.tpl');
    }
}