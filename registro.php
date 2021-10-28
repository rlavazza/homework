<?php
include("navbar.php");
include("footer.php");
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

<body>
    <header>
        <div class="container-fluid bg-dark border-bottom">
            <?php echo navbar(); ?>
        </div>
    </header>
    <main>
        <div class="container pt-5">

            <h3 class="text-center py-4">Completá los datos para acceder a tu cuenta:</h3>
            <div class="col-12 col-sm-7 mx-auto">
                <div class="row box py-3 mt-3 mb-5">
                    <div class="col-12 col-sm-10 mx-auto mt-3">
                        <?php
                        include_once("funciones.php");
                            if (isset($_POST["enviar"]) && $_POST["nombreUs"] != "" && $_POST["emailUs"] != "" && $_POST["passUs"] != "") {
                            echo "Formulario enviado.";
                            $nombreUsuario = $_POST["nombreUs"];
                            $emailUsuario = $_POST["emailUs"];
                            $passUs = md5($_POST["passUs"]);
                            echo login ($nombreUsuario,$emailUsuario, $passUs);
                            } 
                            else {

                        ?>
                            <form action="registro.php" method="POST">
                                <div class="pt-1 pb-2">
                                <label for="txtl" class="form-label">Usuario:</label>
                                    <input type="text" class="form-control border-dark border-2" name="nombreUs">
                                </div>
                                <div class="py-2">
                                <label for="email" class="form-label">Email:</label>
                                    <input type="email" class="form-control border-dark border-2" name="emailUs">
                                </div>
                                <div class="py-2">
                                <label for="password" class="form-label">Contrasenia:</label>
                                    <input type="password" class="form-control border-dark border-2" name="passUs">
                                    </div>
                                    <div class="d-grid gap-2 py-4">
                                    <button class="btn btn-dark border-light px-3 my-2" type="submit" name="enviar">Enviar datos</button> 
                                     </div>
                                </div>
                            </form>
                        <?php
                        }
                        ?>

                    </div>
                </div>
            </div>
    </main>

    <footer>
        <?php echo footer(); ?>
    </footer>
</body>

</html>