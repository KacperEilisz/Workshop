<?php
require_once dirname(__FILE__).'/../config.php'; // Ładujemy konfigurację (ustawia Smarty itp.)
require_once _ROOT_PATH.'/app/control/CalcCtrl.class.php'; // Ładujemy klasę kontrolera

// Tworzymy obiekt kontrolera
$ctrl = new CalcCtrl();

// Wywołujemy główną metodę kontrolera
$ctrl->process();