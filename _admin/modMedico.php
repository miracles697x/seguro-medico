 
<div class="container margen">
	<div class="row">
	<div class="main-content">
<div class="manga-info-container">

		<div class="col-md-11" align="center" >
			<div class="box">
				<form class="form-group" method="post" action="../bin/mod.php" enctype="multipart/form-data">
					<h2>Modificar Datos</h2>
					<div class="form-group row" align="center">
						<?php foreach ($informacion as $datos):?>
					<label  class="col-md-3 col-form-label" align="left">Matricula : </label>
					<input type="text" class="form-control col-md-9 " value="<?php echo $datos['id']?>" name="id" placeholder="Matricula Profesional" readonly>
					<br>
					<p  class="col-md-3 col-form-label" align="left">Nombres : </p>
					<input type="text" value="<?php echo $datos['nombres']?>" class="form-control col-sm-9" name="nombres" placeholder="Nombres" required>
					<br>
					<label  class="col-md-3 col-form-label" align="left">Apellidos : </label>
					<input type="text" value="<?php echo $datos['apellidos']?>" class="form-control col-sm-9" name="apellidos" placeholder="Apellidos" required>
					<br>
					<label  class="col-md-3 col-form-label" align="left">Celular : </label>
					<input type="text" value="<?php echo $datos['telefono']?>" class="form-control col-sm-9" name="celular" placeholder="Celular o Telf" required>
					<br>
					<label  class="col-md-3 col-form-label" align="left">Fecha : </label>
					<input type="date" value="<?php echo $datos['fecha_nac']?>" class="form-control col-sm-9" name="fecha" required>
					<br></br>
					<label  class="col-md-6 col-form-label" align="left"></label>
					<input type="submit" name="enviar" value="Subir" class="btn btn-success">
					 <?php endforeach ?>   
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
	</div>
</div>