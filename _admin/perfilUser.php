<div class="container margen">
	
		
			<div class="manga-info-container" align="center">
		
		<div class="main-content" style="padding-left: 30px; padding-top: 10px" >
					<h1>Datos del Usuario</h1>
				
				<div class="row" >
					<h3  align="left" class="col">Usuario : <?php echo $user['usuario'] ?></h3>
				</div>
				<div class="row">
				  <?php foreach ($datos4 as $dato): ?>
					<h3 align="left" class="col"> Rol : <?php echo $dato['Rol'] ?></h3>
				  <?php endforeach ?>   

				</div>
				<div class="row" style="padding-bottom: 40px;">
					<div class="col">
					<a class="btn btn-success" data-toggle="modal" data-target="#basicExampleModal">Cambiar contraseña</a> 	
					</div>
				</div>

		</div>


<div class="modal fade" id="basicExampleModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      
        <h4 class="modal-title" style="align-items: center;">Cambiar Contraseña</h4>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
      	 <form action="../bin/cambiar.php" method="post">
      	 	<input type="text" name="id" id="id" style="display: none" value="<?php echo $dato['id']; ?>">
        <input type="password" name="password" placeholder="Contraseña" class="form-control"><br>
        <button type="submit" name="submit" class="btn btn-primary">Guardar</button>
         
    	</form>

         </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--FIN MODAL -->




				<br>
			</div>
		</div>
	


</div>