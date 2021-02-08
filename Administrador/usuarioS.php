


<div class="container margen" style="margin-top: 80px;">

      

    <?php require_once("partes/navbar.php"); ?>
   
  
      
   <div class="row col-md-12">
   
 <a href="registro.php" class="btn btn-success">Agregar</a>
     <table class="table table-striped table-dark">
      <thead class="thead-light" align="center">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">User</th>
          <th scope="col">Rol</th>
          <th scope="col">Acciones</th>

        </tr>
      </thead>
      <tbody align="center">
        <?php 
          
            foreach ($datos1 as $dato): 
        ?>
        <tr>
          <th scope="row"><?php echo $dato['id']; ?></th>
          <td><?php echo $dato['usuario']; ?></td>
          <td><?php echo $dato['Rol']; ?></td>
            <td><a href="bin/eliminarUser.php?id=<?php echo $dato['id']; ?>"> 
            <img src="../img/eliminar.png" width="20" title="Eliminar"></a> 
           <!--|    <a class="btn btn-primary" href="modUser.php?id=<?php echo $dato['id']; ?>">Modificar</a>--> 
          </td>
          
        </tr>
      <?php endforeach ?>
      </tbody>
    </table>
   </div> 
  </div>
</div>