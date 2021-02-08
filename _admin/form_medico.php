<div class="container margen">
	<div class="row">
	<div class="main-content">
<div class="manga-info-container">
		<div class="col-md-10" align="center" >
			<div class="box">
				<form  class="form-group" method="post" action="../bin/upload_imagenes.php" enctype="multipart/form-data">
					<input type="text"  class="form-control" name="nameUser" value="<?php echo $user['usuario'];?>" readonly style="display: none;">
    				<?php 
    				    

date_default_timezone_set('UTC');
date_default_timezone_set("America/La_Paz");
$fecha = date("d-m-Y H:i:s");

echo $fecha;
    				 ?>     
					<h2>Agregar Medico</h2>
					<div class="form-group row">
					<label  class="col-sm-3 col-form-label" align="right">Matricula : </label>
					<input type="text" class="form-control col-sm-8" name="id" placeholder="Matricula Profesional" required>
					<br>
					<p  class="col-sm-3 col-form-label" align="right">Nombres : </p>
					<input type="text" class="form-control col-sm-8" name="nombres" placeholder="Nombres" required>
					<br>
					<label  class="col-sm-3 col-form-label" align="right">Apellidos : </label>
					<input type="text" class="form-control col-sm-8" name="apellidos" placeholder="Apellidos" required>
					<br>
					<label  class="col-sm-3 col-form-label" align="right">Celular : </label>
					<input type="text" class="form-control col-sm-8" name="celular" placeholder="Celular o Telf" required>
					<br>
					<label  class="col-sm-3 col-form-label" align="right">Fecha : </label>
					<input type="date" class="form-control col-sm-8" name="fecha" required>
					<br><br>
					
					<label  class="col-sm-3 col-form-label" align="right">Foto : </label>
					<div class="custom-file col-sm-8">

					  <input type="file" name="imagen" class="custom-file-input" id="customFile" required>
					  <label class="custom-file-label" for="customFile">Fotografia</label>
					</div>
					<br></br>
					<label  class="col-sm-6 col-form-label" align="right"></label>
					<input type="submit" name="enviar" value="Subir" class="btn btn-success">
				</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
