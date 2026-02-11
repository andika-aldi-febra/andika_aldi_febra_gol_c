<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tabel Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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

    <div class="card shadow-lg border-0">
        <div class="card-header bg-success text-white">
            <h1 class="mb-0">Data Tabel</h1>
        </div>
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered">
                    <thead class="table-success">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Kota</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Ahmad  Hidayat</td>
                            <td>ahmad@gmail.com</td>
                            <td>Jakarta</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Siti Nurhaliza</td>
                            <td>siti@gmail.com</td>
                            <td>Bandung</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Budi Santoso</td>
                            <td>budi@gmail.com</td>
                            <td>Surabaya</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Rina Wijaya</td>
                            <td>rina@gmail.com</td>
                            <td>Semarang</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="mt-3">
                <a href="form.php" class="btn btn-success">Input Form</a>
                <a href="belajar.php" class="btn btn-secondary">Kembali Ke Halaman Belajar</a>
            </div>

        </div>
    </div>

</div>

</body>
</html>
