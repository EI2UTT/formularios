<?php
    
    namespace proyecto;
 
    use PDO;
    use function json_encode;
    /**
     * Class Persona
     */
    
    class Cliente extends Models
    {
        /**
         * @var array
         */
        protected $filleable = ["Nombre", "Correo", "Telefono", "Passwordd"];
        protected $table = "Clientes";
        public $Nombre = "";
        public $Correo = "";
        public $Telefono = "";
        public $Passwordd = "";
    }