


<div class="container margen" style="margin-top: 100px;">

  <div class="row">
   
      

   

   <div class="row col-md-12" >
    <div class="col col-md-12" style="text-align: center;">   
<h2 id="tittle">Tabla de Especialidades</h2>

    </div>
<div class="row col-md-4">
  
<div class="col" >
       <a target = '_blank' href="generarR.php" title="Reporte">
           <i class="fas fa-print fa-2x cyan-text ml-3" aria-hidden="true"></i>
       </a>
   
    <i class="fas fa-plus-square fa-2x green-text ml-3" aria-hidden="true" data-toggle="modal" data-target="#agregarEspecialidad" title="Agregar"></i>

</div>

</div>
      




   </div> 
  </div>

        
  <table class="table" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%" align="center" id="dtBasicExample">
      
  <thead class="header black white-text" align="center">
    <tr>

      <th class="th-sm">ID</th>
    <th class="th-sm">Descripcion</th>
    <th class="th-sm">Acciones</th>
    </tr>
    
  </thead>
  <tbody align="center">
    <?php foreach ($datos1 as $dato): ?>
    <tr>
    <td><?php echo $dato['codigo']?></td>
    <td><?php echo $dato['descripcion']?></td>
    
    <td>
       
    <i class="fas fa-edit fa-lg amber-text ml-3" aria-hidden="true"  data-toggle="modal" data-target="#modalMod<?php echo $dato['codigo']; ?>"></i>
     
        <a href="eliminarEspe.php?id=<?php echo $dato['codigo']?> &usuario=<?php echo $user['usuario']; ?>" id="eliminar" title="Eliminar" onclick="return Confirmar()">
          <i class="fas fa-trash fa-lg red-text ml-3" aria-hidden="true"></i>
        </a>
        
            <?php if($dato['estado']==1){?>


              <a href="../bin/estado.php?codigo=<?php echo $dato['codigo'] ?>&estado=<?php echo $dato['estado']?>" title="Activo">
                <i class="fas fa-check-circle fa-lg green-text ml-3" aria-hidden="true"></i>
       
              </a>
            <?php }else { ?>
              <a href="../bin/estado.php?codigo=<?php echo $dato['codigo'] ?>&estado=<?php echo $dato['estado']?>" title="Inactivo">
                  <i class="fas fa-times-circle fa-lg red-text ml-3" aria-hidden="true"></i>
        
              </a>
            <?php } ?>

           
    </td>
    



  <!--MODAL MODIFICAR ESPECIALIDAD-->
  <div class="modal fade" id="modalMod<?php echo $dato['codigo']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Agregar Especialidad</h5>
        
      </div>
      <div class="modal-body">
            <form class="form-group" method="post" action="../bin/modEspeci.php"  enctype="multipart/form-data">
           <div class="form-group row col-md-10">

               <input type="text"  class="form-control" name="nameUser" value="<?php echo $user['usuario'];?>" readonly style="display: none;">

               <div class="modal-body mx-2">
                <div class="md-form mb-5">
                  <i class="fas fa-clipboard prefix grey-text"></i>
                  <input readonly value="<?php echo $dato['codigo']?>" type="text" name="codigo" class="form-control validate" required>
                  <label data-error="wrong" data-success="right" >ID</label>
                </div>


                <div class="md-form mb-5">
                  <i class="fas fa-pen-alt prefix grey-text"></i>
                  <input value="<?php echo $dato['descripcion']?>" type="text" name="descripcion" class="form-control validate" required>
                  <label data-error="wrong" data-success="right">Descripcion</label>
                </div>

              </div>

         
            </div>
       
      </div>
          <div class="modal-footer">
               <button type="button" class="btn peach-gradient" data-dismiss="modal">Cerrar</button>
               <button type="submit" name="submit" class="btn aqua-gradient">Guardar</button>
               
          </div>
       </form>
    </div>
  </div>
</div>

<!--FIN DE MODAL-->











  </tr>

   <?php endforeach ?> 



  </tbody>

  <!--MODAL AGREGAR ESPECIALIDAD-->
  <div class="modal fade" id="agregarEspecialidad" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Agregar Especialidad</h5>
        
      </div>
      <div class="modal-body">
            <form onsubmit="return validar();" class="form-group" method="POST" action="../bin/subirEspecialidad.php"  enctype="multipart/form-data">
              
           <div class="form-group row col-md-10">

               <input type="text"  class="form-control" name="nameUser" value="<?php echo $user['usuario'];?>" readonly style="display: none;">

               <div class="modal-body mx-2">
                <div class="md-form mb-5">
                  <i class="fas fa-clipboard prefix grey-text"></i>
                  <input type="text" id="codigo"  name="codigo" class="form-control validate" >
                  <label data-error="wrong" data-success="right">ID</label>
                </div>


                <div class="md-form mb-5">
                  <i class="fas fa-pen-alt prefix grey-text"></i>
                  <input type="text"  id="descripcion" name="descripcion" class="form-control validate" >
                  <label data-error="wrong" data-success="right" >Descripcion</label>
                </div>

              </div>

         
            </div>
       
      </div>
          <div class="modal-footer">
               <button type="button" class="btn peach-gradient" data-dismiss="modal">Cerrar</button>
               <button type="submit" name="submit" class="btn aqua-gradient">Agregar</button>
               
          </div>
       </form>
    </div>
  </div>
</div>

<!--FIN DE MODAL-->




</table>
      
</div>











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


function validar(){

var codigo, descripcion;

codigo = document.getElementById("codigo").value; 
descripcion = document.getElementById("descripcion").value;

if(descripcion==="" && codigo==""){
  Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: 'No se puede guardar un formulario vacio!!',

})
  
return false;

      }else{
      if(codigo === ""){
        Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'El campo ID no puede estar vacio!!',

        })
  
        return false;
      }else{

          if(descripcion===""){
            Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'El campo Descripcion no puede estar vacio!!',

          })
            
          return false;

    }  
  }  
}




}

</script>