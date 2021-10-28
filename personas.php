<?php
include ("navbar.php");
include ("footer.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Lista socios</title>
<body>
<header>
<div class="container-fluid bg-dark border-bottom">
    <?php echo navbar();?>
</div>
</div>
</header>

    <main>
<?PHP
      $datosCA = array();
      $datosCA["nombre"]= "Roxana Lavazza";
      $datosCA["edad"]=49;
      $datosCA["email"]="rlavazza@gmail.com";
      $datosCA["dni"]= 22353226;
       
      $datosCB = array();
      $datosCB["nombre"]= "Facundo Lopez";
      $datosCB["edad"]= 36;
      $datosCB["email"]="faculopeza@gmail.com";
      $datosCB["dni"]= 34525682;

      $datosCC = array();
      $datosCC["nombre"]= "Agustina Porto";
      $datosCC["edad"]= 20;
      $datosCC["email"]="agus@gmail.com";
      $datosCC["dni"]=  41228350;
      
      $datosCD = array();
      $datosCD["nombre"]= "Matilda Suarez";
      $datosCD["edad"]= 28;
      $datosCD["email"]="matusuarez@gmail.com";
      $datosCD["dni"]= 36259774 ;

      $datosCE = array();
      $datosCE["nombre"]= "Mateo Fernandez";
       $datosCE["edad"]= 42;
      $datosCE["email"]="fernamateo@gmail.com";
      $datosCE["dni"]= 30998221;

      $datosCF = array();
      $datosCF["nombre"]= "Florencia Souto";
      $datosCF["edad"]= 54;
      $datosCF["email"]="fsouto@gmail.com";
      $datosCF["dni"]= 18526369;
  
    $registro[0]=$datosCA;
    $registro[1]=$datosCB;
    $registro[2]=$datosCC;
    $registro[3]=$datosCD;
    $registro[4]=$datosCE;
    $registro[5]=$datosCF;
   
    ?>
<div class="container pt-4 pb-5">
 <table class="table  bg-light my-5">
<tr>
<th><h2>Nombre y apellido</h2></th>
<th><h2>DNI</h2></th>
<th><h2>Edad</h2></th>
<th><h2>Email</h2></th>
</tr>

<?php for ($i=0; $i <count ($registro); $i++){  ?>
        <tr>
        <td><?php echo $registro[$i]["nombre"] ?> </td>
        <td><?php echo $registro[$i]["dni"]?> </td>
        <td><?php echo $registro[$i]["edad"]?> </td>
        <td><?php echo $registro[$i]["email"] ?> </td>
        </div>
 <?php  
     } 
?> 
</table>
 </div>
 
</main>
<footer class="fixed-bottom">
<?php echo footer();?>   
</footer>

</body>
</html>