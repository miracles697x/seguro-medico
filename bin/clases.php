<?php
class Conexion {
    protected $base;
    public function Conexion() {
        try {
            $this->base = new PDO('mysql:host=localhost; dbname=seguromedico','root','');//conexion con la base de datos
            $this->base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->base->exec("SET CHARACTER SET utf8");
            return $this->base;
        } catch (Exception $e) {
            echo "Error en la linea: " . $e->getLine();
        }
    }
}
class Datos extends Conexion {
    public function Datos(){
        parent::__construct();
    }


    public function inciarSesion($usuario,$password){
        $sql = "SELECT * FROM usuarios WHERE user = '$usuario' AND pass = '$password'";
        $statement = $this->base->query($sql);
        $statement->bindValue(':user',$usuario);
        $statement->bindValue(':pass',$password);
        $statement->execute(array());
        $cont = $statement->rowCount();
        $statement->closeCursor();
       
        return $cont;
    }

    public function consultarDatos($usuario){
        $sql = "SELECT * FROM usuarios WHERE user = '$usuario'";
        $statement = $this->base->prepare($sql);
        $statement->execute(array());
        $resultado = $statement->fetch(PDO::FETCH_ASSOC);;
        $statement->closeCursor();
        return $resultado;
        echo $resultado;
    }




}
class Medicos extends Conexion {
    public function Medicos(){
        parent::__construct();
    }

    public function listaMedicos(){
        $sql = "SELECT * FROM medico ORDER BY medico.id DESC";
        $statement = $this->base->query($sql);
        $statement->execute(array());
        $resultado = $statement->fetchAll(PDO::FETCH_ASSOC);;
        $statement->closeCursor();
        return $resultado;
    }
   
    public function eliminarMedico($id){
        $this->base->query("DELETE FROM medico WHERE id='$id'");
        header('location: ../_admin/personalMedico.php');
    }

    
    
       
    



}    

class Especialidad extends Conexion {
    public function Especialidad(){
        parent::__construct();
    }
    

    public function eliminarEspecialidad($codigo){
        $this->base->query("DELETE FROM especialidad WHERE codigo='$codigo'");
        header('location: ../_admin/especialidades.php');
    }

   
    
    




}

class Horario extends Conexion {
    public function Horario(){
        parent::__construct();
    }
    
    

   

    public function eliminarHoraM($id){
        $this->base->query("DELETE FROM hora_atencion WHERE id='$id'");
       
    }


}







?>