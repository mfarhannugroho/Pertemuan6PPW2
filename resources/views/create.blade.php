    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tambah Buku</title>
        <style>
            body {
                font-family: Arial, sans-serif;
            }
            
            .container {
                max-width: 400px;
                margin: 0 auto;
                padding: 20px;
                border: 1px solid #ccc;
                border-radius: 5px;
                background-color: #f9f9f9;
            }

            h4 {
                text-align: center;
                margin-bottom: 20px;
            }

            form {
                display: block;
            }

            label {
                display: block;
                margin-bottom: 8px;
                font-weight: bold;
            }

            input[type="text"] {
                width: 100%;
                padding: 8px;
                margin-bottom: 15px;
                border: 1px solid #ccc;
                border-radius: 3px;
            }

            button[type="submit"] {
                background-color: #007bff;
                color: #fff;
                border: none;
                border-radius: 3px;
                padding: 10px 20px;
                cursor: pointer;
            }

            button[type="submit"]:hover {
                background-color: #0056b3;
            }

            a {
                text-decoration: none;
                color: #007bff;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h4> Tambah Buku </h4>
            <form method="post" action="{{ route('buku.store') }}">
            @csrf
                <label for="judul">Judul</label>
                <input type="text" name="judul" id="judul">

                <label for="penulis">Penulis</label>
                <input type="text" name="penulis" id="penulis">

                <label for="harga">Harga</label>
                <input type="text" name="harga" id="harga">

                <label for="tgl_terbit">Tgl. Terbit</label>
                <input type="date" name="tgl_terbit" id="tgl_terbit">

                <button type="submit">Simpan</button>
                <a href="/buku">Batal</a>
            </form>
        </div>
    </body>
    </html>
