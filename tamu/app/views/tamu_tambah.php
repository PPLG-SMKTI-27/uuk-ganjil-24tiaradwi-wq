<!DOCTYPE html>
<html>
<head>
    <title>Tambah Tamu Baru</title>
    <style>
        body { font-family: Arial; margin: 20px; }
        .container { max-width: 600px; margin: 0 auto; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; }
        input, select, textarea { width: 100%; padding: 8px; border: 1px solid #ddd; }
        .btn { padding: 10px 20px; background: blue; color: white; border: none; border-radius: 5px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tambah Data Tamu Baru</h1>
        
        <form method="POST" action="index.php?action=tamu_simpan">
            <div class="form-group">
                <label>Nama Tamu:</label>
                <input type="text" name="nama_tamu" required>
            </div>
            
            <div class="form-group">
                <label>Asal Instansi:</label>
                <input type="text" name="asal_instansi" required>
            </div>
            
            <div class="form-group">
                <label>No Telepon:</label>
                <input type="text" name="no_telepon">
            </div>
            
            <div class="form-group">
                <label>Jenis Tamu:</label>
                <select name="jenis_tamu" required>
                    <option value="">Pilih Jenis Tamu</option>
                    <option value="Orang Tua Siswa">Orang Tua Siswa</option>
                    <option value="Calon Siswa">Calon Siswa</option>
                    <option value="Mahasiswa">Mahasiswa</option>
                    <option value="Umum">Umum</option>
                </select>
            </div>
            
            <div class="form-group">
                <label>Tanggal Kunjungan:</label>
                <input type="date" name="tanggal_kunjungan" required>
            </div>
            
            <div class="form-group">
                <label>Tujuan Kunjungan:</label>
                <textarea name="tujuan_kunjungan" rows="3" required></textarea>
            </div>
            
            <div class="form-group">
                <label>Bertemu Dengan:</label>
                <input type="text" name="bertemu_dengan" required>
            </div>
            
            <button type="submit" class="btn">Simpan Data</button>
            <a href="index.php?action=tamu">Batal</a>
        </form>
    </div>
</body>
</html>