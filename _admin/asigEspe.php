
<div class="container margen">
<div class="main-content">
<div class="manga-info-container">
<div class="row">

<div class="col-md-12">
<nav aria-label="breadcrumb" >
  <ol class="breadcrumb">
   <?php foreach($informacion as $datos2): ?>
 
    <li class="breadcrumb-item active" aria-current="page">Medico : <?php echo $datos2['nombres'].' '; echo $datos2['apellidos'];?></li>
  <?php endforeach ?>
  </ol>
</nav>
</div>

<div class="col-md-10">
<form class="form-group" method="post" id="formulario2" enctype="multipart/form-data">

<input type="text" class="form-control col-md-3" readonly value="Especialidad">
<div class="row" id="esp" style="margin-top:5px;">

<?php foreach($espe as $datos3): ?>

<div class="col-md-4" align="center" style="width:700px;">
			<label id="es" class="form-control" ><?php echo $datos3['descripcion']; ?>
      <a href="../bin/eliminarEM.php?id=<?php echo $datos3['id']?>&idM=<?php echo $datos2['id']?>"><img align="right" src="../img/del.png" style="width: 20px; height:20px;"></a></label> 
            
</div>
<?php endforeach ?>

</div>
</form>
</div>


<div class="col-md-10">
<form class="form-group" method="post" id="formulario" enctype="multipart/form-data">
<input type="text"   value="<?php echo $datos2['id']?>" class="form-control col-sm-4"  name="idM" readonly 
style="display:none;"><br>
 
<div class="row">
  
<div class="col-md-6">
<select  name="especia" class="form-control" required>
<option value="">Seleccione la especialidad</option>
						<?php foreach($info as $datos): ?>
           
						<option value="<?php echo $datos['codigo']; ?>"><?php echo $datos['descripcion']; ?></option>
           
            <?php endforeach ?>
					</select>


</div>    
    
    <div class="col-md-4">
    <input type="submit" id="ref" name="enviar" value="Agregar" class="btn btn-success">          
          <div class="marco">
					<div id="vista-previa"></div>
					<div id="res"></div>
				</div>
    </div>

</div>
</form>
</div>



<div class="col-md-12">
<form action="" name="formulario3" method="post" enctype="multipart/form-data">
<input type="text"   value="<?php echo $datos2['id']?>" class="form-control col-sm-4"  name="idM" readonly style="display:none;"><br>
 
  <br>
<div class="row align-items-end">
  <div class="col-md-4">
  <label for="">Hora de Atención</label>

  <select name="dia" class="form-control" >
  <option value="">Seleccione un dia</option>
    <option value="Lunes">Lunes</option>
    <option value="Martes">Martes</option>
    <option value="Miercoles">Miercoles</option>
    <option value="Jueves">Jueves</option>
    <option value="Viernes">Viernes</option>
    <option value="Sabado">Sabado</option>
    <option value="Domingo">Domingo</option>
  </select>
  </div>
  <div class="col-md-3">  

<label for="">Hora de Inicio</label>
<input type="time" name="hora1" class="form-control "  required>

  </div>
  <div class="col-md-3">  
    
<label for="">Hora de Fin</label>
<input type="time" name="hora2" class="form-control"  required>
 
  </div>
<div class="col-md-2 ">
<input type="button" id="ref" name="generar" onClick="enviar('../bin/action.php')" value="Agregar" class="btn btn-success">          
  
</div>


</div>
  <br>
</form>

<div class="row">

  
  <div class="col-md-5" align="center" style="width:550px;">
  <?php foreach($hora as $datos5): ?>
      <label id="es" class="form-control" ><?php echo $datos5['dia']; ?> de : 
        <?php echo $datos5['horaini']?> a <?php echo $datos5['horafin']?>
        <a href="../bin/eliminarHora.php?id=<?php echo $datos5['id']?>&idM=<?php echo $datos2['id']?>">
        <img align="right" src="../img/del.png" style="width: 20px; height:20px;"></a></label> 
      <?php endforeach ?>      
</div>
  

</div><br>

</div>


</div>
</div>
</div>
</div>

