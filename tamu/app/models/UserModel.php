<?php
class UserModel {
    protected $db;
    
    public function __construct($db) {
        $this->db = $db;
    }
    
    public function cekLogin($username, $password) {
        $query = "SELECT * FROM users WHERE username = ? AND password = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$username, $password]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>