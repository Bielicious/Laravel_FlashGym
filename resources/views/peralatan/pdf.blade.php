<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Daftar Peralatan - PDF</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Daftar Peralatan</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Jenis</th>
                <th>Jumlah</th>
                <th>Kondisi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alat as $alat)
                <tr>
                    <td>{{ $alat->id }}</td>
                    <td>{{ $alat->nama }}</td>
                    <td>{{ $alat->jenis }}</td>
                    <td>{{ $alat->jumlah }}</td>
                    <td>{{ $alat->kondisi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
