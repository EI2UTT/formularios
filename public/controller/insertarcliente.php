<?php
    
    namespace proyecto;
    
    use Exception;

   try{
  require("../../vendor/autoload.php");
  
    extract($_POST);
       $p = new Cliente();
       $p->Nombre = $Nombre;
       $p->Correo = $Correo;
       $p->Telefono =  $Telefono;
       $p->Passwordd = $Passwordd;
       $p->save();
    echo json_encode($p->all());
    
    
    } catch (Exception $e) {
           echo($e->getMessage());
    }





