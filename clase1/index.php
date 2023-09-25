<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: aquamarine;
            font-family: 'Times New Roman', Times, serif;
        }
        .container{
            margin: auto;
            width: 90%;
            margin-top: 10px;
        }
        h1{
            font-size: 22pt;
            color: black;
            background-color: gray;
        }
        p{
            font-size: 18pt;
        }
        input,button{
            padding: 5px;
        }
        .img_producto{
            height: 200px;
            width: 200px;
            transition: 300ms;
        }
        .img_producto:hover{
            transform: scale(1.5);
        }
    </style>
</head>
<body>
    <h1>La tiendita click - php</h1>
    <p>Tus deseos a un click</p>
    <form>
        <input type="text" placeholder="Quieres?"> 
        <button type="submit">Buscar: </button>
        <hr>
        <h3>Productos destacados</h3>
        <img src="1.jpg" class="img_producto">
        <img src="2.webp" class="img_producto">
        <img src="3.jpg" class="img_producto">
        <img src="4.jpg" class="img_producto">
    <form>
</body>
</html>