<br>
<?php
    echo "Estoy fuera de la estructura html";
?>
<br>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        echo "Estoy en el Head";
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Php</title>
</head>

    <div class="container text-center">
        <h1>Primer ejemplo de php usar echo</h1>
        <p>Este ejemplo me imprime un mensaje desde php en mi pagina web </p>
    </div>

    <body class="container">
      <?php
        echo "Hola mundo";
      ?>

    <br><br>
    <h2>Ejemplo 1</h2>
      <?php
        ECHO "Hello World!<br>";
        echo "Hello World!<br>";
        EcHo "Hello World!<br>";
      ?>

    <br>
    <h2>Ejemplo 2 usando html en php</h2>
    <?php
        echo "<p>Este es un parrafo</p>";
        echo "<h4>Este es un h1 en php</h4>";
        echo "<table>
            <tr>
                <th>Elemento 1</th>
                <th>Elemento 2</th>
                <th>Elemento 3</th>
            </tr>
            <tr>
                <td>100</td>
                <td>200</td>
                <td>400</td>
            </tr>
            <tr>
                <td>600</td>
                <td>300</td>
                <td>600</td>
            </tr>
            <tr>
                <td>600</td>
                <td>700</td>
                <td>400</td>
            </tr>
        </table>";
    ?>
    
    <br>
    <h2>Ejemplo 3: Declarar y mostrar variables en php y html</h2>
    <?php
        //Declara un variable 
    $mensaje = "Hola Mundo";
    $numeroEntero = 7;
    $numeroDecimal=.72; 
    $resultado = $numeroEntero * 2; 

    echo "Vriable mensaje: ", $mensaje, "<br>";
    echo "Variable numero entero: ", $numeroEntero, "<br>";
    echo "Variable numero decimal: ", $numeroDecimal, "<br>";
    echo "Variable Resultado: ", $resultado, "<br>";
?>

</body>
</html>