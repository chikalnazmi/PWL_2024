<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Profil Pengguna</title>
    <style>
        body {
            font-family: Poppins;
            background-color: #a3c585;
            padding: 20px;
        }
        .container {
            background-color: white;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        p {
            font-size: 18px;
            color: #666;
        }
        .user-info {
            border: 1px solid #ccc;
            padding: 10px;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Profil Pengguna</h1>

    <div class="user-info">
        <p><strong>ID Pengguna:</strong> {{ $id }}</p>
        <p><strong>Nama Pengguna:</strong> {{ $name }}</p>
    </div>

    <p>Ini adalah halaman profil pengguna yang menampilkan informasi dasar seperti ID dan nama pengguna.</p>
</div>

</body>
</html>
