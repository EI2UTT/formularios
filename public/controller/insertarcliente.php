<?php
    
    namespace proyecto;
    
    use Exception;

   try{
  require("../../vendor/autoload.php");
  
    extract($_POST);
       $p = new Cliente();
       $p->Nombre = "evelyn";
       $p->Correo = "evelyndomm12@gmailcom" ;
       $p->Telefono = "8713282850";
       $p->Contraseña = "admin";
       $p->save();
    echo json_encode($p->all());
    
    
    } catch (Exception $e) {
           echo($e->getMessage());
    }







