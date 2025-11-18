<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Tamu</title>
    <style>
        body { font-family: Arial; margin: 20px; background: #f5f5f5; }
        .container { 
            max-width: 600px; 
            margin: 0 auto; 
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .form-group { margin-bottom: 20px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input, select, textarea { 
            width: 100%; 
            padding: 10px; 
            border: 1px solid #ddd; 
            border-radius: 5px;
            box-sizing: border-box;
        }
        .btn { 
            padding: 10px 20px; 
            background: #007bff; 
            color: white; 
            border: none; 
            border-radius: 5px; 
            cursor: pointer;
            margin-right: 10px;
        }
        .btn-cancel {
            background: #6c757d;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
        }
        .btn:hover {
            opacity: 0.9;
        }
        h1 {
            color: #333;
            border-bottom: 2px solid #007bff;
            padding-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Data Tamu</h1>
        
        <?php if(isset($_SESSION['error'])): ?>
            <div style="background: #ffcccc; color: #d8000c; padding: 10px; border-radius: 5px; margin-bottom: 20px;">
                <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
            </div>
        <?php endif; ?>
        
        <form method="POST" action="index.php?action=tamu_update&id=<?php echo $tamu['id']; ?>">
            <div class="form-group">
                <label>Nama Tamu:</label>
                <input type="text" name="nama_tamu" value="<?php echo $tamu['nama_tamu']; ?>" required>
            </div>
            
            <div class="form-group">
                <label>Asal Instansi:</label>
                <input type="text" name="asal_instansi" value="<?php echo $tamu['asal_instansi']; ?>" required>
            </div>
            
            <div class="form-group">
                <label>No Telepon:</label>
                <input type="text" name="no_telepon" value="<?php echo $tamu['no_telepon']; ?>">
            </div>
            
            <div class="form-group">
                <label>Jenis Tamu:</label>
                <select name="jenis_tamu" required>
                    <option value="">Pilih Jenis Tamu</option>
                    <option value="Orang Tua Siswa" <?php echo $tamu['jenis_tamu'] == 'Orang Tua Siswa' ? 'selected' : ''; ?>>Orang Tua Siswa</option>
                    <option value="Calon Siswa" <?php echo $tu['jenis_tamu'] == 'Calon Siswa' ? 'selected' : ''; ?>>Calon Siswa</option>
                    <option value="Mahasiswa" <?php echo $tamu['jenis_tamu'] == 'Mahasiswa' ? 'selected' : ''; ?>>Mahasiswa</option>
                    <option value="Umum" <?php echo $tamu['jenis_tamu'] == 'Umum' ? 'selected' : ''; ?>>Umum</option>
                </select>
            </div>
            
            <div class="form-group">
                <label>Tanggal Kunjungan:</label>
                <input type="date" name="tanggal_kunjungan" value="<?php echo $tamu['tanggal_kunjungan']; ?>" required>
            </div>
            
            <div class="form-group">
                <label>Tujuan Kunjungan:</label>
                <textarea name="tujuan_kunjungan" rows="3" required><?php echo $tamu['tujuan_kunjungan']; ?></textarea>
            </div>
            
            <div class="form-group">
                <label>Bertemu Dengan:</label>
                <input type="text" name="bertemu_dengan" value="<?php echo $tamu['bertemu_dengan']; ?>" required>
            </div>
            
            <button type="submit" class="btn">Update Data</button>
            <a href="index.php?action=tamu" class="btn-cancel">Batal</a>
        </form>
    </div>
</body>
</html>