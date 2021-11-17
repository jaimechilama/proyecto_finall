<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="styles/styles.css" rel="stylesheet" type="text/css">
    <title>Hello, world!</title>
    <?php
 include 'datos/datos.php';
 conmysql();
  
 ?>
</head>
<body>
    <center>
    <h1>inventariojaimecell</h1>
    </center>
    <div class ="padre">

    <form action="index.php" method="POST" >
  <div class="form-group">
    <label for="exampleFormControlInput1">Marca del telefono</label>
    <input name="marca" class="form-control" id="exampleFormControlInput1" placeholder="Motorola,samsung,lg etc.">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">memoria ram</label>
    <select  memoria="exampleFormControlSelect1" name="memoria">
      <option value="null">null</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="8">8</option>

    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect2">Precio</label>
    <select name="precio">
    <option value="null">null</option> 
   <option value="1">100.000-500.000</option> 
   <option value="2">500.000-1.000.000</option> 
   <option value="3">1.000.000-2.000.000</option>
   <option value="4">2.000.000-3.0000.000</option> 
   <option value="5">3.000.000-4.000.000</option> 
   <option value="6">4.000.000-5.000.000</option> 
   <option value="7">5.000.000-6.000.000</option> 
</select>
  </div>

  <label><input type="checkbox" name="todas"id="cbox1" value="first_checkbox"> todas las marcas</label><br>
  <button type="submit">buscar</button>
</form>
</div>
<?php


  $marca = $_POST['marca'];
  $memoria = $_POST['memoria'];
  echo 'Marca'. $marca;
  
  echo 'memoria' . $memoria;
  $todas=$_POST['todas'];
  if( (isset($_POST['memoria']) &&($_POST['memoria']!="null")&&!empty($_POST['memoria']))){
        
    consulta10($marca,$memoria);
   
   }
   else{
    consulta($marca);
   }

   $precio=$_POST['precio'];
   if( (isset($_POST['precio']) &&($_POST['precio']!="null")&&!empty($_POST['precio']))){
        
    switch($precio){
   
      case "1":
      Consultaprecio(100000 , 500000,$marca);
      break;
      
   
   case "2":
   Consultaprecio(500000 , 1000000,$marca);
   break;
   
   
   case "3":
   Consultaprecio(1000000 , 2000000,$marca);
   break;
   
   
   
   case "4":
   Consultaprecio(2000000 , 3000000,$marca);
   break;
   
   
   
   case "5":
   Consultaprecio(3000000 , 4000000,$marca);
   break;
   
   
   
   case "6":
   Consultaprecio(4000000 , 5000000,$marca);
   break;
   
   
   
   case "7":
   Consultaprecio(5000000 , 6000000,$marca);
   break;
      }
   
   }
   

  /*if($todas){consulta2($memoria);
    consulta3($memoria);
    consulta4($memoria);
    consulta5($memoria);
    consulta6($memoria);
    consulta7($memoria);}*/
    ?>
  
</body>
</html>