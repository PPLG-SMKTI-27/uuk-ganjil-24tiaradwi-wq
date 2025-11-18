<!DOCTYPE html>
<html>
<head>
    <title>Data Tamu - SMK TI Airlangga</title>
    <style>
        body { font-family: Arial; margin: 20px; }
        .container { max-width: 1200px; margin: 0 auto; }
        .btn { padding: 10px; background: blue; color: white; text-decoration: none; border-radius: 5px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Data Tamu SMK TI Airlangga</h1>
        
        <?php if(isset($_SESSION['pesan'])): ?>
            <div style="background: green; color: white; padding: 10px;">
                <?php echo $_SESSION['pesan']; unset($_SESSION['pesan']); ?>
            </div>
        <?php endif; ?>
        
        <a href="index.php?action=tamu_tambah" class="btn">Tambah Tamu Baru</a>
        <a href="index.php?action=dashboard" class="btn">Kembali ke Dashboard</a>
        
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Tamu</th>
                    <th>Asal Instansi</th>
                    <th>Jenis Tamu</th>
                    <th>Tanggal Kunjungan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach($data_tamu as $tamu): ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $tamu['nama_tamu']; ?></td>
                    <td><?php echo $tamu['asal_instansi']; ?></td>
                    <td><?php echo $tamu['jenis_tamu']; ?></td>
                    <td><?php echo $tamu['tanggal_kunjungan']; ?></td>
                    <td>
                        <a href="index.php?action=tamu_edit&id=<?php echo $tamu['id']; ?>">Edit</a>
                        <a href="index.php?action=tamu_hapus&id=<?php echo $tamu['id']; ?>" 
                           onclick="return confirm('Yakin hapus data?')">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>