<?php
class MYSQL{
private static $pdo;

    public static function conectar(){
      if(self::$pdo == null){
        try {
           self::$pdo = new PDO('mysql:host='.HOST.';dbname='.DATABASE.';charset=utf8', USER, PASSWORD);
           self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            echo  "<script>alert('Erro a conectar com o banco de dados:');</script>";
        }
        
      }
      return self::$pdo;
    }
    
    }


?>
