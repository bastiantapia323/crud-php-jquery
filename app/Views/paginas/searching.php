<?=$cabecera?>
<br>
<table class="table">
  <tr>
    <th>ID</th>
    <th>nombre</th>
    <th>email </th>
    <th>nro_documento </th>
    <th>id_ingeniero</th>
  </tr>
  <tbody>
  <?php
  foreach($datos as $dato){
    echo "<tr>";
     echo "<td>".$dato['id']."</td>";
     echo "<td>".$dato['nombre']."</td>";
     echo "<td>".$dato['email']."</td>";
     echo "<td>".$dato['nro_documento']."</td>";
     echo "<td>".$dato['ing_nombre']."</td>";
     echo "</tr>";
  }
  ?>
  </tbody>
</table>
<?=$piepagina?>