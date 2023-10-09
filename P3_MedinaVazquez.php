<!DOCTYPE html>
<HTML LANG="es">
    <head>
        <META charset="UTF-8">
        <title> Condicional Switch </title>
    </head>
    <body>
        <font color=7044D7 size=5> Condicional Switch </font>
        <br><br>
        <font color=8693C6>
            <?php

               $mes="Agosto";

            switch($mes){
                case "Enero":
                    echo "<p>Estamos en  el mes de  Enero</p>";   
                    break;
                case "Febrero":
                    echo "<p>Estamos en el mes de Febrero</p>";    
                    break;
                case "Marzo":
                    echo "<p>Estamos en el mes de Marzo</p>";    
                    break;
                case "Abril":
                    echo "<p>Estamos en el mes de Abril</p>";   
                    break;
                case "Mayo":
                    echo "<p>Estamos en el mes de Mayo</p>";    
                    break;
                case "Junio":
                    echo "<p>Estamos en el mes de Junio</p>";    
                    break;
                case "Julio":
                    echo "<p>Estamos en el mes de Julio</p>";    
                    break;
                case "Agosto":
                    echo "<p>Estamos en el mes de Agosto</p>";    
                    break;
                case "Septiembre":
                    echo "<p>Estamos en el mes de Septiembre</p>";    
                    break;
                case "Octubre":
                    echo "<p>Estamos en el mes de Octubre</p>";    
                    break;
                case "Noviembre":
                    echo "<p>Estamos en el mes de Noviembre</p>";    
                    break;
                case "Diciembre":
                    echo "<p>Estamos en el mes de Diciembre</p>";
                    break;   
                default:
                    echo "<p>No es un mes</p>";
                    break;
                    }
            ?>

        </font>
    </body>
</html>