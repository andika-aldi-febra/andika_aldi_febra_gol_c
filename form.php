<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Input Data Mahasiswa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
body {
    background-color: #f5efe6; /* cream soft */
}

/* Efek hover card */
.card {
    transition: all 0.3s ease;
}

.card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 30px rgba(0, 123, 255, 0.25);
}

/* Efek hover tombol */
.btn {
    transition: all 0.3s ease;
}

.btn:hover {
    background-color: #0d6efd !important; /* biru cerah */
    color: white !important;
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(13, 110, 253, 0.4);
}

/* Hover untuk navbar brand */
.navbar-brand {
    transition: 0.3s;
}

.navbar-brand:hover {
    color: #0d6efd !important;
}

/* Hover untuk tabel */
.table-hover tbody tr:hover {
    background-color: #e3f2fd !important; /* biru + cream soft */
    transition: 0.3s;
}
</style>
</head>
<body class="bg-light">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container">
        <a class="navbar-brand" href="belajar.php">My Project</a>
    </div>
</nav>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow-lg border-0">
                <div class="card-header bg-success text-white text-center">
                    <h3 class="card-title mb-0">Form Input Data Mahasiswa</h3>
                </div>

                <div class="card-body p-4">
                    <form method="POST" action="">

                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Mahasiswa</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama mahasiswa" required>
                        </div>

                        <div class="mb-3">
                            <label for="nim" class="form-label">NIM Mahasiswa</label>
                            <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan nomor induk mahasiswa" required>
                        </div>

                        <div class="mb-3">
                            <label for="prodi" class="form-label">Program Studi</label>
                            <select class="form-select" id="prodi" name="prodi" required>
                                <option value="">-- Pilih Program Studi --</option>
                                <option value="TeknikInformatika">Teknik Informatika</option>
                                <option value="Sistem Informasi">Sistem Informasi</option>
                                <option value="Manajemen Informatika">Manajemen Informatika</option>
                                <option value="Teknik Komputer">Teknik Komputer</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Masukkan alamat lengkap" required></textarea>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-success">Simpan Data</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>

                    </form>
                </div>
            </div>

            <div class="mt-3 text-center">
                <a href="belajar.php" class="btn btn-outline-success">Kembali ke Halaman Belajar</a>
            </div>

        </div>
    </div>
</div>

</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $nama   = $_POST['nama'];
    $nim    = $_POST['nim'];
    $prodi  = $_POST['prodi'];
    $alamat = $_POST['alamat'];

    echo "<div class='container mt-4'>";
    echo "<div class='alert alert-success'>";
    echo "<h5>Data Mahasiswa</h5>";
    echo "Nama: $nama <br>";
    echo "NIM: $nim <br>";
    echo "Program Studi: $prodi <br>";
    echo "Alamat: $alamat";
    echo "</div></div>";
}
?>
