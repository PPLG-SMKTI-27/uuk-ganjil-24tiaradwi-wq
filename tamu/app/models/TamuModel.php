<?php
class TamuModel {
    protected $db;
    
    public function __construct($db) {
        $this->db = $db;
    }
    
    public function ambilSemuaTamu() {
        $query = "SELECT * FROM tamu ORDER BY created_at DESC";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function ambilTamuById($id) {
        $query = "SELECT * FROM tamu WHERE id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    public function tambahTamu($data) {
        $query = "INSERT INTO tamu (nama_tamu, asal_instansi, no_telepon, jenis_tamu, tanggal_kunjungan, tujuan_kunjungan, bertemu_dengan) 
                  VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($query);
        return $stmt->execute($data);
    }
    
    public function updateTamu($id, $data) {
        $query = "UPDATE tamu SET nama_tamu=?, asal_instansi=?, no_telepon=?, jenis_tamu=?, tanggal_kunjungan=?, tujuan_kunjungan=?, bertemu_dengan=? WHERE id=?";
        $data[] = $id;
        $stmt = $this->db->prepare($query);
        return $stmt->execute($data);
    }
    
    public function hapusTamu($id) {
        $query = "DELETE FROM tamu WHERE id = ?";
        $stmt = $this->db->prepare($query);
        return $stmt->execute([$id]);
    }
    
    public function hitungTotalTamu() {
        $query = "SELECT COUNT(*) as total FROM tamu";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['total'];
    }
    
    public function hitungTamuHariIni() {
        $query = "SELECT COUNT(*) as total FROM tamu WHERE tanggal_kunjungan = CURDATE()";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['total'];
    }
    
    public function hitungTamuBulanIni() {
        $query = "SELECT COUNT(*) as total FROM tamu WHERE MONTH(tanggal_kunjungan) = MONTH(CURDATE()) AND YEAR(tanggal_kunjungan) = YEAR(CURDATE())";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['total'];
    }
}
?>