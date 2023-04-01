<?php
class ViajeFeliz {
    //ATRIBUTOS
    private $codigo;
    private $destino;
    private $cantMaxPasajeros;
    private $pasajeros;

    //METODOS
    public function __construct($codigo, $destino, $cantMaxPasajeros, $pasajeros){
        $this -> codigo= $codigo;
        $this -> destino= $destino;
        $this -> cantMaxPasajeros = $cantMaxPasajeros;
        $this -> pasajeros = $pasajeros;
    } 
    //METODO GET para obtener los valores de los atributos
    public function getCodigo (){
        return $this -> codigo;
    }
    public function getDestino (){
        return $this -> destino;
    }
    public function getCantMaxPasajeros (){
        return $this -> cantMaxPasajeros;
    }
    public function getPasajeros (){
        return $this -> pasajeros;
    }
//METODO SET para modificar los datos 
    public function setCodigo($codigo){
        $this -> codigo = $codigo;
    }
    public function setDestino ($destino){
        $this -> destino = $destino;
    }
    public function setCantMaxPasajeros ($cantMaxPasajeros){
        $this -> cantMaxPasajeros = $cantMaxPasajeros;
    }
    public function setPasajeros ($pasajeros){
        $this -> pasajeros = $pasajeros;
    }


//Modificar datos
    /*public function modificarCodigo($codigo){
        $this -> setCodigo($codigo);
    }
    public function modificarDestino ($destino){
        $this -> setDestino ($destino);
    }
    public function modificarCantMaxPasajeros ($cantMaxPasajeros){
        $this -> setCantMaxPasajeros($cantMaxPasajeros);
    }
    public function modificarPasajeros ($pasajeros){
        $this -> setPasajeros ($pasajeros);
    }
*/
//funcion para modificar los datos del viaje
    public function modificar ($codigoMod,$destinoMod,$cantMaxPasajerosMod, $pasajeros){
        $this ->setCodigo($codigoMod);
        $this -> setDestino ($destinoMod);
        $this -> setCantMaxPasajeros($cantMaxPasajerosMod);
        $this -> setPasajeros($pasajeros);
    }




    public function __toString (){
        return "codigo". $this-> getCodigo(). "destino". $this->getDestino()."cantidad maxima de pasajeros ". $this-> getCantMaxPasajeros().
        "pasajeros". $this -> getPasajeros();
    }


//$viaje= ["codigo"=> $this->codigo"destino"=> $this-> destino, "Cantidad maxima de pasajeros"=> this ];










}