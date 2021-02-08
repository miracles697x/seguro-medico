<?php $informaciones = new Medicos();
$informacion = $informaciones->datoMedico($_GET['id']); ?>
			
	<div class="container margen">
	<div class="row">
	



		<div class="col-md-10" align="center" >
			<div class="box">
				<form class="form-group" method="post" action="../bin/mod.php" enctype="multipart/form-data">
					<h2 >Modificar Médico</h2>
					<div class="form-group row">
					<label  class="col-sm-3 col-form-label" align="right">Matricula : </label>
					<input type="text" readonly value="<?php echo $informacion['id']?>" class="form-control col-sm-8" name="id" placeholder="Matricula Profesional">
					<br>
					<p  class="col-sm-3 col-form-label" align="right">Nombres : </p>
					<input type="text" value="<?php echo $informacion['nombres']?>" class="form-control col-sm-8" name="nombres" placeholder="Nombres">
					<br>
					<label  class="col-sm-3 col-form-label" align="right">Apellidos : </label>
					<input type="text" value="<?php echo $informacion['apellidos']?>" class="form-control col-sm-8" name="apellidos" placeholder="Apellidos">
					<br>
					<label  class="col-sm-3 col-form-label" align="right">Celular : </label>
					<input type="text" value="<?php echo $informacion['telefono']?>" class="form-control col-sm-8" name="celular" placeholder="Celular o Telf">
					<br>
					<label  class="col-sm-3 col-form-label" align="right">Fecha : </label>
					<input type="date" value="<?php echo $informacion['fecha_nac']?>" class="form-control col-sm-8" name="fecha" >
					<br><br>
				
					<label  class="col-sm-7 col-form-label" align="right"></label>
					<input type="submit" name="enviar" value="Subir" class="btn btn-success">
				</form>
			</div>
