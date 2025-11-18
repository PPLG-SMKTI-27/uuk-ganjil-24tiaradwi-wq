<?php
require_once 'config/database.php';
require_once 'app/models/UserModel.php';

class AuthController {
    private $userModel;
    
    public function __construct() {
        // Buat koneksi database dulu
        $database = new Database();
        $db = $database->koneksi();
        $this->userModel = new UserModel($db);
    }
    
    public function login() {
        if(isset($_SESSION['user_id'])) {
            header("Location: index.php?action=dashboard");
            exit();
        }
        require_once 'app/views/login.php';
    }
    
    public function prosesLogin() {
        if ($_POST) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            
            $user = $this->userModel->cekLogin($username, $password);
            
            if ($user) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['nama_lengkap'] = $user['nama_lengkap'];
                $_SESSION['role'] = $user['role'];
                
                header("Location: index.php?action=dashboard");
            } else {
                $_SESSION['error'] = "Username atau password salah!";
                header("Location: index.php?action=login");
            }
        }
    }
    
    public function logout() {
        session_destroy();
        header("Location: index.php?action=login");
    }
}
?>