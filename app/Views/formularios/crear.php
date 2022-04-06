   <?=$cabecera?>

    <div class="row justify-content-center mt-2">
   <div class="col-lg-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Ingresar datos de personas</h5>
        <p class="card-text">

        <form method="post" action="<?=base_url("/guardar")?>" enctype="multipart/form-data"> 


         

        <div class="form-group">
            <label for="nombre ">Nombre:</label>
            <input id="nombre" class="form-control" type="text" name="nombre">         
        </div>  
        
        <div class="form-group">
            <label for="email ">Email:</label>
            <input id="email" class="form-control" type="text" name="email">            
        </div>  

        <div class="form-group">
            <label for="nro_documento ">Nro_documento:</label>
            <input id="nro_documento" class="form-control" type="text" name="nro_documento">           
        </div>
        </br>
</br>
        <button class="btn btn-success" type="submit">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-save-fill" viewBox="0 0 16 16">
  <path d="M8.5 1.5A1.5 1.5 0 0 1 10 0h4a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h6c-.314.418-.5.937-.5 1.5v7.793L4.854 6.646a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l3.5-3.5a.5.5 0 0 0-.708-.708L8.5 9.293V1.5z"/>
</svg>   
        Guardar</button> 

        </form>

        </p>

        </div>
        </div>
        </div>
        </div>

    <?=$piepagina?>
