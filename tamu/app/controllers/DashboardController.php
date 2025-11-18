<?php
require_once 'config/database.php';
require_once 'app/models/TamuModel.php';

class DashboardController {
    private $tamuModel;
    
    public function __construct() {
        $database = new Database();
        $db = $database->koneksi();
        $this->tamuModel = new TamuModel($db);
    }
    
    public function index() {
        $this->cekLogin();
        
        $total_tamu = $this->tamuModel->hitungTotalTamu();
        $tamu_hari_ini = $this->tamuModel->hitungTamuHariIni();
        $tamu_bulan_ini = $this->tamuModel->hitungTamuBulanIni();
        
        require_once 'app/views/dashboard.php';
    }
    
    private function cekLogin() {
        if (!isset($_SESSION['user_id'])) {
            header("Location: index.php?action=login");
            exit();
        }
    }
}
?>