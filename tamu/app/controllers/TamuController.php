<?php
require_once 'config/database.php';
require_once 'app/models/TamuModel.php';

class TamuController {
    private $tamuModel;
    
    public function __construct() {
        $database = new Database();
        $db = $database->koneksi();
        $this->tamuModel = new TamuModel($db);
    }
    
    public function index() {
        $this->cekLogin();
        $data_tamu = $this->tamuModel->ambilSemuaTamu();
        require_once 'app/views/tamu_list.php';
    }
    
    public function tambah() {
        $this->cekLogin();
        require_once 'app/views/tamu_tambah.php';
    }
    
    public function simpan() {
        $this->cekLogin();
        
        if ($_POST) {
            $data = [
                $_POST['nama_tamu'],
                $_POST['asal_instansi'],
                $_POST['no_telepon'],
                $_POST['jenis_tamu'],
                $_POST['tanggal_kunjungan'],
                $_POST['tujuan_kunjungan'],
                $_POST['bertemu_dengan']
            ];
            
            if ($this->tamuModel->tambahTamu($data)) {
                $_SESSION['pesan'] = "Data tamu berhasil ditambahkan!";
                header("Location: index.php?action=tamu");
            } else {
                $_SESSION['error'] = "Gagal menambahkan data tamu!";
                header("Location: index.php?action=tamu_tambah");
            }
        }
    }
    
    public function edit($id) {
        $this->cekLogin();
        $tamu = $this->tamuModel->ambilTamuById($id);
        
        if ($tamu) {
            require_once 'app/views/tamu_edit.php';
        } else {
            $_SESSION['error'] = "Data tamu tidak ditemukan!";
            header("Location: index.php?action=tamu");
        }
    }
    
    public function update($id) {
        $this->cekLogin();
        
        if ($_POST) {
            $data = [
                $_POST['nama_tamu'],
                $_POST['asal_instansi'],
                $_POST['no_telepon'],
                $_POST['jenis_tamu'],
                $_POST['tanggal_kunjungan'],
                $_POST['tujuan_kunjungan'],
                $_POST['bertemu_dengan']
            ];
            
            if ($this->tamuModel->updateTamu($id, $data)) {
                $_SESSION['pesan'] = "Data tamu berhasil diupdate!";
                header("Location: index.php?action=tamu");
            } else {
                $_SESSION['error'] = "Gagal mengupdate data tamu!";
                header("Location: index.php?action=tamu_edit&id=" . $id);
            }
        }
    }
    
    public function hapus($id) {
        $this->cekLogin();
        
        if ($this->tamuModel->hapusTamu($id)) {
            $_SESSION['pesan'] = "Data tamu berhasil dihapus!";
        } else {
            $_SESSION['error'] = "Gagal menghapus data tamu!";
        }
        header("Location: index.php?action=tamu");
    }
    
    private function cekLogin() {
        if (!isset($_SESSION['user_id'])) {
            header("Location: index.php?action=login");
            exit();
        }
    }
}
?>