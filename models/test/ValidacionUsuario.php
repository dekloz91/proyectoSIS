<?php declare(strict_types=1);

    use PHPUnit\Framework\TestCase;
    include_once('controllers\loginController.php');
    include_once('models\db.php');

    class loginTest extends TestCase{

        //Validar si el usuario y contraseña del Administrador existe en la Base de Datos
        public function ValidacionAdministrador() {
           
           $conn = new connection();
           $this->assertEquals($conn->login('qwerty', 'qwerta', null));
        }
         //Validar si el usuario y contraseña del Medico existe en la Base de Datos
         public function ValidacionPaciente() {
           
            $conn = new connection();
            $this->assertEquals($conn->login('P000031', 'paciente23', null));
         }
          //Validar si el usuario y contraseña del Paciente existe en la Base de Datos
        public function ValidacionMedico() {
           
            $conn = new connection();
            $this->assertEquals($conn->login('M00003', '0743231', null));
         }
    }
?>