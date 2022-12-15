<?php
class Conexion extends PDO
{ 
  private $tipo_de_base    = 'mysql';          /**< Indica el tipo de motor de datos */
  private $host            = 'localhost';      /**< Indica el host */
  private $nombre_de_base = 'taxiCorp';        /**< Indica el nombre de la base de datos */
  private $usuario         = 'taxiCorp';       /**< Indica el nombre de usuario de la base de datos */
  private $contrasena      = 'Taxi1234';       /**< Indica la contraseña de usuario de la base de datos */


  /**
    * @brief crea la conexión PDO.
   */  
  public function __CONSTRUCT() {

     try{
        parent::__CONSTRUCT($this->tipo_de_base.':host='.$this->host.';dbname='.$this->nombre_de_base, $this->usuario, $this->contrasena);

     }catch(PDOException $e){
        echo 'Ha surgido un error y no se puede conectar a la base de datos. Detalle: ' . $e->getMessage();
        exit;
     }
  } 

 /*  function validarUsuario($rut, $clave, $objUsr)
    {

        try{

            require_once ('conexion.php');

            $pdo = new Conexion();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->exec("SET CHARACTER SET utf8");   

            $stm    = $pdo->prepare("SELECT * FROM usuarios WHERE rut = ? and Clave = ? ");
            $stm->execute(array($rut,$clave));
            $r = $stm->fetch(PDO::FETCH_OBJ);

            if($r){

                $objUsr->__SET('id', $r->id);
                $objUsr->__SET('Nombre', $r->Nombre);
                $objUsr->__SET('Apellido', $r->Apellido);
                $objUsr->__SET('Sexo', $r->Sexo);
                $objUsr->__SET('FechaNacimiento', date("d-m-Y", strtotime($r->FechaNacimiento)));


                return $objUsr;

            }else{

                return false;   

            }

        }catch (Exception $e){
            die($e->getMessage());
        }
    } */
}
?>