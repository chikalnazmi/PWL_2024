<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Kategori Produk</title>
    <style>
        body {
            font-family: Poppins;
            background-color: #a3c585;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .category-list {
            list-style-type: none;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .category-item {
            display: flex;
            align-items: center;
            margin: 10px 0;
        }

        .category-item img {
            width: 50px;
            height: 50px;
            margin-right: 10px;
        }

        a {
            display: block;
            padding: 10px;
            background-color: #daabb5;
            color: white;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            width: 200px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #2980b9;
        }

        p {
            text-align: center;
            color: #666;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Kategori Produk</h1>

    <ul class="category-list">
        <li class="category-item">
            
            <a href="{{ url('/category/food-beverage') }}">Food & Beverage</a>
        </li>
        <li class="category-item">
            
            <a href="{{ url('/category/beauty-health') }}">Beauty & Health</a>
        </li>
        <li class="category-item">
           
            <a href="{{ url('/category/home-care') }}">Home Care</a>
        </li>
        <li class="category-item">
          
            <a href="{{ url('/category/baby-kid') }}">Baby & Kid</a>
        </li>
    </ul>

    <p>Pilih kategori untuk melihat produk yang tersedia.</p>
</div>

</body>
</html>
