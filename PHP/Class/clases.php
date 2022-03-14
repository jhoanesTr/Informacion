<?php
class persona{          //Nombre de la clase
    //Propiedades
    public string $nombre;    //Propiedad tipo cadena   
    public string $apellido;  //Propiedad tipo cadena
    public int $edad;         //Propiedad tipo entero

    
    //Función Pública (Acciones o métodos)
    public function nuevaPersona(string $nuevoNombre, string $nuevoApellido, int $nuevoEdad){
        $this->nombre=$nuevoNombre;
        $this->apellido=$nuevoApellido;
        $this->edad=$nuevoEdad;
    }

    public function imprimirPersona(){
        echo "Nombre: ".$this->nombre."<br>";
        echo "Apellido: ".$this->apellido."<br>";
        echo "Edad: ".$this->edad."<br>";
    }
}
        $persona1= new persona();    //Instancia o creación de objeto
        $persona1->nuevaPersona(     //Llamando un método
            "Jhoanes","Villarroel","20"
        );

        //Prueba
        //$persona1->imprimirPersona();    //Imprimimos mediante función

        // echo $persona1->nombre;  //Imprimimos una propiedad
        // echo $persona1->edad;    //Imprimimos una propiedad

//Extendiendo una clase
    class trabajador extends persona{
        public string $puesto;

        public function x(){

        }
    }
        $persona1= new trabajador();
        

