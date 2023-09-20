<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid #000; /* Tambahkan garis batas untuk tabel */
        }

        th, td {
            border: 1px solid #000; /* Tambahkan garis batas untuk sel header dan sel data */
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2; /* Warna latar belakang untuk sel header */
        }
    </style>
</head>
<body>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Harga</th>
                <th>Tgl. Terbit</th>
                <th>Aksi</th>
            </tr>    
        </thead>
        <tbody>
            @foreach($data_buku as $buku)
                <tr>
                    <td>{{ $buku->id }}</td>
                    <td>{{ $buku->judul }}</td>
                    <td>{{ $buku->penulis }}</td>
                    <td>{{ "Rp ".number_format($buku->harga, 2, ',', '.') }}</td>
                    <td>{{\Carbon\Carbon::parse($buku->tgl_terbit)->format('d/m/Y')}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <p>Jumlah Buku : {{ $jumlah_buku }}</p>
    <p>Total Harga Buku : Rp {{ number_format($total_harga, 2, ',', '.') }}</p>   
</body>
</html>
