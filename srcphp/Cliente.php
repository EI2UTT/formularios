<?php
    
    namespace proyecto;
 

    /**
     * Class Persona
     */
    
    class Cliente extends Models
    {
        /**
         * @var array
         */
        protected $filleable = ["Nombre", "Correo", "Telefono", "Contraseña"];
        protected $table = "Clientes";
        public $Nombre = "";
        public $Correo = "";
        public $Telefono = "";
        public $Contraseña = "";
    }