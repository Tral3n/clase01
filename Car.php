<?php
class Car{

public $empresa;
public $color = "rojo";
public $tieneCapota = true;
public $contenidoTanque;

public function pitar(){
    return "beep";
}

public function pedirRevision(){
    echo "<br/>Soy un carro de marca: " . $this->empresa . " necesito una revision   
    <br/> Necesito repintar mi color: ".$this->color. " " .$this ->pitar();
}

public function levantarCapota(){
    if($this-> tieneCapota) echo"<br/>Levantando la capota";
        else echo "<br/>No tengo capota para levantar";
    
}
//agrega galones de gasolina
public function llenar($cantidad){
    $this-> contenidoTanque+= $cantidad;
    return $this;

}
//extrae galones de gasolina cuz he can move
public function correr($kilometros){
    $galonesConsumidos = $kilometros/50;
    $this-> contenidoTanque-=$galonesConsumidos;
    return $this;
}

}