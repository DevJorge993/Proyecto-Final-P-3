<?php 


class DbGestionLibreria {


    private $servidor ='localhost';
    private $dataBase = 'db_libreria';
    private $user = 'root';
    private $password ='';

    
    private function getConexion(){

         $dns = "mysql:host=$this->servidor;dbname=$this->dataBase";
         $obPDO = new PDO($dns, $this->user,$this->password);
         return $obPDO;

    }

    public function getTitulos(){
        
        $pdoConexion = $this->getConexion();
        $resultado = ['No Data'];

        if (is_object($pdoConexion)){
            $consultaSql = "SELECT * FROM titulos";
            $resultado = $pdoConexion->query($consultaSql);
        }

        return $resultado;
    }
}




?>