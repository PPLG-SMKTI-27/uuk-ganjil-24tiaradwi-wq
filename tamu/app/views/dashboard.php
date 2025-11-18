<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Buku Tamu SMK TI Airlangga</title>
    <style>
        body { 
            font-family: Arial; 
            margin: 0;
            background: #f5f5f5;
        }
        .header {
            background: #007bff;
            color: white;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 0 20px;
        }
        .stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }
        .stat-card {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            text-align: center;
        }
        .stat-number {
            font-size: 2em;
            font-weight: bold;
            color: #007bff;
            margin: 10px 0;
        }
        .menu-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }
        .menu-card {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            text-align: center;
            text-decoration: none;
            color: #333;
            transition: transform 0.2s;
        }
        .menu-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }
        .menu-card h3 {
            margin-top: 0;
            color: #007bff;
        }
        .btn-logout {
            background: #dc3545;
            color: white;
            padding: 8px 15px;
            text-decoration: none;
            border-radius: 5px;
        }
        .welcome {
            font-size: 1.2em;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Buku Tamu Digital - SMK TI Airlangga</h1>
        <div>
            <span class="welcome">Selamat datang, <?php echo $_SESSION['nama_lengkap']; ?>!</span>
            <a href="index.php?action=logout" class="btn-logout">Logout</a>
        </div>
    </div>
    
    <div class="container">
        <?php if(isset($_SESSION['pesan'])): ?>
            <div style="background: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin-bottom: 20px;">
                <?php echo $_SESSION['pesan']; unset($_SESSION['pesan']); ?>
            </div>
        <?php endif; ?>
        
        <div class="stats">
            <div class="stat-card">
                <h3>Total Tamu</h3>
                <div class="stat-number"><?php echo $total_tamu; ?></div>
                <p>Seluruh waktu</p>
            </div>
            <div class="stat-card">
                <h3>Tamu Hari Ini</h3>
                <div class="stat-number"><?php echo $tamu_hari_ini; ?></div>
                <p>Tanggal: <?php echo date('d-m-Y'); ?></p>
            </div>
            <div class="stat-card">
                <h3>Tamu Bulan Ini</h3>
                <div class="stat-number"><?php echo $tamu_bulan_ini; ?></div>
                <p>Bulan: <?php echo date('F Y'); ?></p>
            </div>
        </div>
        
        <div class="menu-grid">
            <a href="index.php?action=tamu" class="menu-card">
                <h3>📋 Data Tamu</h3>
                <p>Kelola data tamu yang berkunjung</p>
            </a>
            
            <a href="index.php?action=tamu_tambah" class="menu-card">
                <h3>➕ Tambah Tamu</h3>
                <p>Input data tamu baru</p>
            </a>
            
            <?php if($_SESSION['role'] == 'admin'): ?>
            <a href="#" class="menu-card">
                <h3>👥 Management User</h3>
                <p>Kelola user sistem</p>
            </a>
            
            <a href="#" class="menu-card">
                <h3>📊 Laporan</h3>
                <p>Cetak laporan kunjungan</p>
            </a>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>