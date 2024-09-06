<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>POS Home</title>
    <style>
        body {
            font-family: Poppins;
            background-color: #a3c585;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            text-align: center;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        a {
            display: inline-block;
            margin: 10px;
            padding: 10px 20px;
            background-color: #daabb5;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #2980b9;
        }

        .links {
            margin-top: 20px;
        }

        p {
            color: #666;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Selamat Datang di  Chikal Store</h1>
    <p>Pilih menu di bawah:</p>
    <div class="links">
        <a href="{{ url('/category') }}">Kategori Barang</a>
        <a href="{{ url('/user/05/name/chikalnazmi') }}">Profil Pengguna</a>
        <a href="{{ url('/sales') }}">Transaksi</a>
    </div>
</div>

</body>
</html>
