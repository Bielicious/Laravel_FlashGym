<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Latihan</title>
    <link rel="stylesheet" href="{{ asset('css/rencana.css') }}">
</head>
<body>
    <nav class="navbar">
        <a href="#" class="navbar-brand">FLASH GYM</a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="dashboard.php" class="nav-link">Dashboard</a>
            </li>
            <li class="nav-item">
                <a href="rencana.php" class="nav-link">Rencana Latihan</a>
            </li>
            <li class="nav-item">
                <a href="peralatan.php" class="nav-link">Peralatan</a>
            </li>
            <li class="nav-item">
                <a href="logout.php" class="nav-link">Logout</a>
            </li>
        </ul>
    </nav>
    <h1>Tambah Latihan</h1>
    <form action="{{ route('latihan.store') }}" method="post">
        @csrf
        <label for="nama">Nama Rencana:</label><br>
        <input type="text" id="nama" name="nama" required><br>
        <label for="deskripsi">Deskripsi:</label><br>
        <textarea id="deskripsi" name="deskripsi" required></textarea><br>
        <label for="durasi">Durasi (hari):</label><br>
        <input type="number" id="durasi" name="durasi" required><br>
        <label for="level_kesulitan">Level Kesulitan:</label><br>
        <select id="level_kesulitan" name="level_kesulitan" required>
            <option value="Mudah">Mudah</option>
            <option value="Sedang">Sedang</option>
            <option value="Sulit">Sulit</option>
        </select><br><br>
        <button type="submit">Tambah Latihan</button>
    </form>
</body>
</html>
