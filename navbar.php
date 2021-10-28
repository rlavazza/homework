<?php
function navbar(){
    $nvBar= "<nav class=\"navbav\" role=\"navigation\">
    <div class=\"row\">
                <div class=\"col-12\">
                    <ul class=\"nav justify-content-md-center pt-3\">
                        <li class=\"nav-item mx-4\">
                            <a class=\"nav-link\" href=\"index.php\">PORTADA</a>
                         </li>
                         <li class=\"nav-item mx-4\">
                             <a class=\"nav-link\" href=\"personas.php\">LISTA DE PACIENTES</a>
                            </li>
                         <li class=\"nav-item mx-4\">
                            <a class=\"nav-link\" href=\"registro.php\">REGISTRO</a>
                            </li>
                            <li class=\"nav-item mx-4\">
                                <a class=\"nav-link\" href=\"formulario.php\">FORMULARIO</a>
                            </li>
                        </ul>
                    </div>
                </div>;
                </div>
               </nav>";
               return $nvBar;
               
}

    ?>    