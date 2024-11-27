<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> 
    <title>Document</title>
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col"><h1>Pagina Principal</h1></div>
        </div><br>

        <div class="row">
            <div class="col">
                <h2>Planteamiento</h2>
                <p class="p-plantea">
                    El "Taller de Costura Luna Cast." tiene un modelo de negocio enfocado en la reparación y producción 
                    bajo pedido. Su propuesta de valor radica en la atención personalizada, la flexibilidad en diseños, y 
                    la entrega de productos de alta calidad adaptados a las necesidades específicas de cada cliente. 
                    Se especializa en pedidos, como uniformes para empresas o escuelas, y no maneja inventario, 
                    se centra en cada cliente y garantiza la calidad del producto final.
                </p>
            </div>
    </div>

    <div class="row">
        <div class="col">
            <h2>Axiomas</h2>
            <p class="p-plantea">
                Los axiomas estaran basados en los registros de nuestra base de datos, y en este caso se tratara de 
                los pedidos realizados y las prendas registradas.
                Se trata de los siguientes axiomas:
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <h3>Para las prendas:</h3>
            
            <ul>
                <li>La prenda debe ser para mujeres</li>
                <li>La prenda debe estar hecha de algodon</li>
                <li>Debe tratarse de un vestido</li>
            </ul>
        </div>
        <div class="col">
            <h3>Para los pedidos:</h3>

            <ul>
                <li>El total del pedido debe ser mayor a 500.00</li>
                <li>El pedido debe estar completado</li>
                <li>El debe tener fecha de entrega en un rango entre mayo de 2024 y diciembre de 2024</li>
            </ul>
        </div>
    </div>

</body>
<style>
    .p-plantea{
        font-size: 20px;
        text-align: justify;
    }
</style>
</html>