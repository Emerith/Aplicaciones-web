<?php
$datos=$datos[0];
$url=URL;
while($row=mysqli_fetch_array($datos))
    echo "
<div class=\"col-md-7\">
            <a href=\"#\">
                <img class=\"img-fluid rounded mb-3 mb-md-0\" src=\"http://placehold.it/700x300\" alt=\"\">
            </a>
 </div>
<div class=\"col-md-5\">
       <h3>{$row['Nombre']}</h3>
       <p>{$row['descripcion']}</p>
       <p>Lugar: {$row['lugar']}</p>
       <p>Fecha: {$row['fecha']}</p>
       <p>Fecha de fin: {$row['Fecha_fin']}</p>
       <p>Horario: {$row['Horario']}</p>
      
 </div>
";
?>

