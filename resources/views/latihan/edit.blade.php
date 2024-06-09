<!DOCTYPE html>
<html lang="en">
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
    <h1>Edit Latihan</h1>
    <form action="{{ route('latihan.update', $latihan->id) }}" method="post">
        @csrf
        @method('put')
        <label for="nama">Nama Rencana:</label><br>
        <input type="text" id="nama" name="nama" value="{{ $latihan->nama }}" required><br>
        <label for="deskripsi">Deskripsi:</label><br>
        <textarea id="deskripsi" name="deskripsi" required>{{ $latihan->deskripsi }}</textarea><br>
        <label for="durasi">Durasi (hari):</label><br>
        <input type="number" id="durasi" name="durasi" value="{{ $latihan->durasi }}" required><br>
        <label for="level_kesulitan">Level Kesulitan:</label><br>
        <select id="level_kesulitan" name="level_kesulitan" required>
            <option value="Mudah" {{ $latihan->level_kesulitan == 'Mudah' ? 'selected' : '' }}>Mudah</option>
            <option value="Sedang" {{ $latihan->level_kesulitan == 'Sedang' ? 'selected' : '' }}>Sedang</option>
            <option value="Sulit" {{ $latihan->level_kesulitan == 'Sulit' ? 'selected' : '' }}>Sulit</option>
        </select><br><br>
        <button type="submit">Edit Latihan</button>
    </form>
</body>
</html>
