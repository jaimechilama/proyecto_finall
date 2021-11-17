<?php
 

  
 $user = "root";
 $pass = "";
 $host = "localhost";

    $connection = mysqli_connect($host, $user, $pass); 
  

function conmysql(){
    
 
    GLOBAL $connection;
    

    if( $connection) 
        {
          
            echo "Hemos conectado al servidor <br>" ;
        }
  else
        {
            echo "No se ha podido conectar con el servidor" . mysql_error();
          
        }


        $datab = "inventario";
        $db = mysqli_select_db($connection,$datab);
        if (!$db)
{
echo "No se ha podido encontrar la Tabla";
}
else
{
echo "Tabla seleccionada" ;
}




}
function consulta($marca){
    
    GLOBAL $connection;

    $consulta = "SELECT * FROM  $marca";
    $result = mysqli_query($connection,$consulta);
    if(!$result) 
    {
        echo " No se ha podido realizar la consulta";
    }
     echo("<center>");
     echo "<table border='1' class='table table-bordered table-dark'>";
     echo" <th>nombre_dispositivo</th>";
     echo" <th>memoria_ram</th>";
     echo" <th>camara_front</th>";
     echo" <th>camara_post</th>";
     echo" <th>garantia</th>";
     echo" <th>precio</th>";
     echo" <th>cantidad_pr</th>";

    while ($colum = mysqli_fetch_array($result))
    {
       echo "<tr>";
       echo "<td><center>" . $colum['nombre_dispositivo']. "</td></center>";
       echo "<td><center>" . $colum['memoria_ram'] . "</td></center>";
       echo "<td><center>" . $colum['camara_front']. "</td></center>";
       echo "<td><center>" . $colum['camara_post']. "</td></center>";
       echo "<td><center>" . $colum['garantia']. "</td></center>";
       echo "<td><center>" . $colum['precio']. "</td></center>";
       echo "<td><center>" . $colum['cantidad_pr']. "</td></center>";
       echo "</tr>";
   }
   echo "</table>";
   echo("</center>");

}

function consulta2($memoria){
    
    GLOBAL $connection;

    $consulta = "SELECT * FROM  samsung  where memoria_ram = $memoria";
    $result = mysqli_query($connection,$consulta);
    if(!$result) 
    {
        echo "No se ha podido realizar la consulta";
    }
     echo("<center>");
     echo "<table border='1' class='table table-bordered table-dark'>";
     echo" <th>nombre_dispositivo</th>";
     echo" <th>memoria_ram</th>";
     echo" <th>camara_front</th>";
     echo" <th>camara_post</th>";
     echo" <th>garantia</th>";
     echo" <th>precio</th>";
     echo" <th>cantidad_pr</th>";

    while ($colum = mysqli_fetch_array($result))
    {
       echo "<tr>";
       echo "<td><center>" . $colum['nombre_dispositivo']. "</td></center>";
       echo "<td><center>" . $colum['memoria_ram'] . "</td></center>";
       echo "<td><center>" . $colum['camara_front']. "</td></center>";
       echo "<td><center>" . $colum['camara_post']. "</td></center>";
       echo "<td><center>" . $colum['garantia']. "</td></center>";
       echo "<td><center>" . $colum['precio']. "</td></center>";
       echo "<td><center>" . $colum['cantidad_pr']. "</td></center>";
       echo "</tr>";
   }
   echo "</table>";
   echo("</center>");

}
function consulta10($marca,$memoria){
    
    GLOBAL $connection;

    $consulta = "SELECT * FROM  $marca  where memoria_ram = $memoria";
    $result = mysqli_query($connection,$consulta);
    
    if(!$result) 
    {
        echo "No se ha podido realizar la consulta";
    }
     echo("<center>");
     echo "<table border='1' class='table table-bordered table-dark'>";
     echo" <th>nombre_dispositivo</th>";
     echo" <th>memoria_ram</th>";
     echo" <th>camara_front</th>";
     echo" <th>camara_post</th>";
     echo" <th>garantia</th>";
     echo" <th>precio</th>";
     echo" <th>cantidad_pr</th>";

    while ($colum = mysqli_fetch_array($result))
    {
       echo "<tr>";
       echo "<td><center>" . $colum['nombre_dispositivo']. "</td></center>";
       echo "<td><center>" . $colum['memoria_ram'] . "</td></center>";
       echo "<td><center>" . $colum['camara_front']. "</td></center>";
       echo "<td><center>" . $colum['camara_post']. "</td></center>";
       echo "<td><center>" . $colum['garantia']. "</td></center>";
       echo "<td><center>" . $colum['precio']. "</td></center>";
       echo "<td><center>" . $colum['cantidad_pr']. "</td></center>";
       echo "</tr>";
   }
   echo "</table>";
   echo("</center>");

}
function consulta3($memoria){
    
    GLOBAL $connection;

    $consulta = "SELECT * FROM  huawei  where memoria_ram = $memoria";
    $result = mysqli_query($connection,$consulta);
    if(!$result) 
    {
        echo "No se ha podido realizar la consulta";
    }
     echo("<center>");
     echo "<table border='1' class='table table-bordered table-dark'>";
     echo" <th>nombre_dispositivo</th>";
     echo" <th>memoria_ram</th>";
     echo" <th>camara_front</th>";
     echo" <th>camara_post</th>";
     echo" <th>garantia</th>";
     echo" <th>precio</th>";
     echo" <th>cantidad_pr</th>";

    while ($colum = mysqli_fetch_array($result))
    {
       echo "<tr>";
       echo "<td><center>" . $colum['nombre_dispositivo']. "</td></center>";
       echo "<td><center>" . $colum['memoria_ram'] . "</td></center>";
       echo "<td><center>" . $colum['camara_front']. "</td></center>";
       echo "<td><center>" . $colum['camara_post']. "</td></center>";
       echo "<td><center>" . $colum['garantia']. "</td></center>";
       echo "<td><center>" . $colum['precio']. "</td></center>";
       echo "<td><center>" . $colum['cantidad_pr']. "</td></center>";
       echo "</tr>";
   }
   echo "</table>";
   echo("</center>");

}
function consulta4($memoria){
    
    GLOBAL $connection;

    $consulta = "SELECT * FROM  xiaomi  where memoria_ram = $memoria";
    $result = mysqli_query($connection,$consulta);
    if(!$result) 
    {
        echo "No se ha podido realizar la consulta";
    }
     echo("<center>");
     echo "<table border='1' class='table table-bordered table-dark'>";
     echo" <th>nombre_dispositivo</th>";
     echo" <th>memoria_ram</th>";
     echo" <th>camara_front</th>";
     echo" <th>camara_post</th>";
     echo" <th>garantia</th>";
     echo" <th>precio</th>";
     echo" <th>cantidad_pr</th>";

    while ($colum = mysqli_fetch_array($result))
    {
       echo "<tr>";
       echo "<td><center>" . $colum['nombre_dispositivo']. "</td></center>";
       echo "<td><center>" . $colum['memoria_ram'] . "</td></center>";
       echo "<td><center>" . $colum['camara_front']. "</td></center>";
       echo "<td><center>" . $colum['camara_post']. "</td></center>";
       echo "<td><center>" . $colum['garantia']. "</td></center>";
       echo "<td><center>" . $colum['precio']. "</td></center>";
       echo "<td><center>" . $colum['cantidad_pr']. "</td></center>";
       echo "</tr>";
   }
   echo "</table>";
   echo("</center>");

}
function consulta5($memoria){
    
    GLOBAL $connection;

    $consulta = "SELECT * FROM  nokia  where memoria_ram = $memoria";
    $result = mysqli_query($connection,$consulta);
    if(!$result) 
    {
        echo "No se ha podido realizar la consulta";
    }
     echo("<center>");
     echo "<table border='1' class='table table-bordered table-dark'>";
     echo" <th>nombre_dispositivo</th>";
     echo" <th>memoria_ram</th>";
     echo" <th>camara_front</th>";
     echo" <th>camara_post</th>";
     echo" <th>garantia</th>";
     echo" <th>precio</th>";
     echo" <th>cantidad_pr</th>";

    while ($colum = mysqli_fetch_array($result))
    {
       echo "<tr>";
       echo "<td><center>" . $colum['nombre_dispositivo']. "</td></center>";
       echo "<td><center>" . $colum['memoria_ram'] . "</td></center>";
       echo "<td><center>" . $colum['camara_front']. "</td></center>";
       echo "<td><center>" . $colum['camara_post']. "</td></center>";
       echo "<td><center>" . $colum['garantia']. "</td></center>";
       echo "<td><center>" . $colum['precio']. "</td></center>";
       echo "<td><center>" . $colum['cantidad_pr']. "</td></center>";
       echo "</tr>";
   }
   echo "</table>";
   echo("</center>");

}
function consulta6($memoria){
    
    GLOBAL $connection;

    $consulta = "SELECT * FROM  motorola  where memoria_ram = $memoria";
    $result = mysqli_query($connection,$consulta);
    if(!$result) 
    {
        echo "No se ha podido realizar la consulta";
    }
     echo("<center>");
     echo "<table border='1' class='table table-bordered table-dark'>";
     echo" <th>nombre_dispositivo</th>";
     echo" <th>memoria_ram</th>";
     echo" <th>camara_front</th>";
     echo" <th>camara_post</th>";
     echo" <th>garantia</th>";
     echo" <th>precio</th>";
     echo" <th>cantidad_pr</th>";

    while ($colum = mysqli_fetch_array($result))
    {
       echo "<tr>";
       echo "<td><center>" . $colum['nombre_dispositivo']. "</td></center>";
       echo "<td><center>" . $colum['memoria_ram'] . "</td></center>";
       echo "<td><center>" . $colum['camara_front']. "</td></center>";
       echo "<td><center>" . $colum['camara_post']. "</td></center>";
       echo "<td><center>" . $colum['garantia']. "</td></center>";
       echo "<td><center>" . $colum['precio']. "</td></center>";
       echo "<td><center>" . $colum['cantidad_pr']. "</td></center>";
       echo "</tr>";
   }
   echo "</table>";
   echo("</center>");

}
function consulta7($memoria){
    
    GLOBAL $connection;

    $consulta = "SELECT * FROM  apple  where memoria_ram = $memoria";
    $result = mysqli_query($connection,$consulta);
    if(!$result) 
    {
        echo "No se ha podido realizar la consulta";
    }
     echo("<center>");
     echo "<table border='1' class='table table-bordered table-dark'>";
     echo" <th>nombre_dispositivo</th>";
     echo" <th>memoria_ram</th>";
     echo" <th>camara_front</th>";
     echo" <th>camara_post</th>";
     echo" <th>garantia</th>";
     echo" <th>precio</th>";
     echo" <th>cantidad_pr</th>";

    while ($colum = mysqli_fetch_array($result))
    {
       echo "<tr>";
       echo "<td><center>" . $colum['nombre_dispositivo']. "</td></center>";
       echo "<td><center>" . $colum['memoria_ram'] . "</td></center>";
       echo "<td><center>" . $colum['camara_front']. "</td></center>";
       echo "<td><center>" . $colum['camara_post']. "</td></center>";
       echo "<td><center>" . $colum['garantia']. "</td></center>";
       echo "<td><center>" . $colum['precio']. "</td></center>";
       echo "<td><center>" . $colum['cantidad_pr']. "</td></center>";
       echo "</tr>";
   }
   echo "</table>";
   echo("</center>");

}

function Consultaprecio($num1,$num2,$marca)
{
    GLOBAL $connection;

    $consulta = "SELECT * FROM  $marca  where precio >= $num1 and precio <= $num2";
    $result = mysqli_query($connection,$consulta);
    if(!$result) 
    {
        echo "No se ha podido realizar la consulta";
    }
     echo("<center>");
     echo "<table border='1' class='table table-bordered table-dark'>";
     echo" <th>nombre_dispositivo</th>";
     echo" <th>memoria_ram</th>";
     echo" <th>camara_front</th>";
     echo" <th>camara_post</th>";
     echo" <th>garantia</th>";
     echo" <th>precio</th>";
     echo" <th>cantidad_pr</th>";

    while ($colum = mysqli_fetch_array($result))
    {
       echo "<tr>";
       echo "<td><center>" . $colum['nombre_dispositivo']. "</td></center>";
       echo "<td><center>" . $colum['memoria_ram'] . "</td></center>";
       echo "<td><center>" . $colum['camara_front']. "</td></center>";
       echo "<td><center>" . $colum['camara_post']. "</td></center>";
       echo "<td><center>" . $colum['garantia']. "</td></center>";
       echo "<td><center>" . $colum['precio']. "</td></center>";
       echo "<td><center>" . $colum['cantidad_pr']. "</td></center>";
       echo "</tr>";
   }
   echo "</table>";
   echo("</center>");

 }
?>
