<?php
$datos=$datos[0];
while($row=mysqli_fetch_array($datos))
    echo "<tr>
    <td>{$row['Nombre']}</td>
    <td>{$row['Apellido_patern']}</td>
    <td>{$row['Apellido_matern']}</td>
    <td>{$row['email']}</td>
    <td>{$row['pass']}</td>
    
    <td><a class='btn btn-default btn_eliminar'  href='#!' data-id='{$row['id_persona']}'>Eliminar</a></td>
    <td><a class='btn btn-default btn_modificar' data-id='{$row['id_persona']}' href='#!'>Actualizar</a></td></tr>";
?>

