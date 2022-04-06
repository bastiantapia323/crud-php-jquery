<?=$cabecera?>
<br>
<div class="row justify-content-center mt-2">
  <div class="col-lg-4">
    <div class="card">
      <div class="card-header">
          Input Personas
        </div> 
        <div class="card-body bg-dark">
        <div class="form-group">
            <label for="">IdPersona</label> 
            <select name="id" id="id" class="form-control ">
            <option value='0'>-- Select id --</option>
            <?php
            foreach($nombre as $row)
            {
                echo '<option value="'.$row["id"].'">'.$row["id"].'</option>';
            }
            ?>
            </select>  
         </div>
         <div class="form-group bg-light">
            <label for="">Nombre</label>
            <select name="nombre" id="nombre" class="form-control">
            <option value='0'>-- Select name --</option>
            <?php
            foreach($nombre as $row)
            {
                echo '<option value="'.$row["nombre"].'">'.$row["nombre"].'</option>';
            }
            ?>
            </select>  
         </div>
         <div class="form-group bg-light">
            <label for="">Email</label>
            <select name="email" id=email class="form-control">
            <option value='0'>-- Select email --</option>
            <?php
            foreach($nombre as $row)
            {
                echo '<option value="'.$row["email"].'">'.$row["email"].'</option>';
            }
            ?>
            </select>  
         </div>
         <div class="form-group bg-light">
            <label for="">nro_documento</label>
            <select name="nro_documento" id=nro_documento class="form-control">
            <option value='0'>-- Select number document --</option>
            <?php
            foreach($nombre as $row)
            {
                echo '<option value="'.$row["nro_documento"].'">'.$row["nro_documento"].'</option>';
            }
            ?>
            </select>  
         </div>
      </div>
    </div>
  </div>
<?=$piepagina?>