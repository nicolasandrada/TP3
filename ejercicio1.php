<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>

    body{
            min-height: 100vh; 
            margin: 0;

            display: flex; 
            justify-content: center; /* eje horizontal */ 
            align-items: center; /* eje vertical */ 
        }
</style>

</head>
<body>
    <!-- 
        action es a donde se dirige la informacion
        si esta vacio por defecto se redirije asi si mismo
    -->
    <form action="" method="post">
        <!-- 
            el atributo "name" es super importante porque con ese 
            nombre despues recibe el metodo POST 
        -->
        <input type="number" name="Num1" placeholder="ingrese un numero..."> <br>
        <input type="number" name="num2" placeholder="ingrese un numero..."> <br>

        <select name="operacion" id="">
            <option value="suma">+</option>
            <option value="resta">-</option>
            <option value="multiplicacion">*</option>
            <option value="division">/</option>
        </select>
        <br>

        <input type="submit" value="Calcular">
        <a href="">Borrar</a>
    </form>

    <?php
        //  isset verificar que un dato existe
        if( isset( $_POST["Num1"] )){

            $num1 = $_POST["Num1"];
            $num2 = $_REQUEST["num2"];

            $op = $_POST["operacion"];

            if($op == "suma"){
                $resulado = $num1+$num2;
            }

            echo "El resultado es $resulado";
        }
    ?>
    
</body>
</html>