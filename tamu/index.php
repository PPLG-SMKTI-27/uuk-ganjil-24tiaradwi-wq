<?php
session_start();

// Load config database di awal
require_once 'config/database.php';

// Routing sederhana
$action = isset($_GET['action']) ? $_GET['action'] : 'login';

switch($action) {
    case 'login':
        require_once 'app/controllers/AuthController.php';
        $controller = new AuthController();
        $controller->login();
        break;
        
    case 'proses_login':
        require_once 'app/controllers/AuthController.php';
        $controller = new AuthController();
        $controller->prosesLogin();
        break;
        
    case 'dashboard':
        require_once 'app/controllers/DashboardController.php';
        $controller = new DashboardController();
        $controller->index();
        break;
        
    case 'tamu':
        require_once 'app/controllers/TamuController.php';
        $controller = new TamuController();
        $controller->index();
        break;
        
    case 'tamu_tambah':
        require_once 'app/controllers/TamuController.php';
        $controller = new TamuController();
        $controller->tambah();
        break;
        
    case 'tamu_simpan':
        require_once 'app/controllers/TamuController.php';
        $controller = new TamuController();
        $controller->simpan();
        break;
        
    case 'tamu_edit':
        require_once 'app/controllers/TamuController.php';
        $controller = new TamuController();
        $controller->edit($_GET['id']);
        break;
        
    case 'tamu_update':
        require_once 'app/controllers/TamuController.php';
        $controller = new TamuController();
        $controller->update($_GET['id']);
        break;
        
    case 'tamu_hapus':
        require_once 'app/controllers/TamuController.php';
        $controller = new TamuController();
        $controller->hapus($_GET['id']);
        break;
        
    case 'logout':
        require_once 'app/controllers/AuthController.php';
        $controller = new AuthController();
        $controller->logout();
        break;
        
    default:
        echo "Halaman tidak ditemukan!";
        break;
}
?>