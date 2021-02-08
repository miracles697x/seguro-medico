

<div class="Container margen" style="margin-top: 80px;">
<div class="row">
     
 <a href="agregarAsegurado.php" class="btn btn-success">Agregar</a>
</div>
 
      

      
   <div class="col">
   
     <table class="table table-striped table-bordered table-sm" cellspacing="0" width="100%" align="center" id="dtBasicExample">
      <h2 align="center">Tabla de Asegurados</h2>
      <thead class="header black white-text" align="center">
        <tr>
           
            <th scope="col">C.I</th>
            <th scope="col">Nombre</th>
            <th scope="col">Ap. Paterno</th>
            <th scope="col">Ap. Materno</th>
            <th scope="col">Codigo</th>
            <th scope="col">Institucion</th>
            <th scope="col" >Operacion</th>



        </tr>
      </thead>
      <tbody align="center">
        <?php 
          
            foreach ($datos1 as $dato): 
        ?>
        <tr>
         
          <td  scope="row"><?php echo $dato['ci']; ?></td>
          <td><?php echo $dato['nombres']; ?></td>
          <td><?php echo $dato['apellidopaterno']; ?></td>
          <td><?php echo $dato['apellidomaterno']; ?></td>
        
          <td><?php echo $dato['codigo']; ?></td>
          <td><?php echo $dato['descripcion']; ?></td>
     

<td>

                <a href="bin/eliminarAseg.php?id=<?php echo $dato['id']?> &usuario=<?php echo $user['usuario']; ?>" id="eliminar" title="Eliminar" onclick="return Confirmar()">
                    <i class="fas fa-trash fa-lg red-text ml-3" aria-hidden="true"></i>
                 </a>
                 <a href="modAseg.php?id=<?php echo $dato['id']; ?>">
                  <i class="fas fa-edit fa-lg amber-text ml-3"   title="Modificar"></i>
            
                 </a>
                   <i data-toggle="modal" data-target="#myModal<?php echo $dato['id']; ?>"  href="modAseg.php?id=<?php echo $dato['id']; ?>" class="fas fa-eye fa-lg cyan-text ml-3" aria-hidden="true"  title="Detalles"></i>

                    <a href="reporteA.php?id=<?php echo $dato['id']; ?>" target = '_blank'>
                    <i class="fas fa-print fa-lg green-text ml-3" aria-hidden="true"></i>
                    </a>
          </td>
          

<div class="modal fade" tabindex="-1" role="dialog" id="myModal<?php echo $dato['id']; ?>">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      
        <h4 class="modal-title" style="align-items: center;">Ficha de Asegurado</h4>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
       

<div class="card mb-3">
 <img class="card-img-top" src="../img/<?php echo $dato['foto']; ?>" alt="Card image cap" style="width: auto;height: 300px">
  <div class="card-body">
    <h5 class="card-title">Nombre : <?php echo $dato['nombres'].' '; echo $dato['apellidopaterno'].' '; echo $dato['apellidomaterno']?></h5>
    <p>Carnet : <?php echo $dato['ci']; ?></p>

<?php 
 $fecha = date("d/m/Y", strtotime($dato['fecha_nac']));
 ?>
 <p>Fecha Nac. : <?php echo $fecha; ?></p>
    <p class="card-text">Cod. Asegurado : <?php echo $dato['codigo']; ?></p>
     <p class="card-text">Institucion : <?php echo $dato['descripcion']; ?></p>
      <p class="card-text">Domicilio : <?php echo $dato['domicilio']; ?></p>
       <p class="card-text">Inicio Vig. : <?php echo $dato['inivigencia']; ?></p>
        <p class="card-text">Fin Vig. : <?php echo $dato['finvigencia']; ?></p>
         <p class="card-text">Tipo : <?php echo $dato['Tipo']; ?></p>


   
  </div>

     
      </div>
         </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--FIN MODAL -->

        </tr>







      <?php endforeach ?>
      </tbody>

    </table>

   </div> 
  </div>
</div>



<script type="text/javascript" src="js/function.js"></script>

<script type="text/javascript">
  $(document).ready(function () {
  $('#dtBasicExample').DataTable();
  $('.dataTables_length').addClass('bs-select');
});


//para el alert de eliminar

$()


  function Confirmar(){
    var respuesta = confirm("Estas Seguro de Eliminar?");

    if(respuesta== true)
    {
      return true;
    }else{
      return false;
    }
  }


</script>