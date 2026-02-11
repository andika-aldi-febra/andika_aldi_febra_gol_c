<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>belajar</title>
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
        <a class="navbar-brand" href="#">My Project</a>
    </div>
</nav>

<!-- Content -->
<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="col-md-8">
        <div class="card shadow-lg border-0" style="border-radius: 20px;">
            <div class="card-header text-center bg-success text-white" style="border-radius: 20px 20px 0px 0px;">
                <h1 class="card-title">
                    Welcome To Halo
                </h1>
            </div>
            <div class="card-body text-center p-5">
                <p class="card-text">
                    This is a simple Bootstrap card component.
                </p>
                <a href="tabel.php" class="btn btn-success px-4">Get Started</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>
