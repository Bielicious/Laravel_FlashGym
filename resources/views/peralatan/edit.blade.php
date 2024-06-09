<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Latihan</title>
        <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
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
    <h1>Edit Alat</h1>
    <form action="{{ route('alat.update', $alat->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" value="{{ $alat->nama }}">
        <label for="jenis">Jenis:</label>
        <input type="text" id="jenis" name="jenis" value="{{ $alat->jenis }}">
        <label for="jumlah">Jumlah:</label>
        <input type="number" id="jumlah" name="jumlah" value="{{ $alat->jumlah }}">
        <label for="kondisi">Kondisi:</label>
        <select id="text" name="kondisi" required>
            <option value="Baik">Baik</option>
            <option value="Rusak">Rusak</option>
        </select><br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
