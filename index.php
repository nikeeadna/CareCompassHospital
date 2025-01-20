<?php
require_once './src/config/database.php';
require_once './src/controllers/UserController.php';
require_once './src/controllers/AppointmentController.php';
require_once './src/controllers/PaymentController.php';

$page = $_GET['page'] ?? 'home';

switch ($page) {
    case 'login':
        $controller = new UserController();
        $controller->login();
        break;

    case 'schedule-appointment':
        $controller = new AppointmentController();
        $controller->create();
        break;

    case 'process-payment':
        $controller = new PaymentController();
        $controller->process();
        break;

    default:
        include __DIR__ . '/public/index.html';
}
?>

