<nav class="navbar fixed-top navbar-expand-lg navbar-dark navbar-dark bg-dark"  >
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="../index.php">UAJMS</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="../index.php">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="personalMedico2.php">Personal</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="especialidades.php">Especialidades</a>
      </li>




      <li class="nav-item">
        <a class="nav-link" href="perfil.php?id=<?php echo $user['id'];?>"><?php if(isset($_SESSION['usuario'])) {echo $user['usuario'];} ?></a>
      </li>
    </ul>
    <a class="nav-link btn btn-primary" href="<?php echo RUTA.'close.php' ?>">Cerrar Sesion</a>
     
  </div>
</nav>