<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Halaman Penjualan</title>
    <style>
        body {
            font-family: Poppins;
            background-color: #a3c585;
            padding: 20px;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
            background-color: white;
            padding: 50px;
            border: 1px solid #ccc;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        .total {
            text-align: right;
            margin-top: 20px;
            font-size: 18px;
        }
        .btn-submit {
            display: block;
            width: 98%;
            padding: 10px;
            background-color: #daabb5;
            color: white;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }
        .btn-submit:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Halaman Penjualan</h1>

    <table>
        <thead>
            <tr>
                <th>Nama Produk</th>
                <th>Kuantitas</th>
                <th>Harga Satuan</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Produk 1</td>
                <td>2</td>
                <td>Rp 50.000</td>
                <td>Rp 100.000</td>
            </tr>
            <tr>
                <td>Produk 2</td>
                <td>1</td>
                <td>Rp 30.000</td>
                <td>Rp 30.000</td>
            </tr>
            <tr>
                <td>Produk 3</td>
                <td>3</td>
                <td>Rp 20.000</td>
                <td>Rp 60.000</td>
            </tr>
        </tbody>
    </table>

    <div class="total">
        <strong>Total Harga: Rp 190.000</strong>
    </div>

    <a href="#" class="btn-submit">Selesaikan Pembelian</a>
</div>

</body>
</html>
