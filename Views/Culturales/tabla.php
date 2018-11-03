<?php
$datos=$datos[0];
while($row=mysqli_fetch_array($datos))
    echo "<tr>
    <td>{$row['Nombre']}</td>
    <td>{$row['descripcion']}</td>
    <td>{$row['lugar']}</td>
    <td>{$row['fecha']}</td>
    <td>{$row['Fecha_fin']}</td>
    <td>{$row['Horario']}</td>
    
    <td><a class='btn btn-default btn_eliminar'  href='#!' data-id='{$row['id_evento']}'>Eliminar</a></td>
    <td><a class='btn btn-default btn_modificar' data-id='{$row['id_evento']}' href='#!'>Actualizar</a></td></tr>";
?>
