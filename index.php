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
    <title>Portada</title>
<body class="portada">
<header>
<div class="container-fluid bg-dark border-bottom">
    <?php echo navbar();?>
</div>
 </header>
<main>
 <div class="container-fluid">
     <div class="row my-6 mt-5 ms-4">
  <h1>Intranet para socios</h1>
  </div>
  <div class="row ms-4 my-5 ">
      <div class="col-12 col-sm-8">
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem voluptas eum iurlorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem voluptas eum iuree porro adipisci iste quo nihil non aspernatur nulla sint, dolores suscipit impedit architecto iusto facilis ad in accusamus.
  </p>
  <p>lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem voluptas eum iure porro adipisci iste quo nihil non aspernatur nulla sint, dolores suscipit impedit architecto iusto facilis ad in accusamus.
  </p>
  <p>lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem voluptas eum .</p>
  </div>
  </div>
</main>

<footer class="fixed-bottom">
<?php echo footer();?>   
</footer>
</body>
</html>