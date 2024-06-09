<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Peralatan</title>
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
                <a href="{{ url('alats') }}" class="nav-link">Peralatan</a>
            </li>
            <li class="nav-item">
                <a href="{{ url('logout') }}" class="nav-link">Logout</a>
            </li>
        </ul>
    </nav>
    <h1>Daftar Peralatan</h1>
    <div style="text-align: center;">
        <a class="button" href="{{ route('alat.create') }}">Tambah Alat</a>
    </div>
    <div style="text-align: center;">
        <a class="button" href="{{ route('alat.cetak') }}">Cetak PDF</a>
    </div>
    <table border="2">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Jenis</th>
                <th>Jumlah</th>
                <th>Kondisi</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alats as $alat)
                <tr>
                    <td>{{ $alat->id }}</td>
                    <td>{{ $alat->nama }}</td>
                    <td>{{ $alat->jenis }}</td>
                    <td>{{ $alat->jumlah }}</td>
                    <td>{{ $alat->kondisi }}</td>
                    <td>
                        <div class="action-buttons">
                            <a href="{{ route('alat.edit', $alat->id) }}" class="edit-button">Edit</a>
                            <form action="{{ route('alat.destroy', $alat->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
