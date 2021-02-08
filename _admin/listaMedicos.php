
<div class="container margen" >
        <div class="row">
            <a href="agregarMedico.php" class="btn btn-success">Agregar</a>
        </div>




<div class="row row-cols-1 row-cols-md-3">
  <?php foreach ($datos as $dato): ?>
  <div class="col ms-5">
    <div class="view overlay">
    <!-- Card -->
    <div class="card" style="margin-top: 10px;">

      <!--Card image-->
      <div class="view overlay">
        <img class="card-img-top" width="300" height="300" src="../img/<?php echo $dato['foto']; ?>"
          alt="Card image cap">
        <a href="#!">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

      <!--Card content-->
      <div class="card-body" >

        <!--Title-->
        <h5 class="card-title"><?php echo $dato['nombres'].' '; echo $dato['apellidos']; ?></h5>
        <?php 
              $fecha = date("d/m/Y", strtotime($dato['fecha_nac']));
         ?>
        <p class="card-text">Nacimiento : <?php echo $fecha; ?></p>
                    <p class="card-text">Celular : <?php echo $dato['telefono']; ?></p>
                  
                  <div align="center">
                    <a href="eliminar.php?id=<?php echo $dato['id']; ?>&usuario=<?php echo $user['usuario']; ?>">
                      <i class="fas fa-trash fa-lg red-text ml-3" aria-hidden="true"></i>
                    </a>

                    <a href="informacion.php?id=<?php echo $dato['id']; ?>">
                    <i class="fas fa-edit fa-lg amber-text ml-3" aria-hidden="true"></i>
                    </a>
                    
                    <a href="Asignar.php?id=<?php echo $dato['id']; ?>">
                    <i class="fas fa-eye fa-lg green-text ml-3" aria-hidden="true"></i>
                    </a>

                    <a href="reporteM.php?id=<?php echo $dato['id']; ?>" target = '_blank'>
                    <i class="fas fa-print fa-lg cyan-text ml-3" aria-hidden="true"></i>
                    </a>
                  </div>
                    
      

      </div>

    </div>
   </div>
  </div>
  

   <?php endforeach ?>   

  </div>


</div>

