<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Latihan</title>
    <link rel="stylesheet" href="{{ asset('css/peralatan.css') }}">
</head>
<body>
    <nav class="navbar">
        <a href="#" class="navbar-brand">FLASH GYM</a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="{{ url('dashboard') }}" class="nav-link">Dashboard</a>
            </li>
            <li class="nav-item">
                <a href="{{ url('latihan') }}" class="nav-link">Rencana Latihan</a>
            </li>
            <li class="nav-item">
                <a href="{{ url('alat') }}" class="nav-link">Peralatan</a>
            </li>
            <li class="nav-item">
                <a href="{{ url('logout') }}" class="nav-link">Logout</a>
            </li>
        </ul>
    </nav>
    <h1>Daftar Latihan</h1>
    <div style="text-align: center;">
        <a href="{{ route('latihan.create') }}" class="button">Tambah Latihan</a>
    </div>
    <table border="2">
        <tr>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Durasi (hari)</th>
            <th>Level Kesulitan</th>
            <th>Aksi</th>
        </tr>
        @foreach($latihans as $latihan)
        <tr>
            <td>{{ $latihan->nama }}</td>
            <td>{{ $latihan->deskripsi }}</td>
            <td>{{ $latihan->durasi }}</td>
            <td>{{ $latihan->level_kesulitan }}</td>
            <td>
                <div class="action-buttons">
                    <a href="{{ route('latihan.edit', $latihan->id) }}" class="edit-button">Edit</a>
                    <form action="{{ route('latihan.destroy', $latihan->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
