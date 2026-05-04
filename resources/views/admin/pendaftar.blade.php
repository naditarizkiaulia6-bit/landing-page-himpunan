<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Pendaftar</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container py-5">
    <h2 class="mb-4">Data Pendaftar</h2>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>NIM</th>
                <th>No WhatsApp</th>
                <th>Departemen 1</th>
                <th>Departemen 2</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $index => $item)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->nim }}</td>
                <td>{{ $item->no_whatsapp }}</td>
                <td>{{ $item->departemen_pilihan_pertama }}</td>
                <td>{{ $item->departemen_pilihan_kedua }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</body>
</html>