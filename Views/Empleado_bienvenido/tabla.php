<?php
$datos=$datos[0];
while($row=mysqli_fetch_array($datos))
    echo "<tr>
    <td>{$row['Nombre']}</td>
    <td>{$row['Apellido_patern']}</td>
    <td>{$row['Apellido_matern']}</td>
    <td>{$row['email']}</td>
  
    <td><a class='glyphicon glyphicon-remove btn_eliminar'  href='#!' data-id='{$row['id_persona']}'></a></td>
    <td><a class='glyphicon glyphicon-refresh btn_modificar' href='#!' data-id='{$row['id_persona']}'></a></td></tr>";
?>

