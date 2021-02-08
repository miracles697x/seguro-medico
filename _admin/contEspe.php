<?php

?>
			
	<div class="container margen">
	<div class="row">
	<h3 >Modificar Especialidad</h3>
		<div class="col-md-10" align="center" >
		
			<div class="box">
			
				<form class="form-group" method="post" enctype="multipart/form-data" action="../bin/modEspeci.php">
			
				
					<div class="form-group row">
					
					<input type="text"   value="<?php echo $info['codigo']?>" class="form-control col-sm-4"  name="codigo" readonly>
					<br>
					<br>
					<input type="text"  value="<?php echo $info['descripcion']?>" class="form-control col-sm-4" name="descripcion" required>
					<br>
					<br>
					<label  class="col-md-1" align="right"></label>
					<button type="submit"  class="btn btn-primary">Guardar</button>
					

				</form>
			</div>