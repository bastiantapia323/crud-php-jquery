<?=$cabecera?>

<div class="row justify-content-center mt-2">
   <div class="col-lg-4">
<div class="card">
      <div class="card-body">
        <h5 class="card-title">Ingresar datos de personas</h5>
        <p class="card-text">

        <form method="post" action="<?=base_url("/actualizar")?>" enctype="multipart/form-data"> 


        <input type="hidden" name="id"  value="<?=$formulario['id']?>">
       

 
        <div class="form-group">
            <label for="nombre ">Nombre:</label>
            <input id="nombre" value="<?=$formulario['nombre']?>" class="form-control" type="text" name="nombre">         
        </div>  
        
        <div class="form-group">
            <label for="email ">Email:</label>
            <input id="email" value="<?=$formulario['email']?>" class="form-control" type="text" name="email">            
        </div>  

        <div class="form-group">
            <label for="nro_documento ">Nro_documento:</label>
            <input id="nro_documento" value="<?=$formulario['nro_documento']?>" class="form-control" type="numeric" name="nro_documento">           
        </div>
        </br>
</br>
        <button class="btn btn-success" type="submit">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-stack" viewBox="0 0 16 16">
  <path d="m14.12 10.163 1.715.858c.22.11.22.424 0 .534L8.267 15.34a.598.598 0 0 1-.534 0L.165 11.555a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.66zM7.733.063a.598.598 0 0 1 .534 0l7.568 3.784a.3.3 0 0 1 0 .535L8.267 8.165a.598.598 0 0 1-.534 0L.165 4.382a.299.299 0 0 1 0-.535L7.733.063z"/>
  <path d="m14.12 6.576 1.715.858c.22.11.22.424 0 .534l-7.568 3.784a.598.598 0 0 1-.534 0L.165 7.968a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.659z"/>
</svg>    
        Guardar</button> 

        </form>

        </p>

        </div>
        </div>
        
        </div>
        </div>

<?=$piepagina?>