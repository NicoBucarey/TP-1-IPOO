<?php
include "viajeFeliz.php";


function nroDePasajero ($nroPasajeros){
    echo "que dato desea modificar?
    1-Nombre 
    2-Apellido
    3-DNI";
    $valor = trim(fgets(STDIN));
    return $valor

}

echo "------MENU DE OPCIONES------
1- Ingresar datos del viaje: 
2- Modificar datos del viaje: 
3- Modificar los datos de los pasajeros
4- Ver los datos:
5- Salir\n";
$opcionMenu = trim(fgets(STDIN));
while ($opcionMenu<0 || $opcionMenu >5 ){
    echo "La opcion ingresada es invalida, ingrese una opcion entre el 1 y el 5: ";
    $opcionMenu = trim(fgets(STDIN));
    return $opcionMenu;
}

do {
    switch ($opcionMenu) {
     case 1:
        echo "Ingrese el codigo del viaje: ";
        $codigoViaje= trim(fgets(STDIN));
         echo "Ingrese el destino: ";
        $destino = trim(fgets(STDIN));
         echo "Ingrese la cantidad maxima de pasajeros: ";
        $cantMaxPasajeros = trim(fgets(STDIN));
        for($i=0; $i< $cantMaxPasajeros; $i++){
            echo "Ingrese el nombre del pasajero: ". ($i + 1);
            $nombre = trim(fgets(STDIN));
            echo "Ingrese el apellido del pasajero: ". ($i+1);
            $apellido = trim(fgets(STDIN));
            echo "Ingrese el DNI del pasajero: ". ($i+1);
            $dni = trim(fgets(STDIN));
            $pasajeros [$i]= ["nombre"=>$nombre,"apellido"=>$apellido,"DNI"=>$dni];}
    $objetViaje = new ViajeFeliz($codigoViaje, $destino, $cantMaxPasajeros, $pasajeros);        
    break;
    
    
    case 2:
        
        echo "¿Desea modificar el codigo? SI/NO";
            $rta = trim(fgets(STDIN));
            if ($rta== "SI"){
                echo "Ingrese el nuevo codigo: ";
                $codigoMod = trim(fgets(STDIN));
                $objetViaje -> setCodigo ($codigoMod);

            }
        echo "Desea modificar el destino? SI/NO";
            $rta = trim(fgets(STDIN));
            if ($rta== "SI"){
                echo "Ingrese el nuevo destino";
                $destinoMod = trim(fgets(STDIN));
                $objectViaje -> setDestino ($destinoMod);
            }
        echo "Desea modificar la cantidad maxima de pasajeros? SI/NO";
            $rta = trim(fgets(STDIN)); 
            if($rta== "SI"){
                echo "modifique la cantidad maxima de pasajeros";
                $cantMaxPasajerosMod = trim(fgets(STDIN));
                $objectViaje -> setCantMaxPasajeros ($cantMaxPasajeros);
            }
    break;
    
    
    case 3:

         echo "desea modificar los datos de algun pasajero? SI/NO";
            $rta = trim(fgets(STDIN));
            if ($rta == "SI"){
                echo "ingrese el numero del pasajero que desea modificar";
                $nro = trim(fgets(STDIN));
                $nroPasajeros = $nro-1; 
                echo "ingrese el nombre/apellido/DNI que quiere modificar:";
                $pasajeros() = trim(fgets(STDIN));
                $objectViaje -> setPasajeros ($pasajerosMod);
            }
        //$objectViaje = new ViajeFeliz ($codigoMod,$destinoMod,$cantMaxPasajerosMod, $pasajeros);
         
   
            

        break;
        $objectViaje -> modificar();
    echo $objetViaje;
    /*case 3:
       

        break;
    
    case 4: 
        
        }
        
        break;*

    case 5: 
            
            

        break;

    case 6:

          
        break;
    
    case 7:

           
        break;
    
    case 8:

           // echo "modifique los datos de los pasajeros "
        break;*/
}
}while($opcionMenu != 5);
 
