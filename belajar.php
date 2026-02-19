<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>belajar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
body {
    background-color: #f5efe6;
}

.card {
    transition: all 0.3s ease;
}

.card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 30px rgba(0, 123, 255, 0.25);
}

.btn {
    transition: all 0.3s ease;
    border-radius: 20px;
}

.btn:hover {
    background-color: #0d6efd !important;
    color: white !important;
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(13, 110, 253, 0.4);
}

.navbar-brand {
    transition: 0.3s;
}

.navbar-brand:hover {
    color: #0d6efd !important;
}

.table-hover tbody tr:hover {
    background-color: #e3f2fd !important;
    transition: 0.3s;
}

.breadcrumb {
    background-color: #e8f5e9 !important;
}

.breadcrumb a {
    text-decoration: none;
    color: #2e7d32;
    font-weight: 500;
}

.breadcrumb a:hover {
    color: #0d6efd;
}

</style>
</head>
<body class="bg-light">

<div class="container mt-2">
  <nav class="navbar navbar-expand-lg bg-success navbar-dark shadow" style="border-radius: 20px">

    <div class="container-fluid">

      <a class="navbar-brand d-flex align-items-center gap-2" href="#">
        <img src="image/logoPolije.png" alt="Logo Polije" width="45">
        <span class="fw-bold text-white">
          Politeknik Negeri Jember
        </span>
      </a>

      <button class="navbar-toggler bg-light" type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav gap-3">
          <li class="nav-item">
            <a class="nav-link text-white btn" href="form.php">Form</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white btn" href="tabel.php">Tabel</a>
          </li>
        </ul>
      </div>

    </div>

  </nav>
</div>

<div class="container mt-3">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-white p-3 rounded shadow-sm">
      <li class="breadcrumb-item active" aria-current="page">Home</li>
    </ol>
  </nav>
</div>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="col-md-4">
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
