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
    
    <td><a class='glyphicon glyphicon-remove btn_eliminar'  href='#!' data-id='{$row['id_evento']}'></a></td>
    <td><a class='glyphicon glyphicon-refresh btn_modificar' href='#!' data-id='{$row['id_evento']}'></a></td></tr>";
?>
