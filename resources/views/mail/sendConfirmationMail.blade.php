<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Información de la orden</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .header {
            background-color: #4CAF50;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        }

        footer {
            margin-top: 20px;
            text-align: center;
            color: #888;
            background-color: #4CAF50;
            padding: 10px 0;
        }

        footer p {
            margin: 5px 0;
            color: #fff;
        }
    </style>
</head>
<body>
<div class="header">
    <h1>Certificación Internacional de SCRUM MASTER.</h1>
</div>

<div class="container">
    <h2>Detalles de la Orden</h2>

    <p><strong>Nombre del Cliente:</strong> {{$given_name}}</p>
    <p><strong>Apellido del Cliente:</strong> {{$surname}}</p>
    <p><strong>Email del Cliente:</strong> {{$email_address}}</p>
    <p><strong>Número de Orden:</strong> {{$id}}</p>
    <p><strong>Estado de la Orden:</strong> {{$status}}</p>
    <!-- Agrega más etiquetas <p> según la información que desees mostrar -->

</div>

<footer>
    <p>Atentamente,</p>
    <p>EDESCE</p>
</footer>
</body>
</html>