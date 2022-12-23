<?php

class Form{
    
    public static function alert($tipo,$messagem){
        if($tipo == 'erro'){
            echo '<div style="backgroud="black" color: red; font: size 25px;">'.$messagem.'</div>';
        return false;

        }else if($tipo == 'sucesso'){
            echo '<div style="backgroud="black" color: green; font: size 25px;">'.$messagem.'</div>';
            return true;
        }
    }
    public static function cadastrar($Nome,$Email,$senha){
        $sql = MYSQL::conectar()->prepare("INSERT INTO 'formulario' ('Nome', 'Email', 'Senha') VALUES (?, ?, ?)");
        $sql->execute(array($Nome, $Email, $senha));

    }
}




?>