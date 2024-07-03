<!DOCTYPE html>
<html>
<head>
    <title>Data Usaha Alumni</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Input Data Usaha Alumni</h1>
        </div>
        <div class="form-container">
            <form action="save_data.php" method="POST">
                <div class="form-group">
                    <label for="nim">NIM:</label>
                    <input type="text" id="nim" name="nim" required>
                </div>

                <div class="form-group">
                    <label for="nama">Nama Lengkap:</label>
                    <input type="text" id="nama" name="nama" required>
                </div>

                <div class="form-group">
                    <label for="tahun_masuk">Tahun Masuk:</label>
                    <input type="number" id="tahun_masuk" name="tahun_masuk" required>
                </div>
                
                <div class="form-group">
                    <label for="tahun_lulus">Tahun Lulus:</label>
                    <input type="number" id="tahun_lulus" name="tahun_lulus" required>
                </div>

                <div class="form-group">
                    <label for="nama_usaha">Nama Usaha:</label>
                    <input type="text" id="nama_usaha" name="nama_usaha" required>
                </div>

                <div class="form-group">
                    <label for="alamat_usaha">Alamat Usaha:</label>
                    <input type="text" id="alamat_usaha" name="alamat_usaha">
                </div>

                <div class="form-group">
                    <label for="website">Website:</label>
                    <input type="url" id="website" name="website">
                </div>

                <div class="form-group">
                    <label for="marketplace">Link ke Marketplace:</label>
                    <input type="url" id="marketplace" name="marketplace">
                </div>

                <div class="form-group">
                    <label for="no_telp">No. Telepon Bisnis:</label>
                    <input type="tel" id="no_telp" name="no_telp" required>
                </div>

                <div class="form-group">
                    <label for="instagram">Instagram:</label>
                    <input type="text" id="instagram" name="instagram">
                </div>

                <div class="form-group">
                    <label for="tiktok">TikTok:</label>
                    <input type="text" id="tiktok" name="tiktok">
                </div>

                <div class="form-group">
                    <label for="facebook">Facebook:</label>
                    <input type="text" id="facebook" name="facebook">
                </div>

                <input type="submit" value="Simpan Data">
            </form>
        </div>
        <div class="footer">
            <p>&copy; 2024 Alumni</p>
        </div>
    </div>
</body>
</html>
