<?php

namespace App\Models;

use App\Class\User;
use PDO;
use PDOException;

class UserModel
{

    public static function getUsers():array{
        $conexion = "";
        try {
            $conexion = new PDO("mysql:host=mariadb;dbname=mhdatabase","marsanhost","marsanhost");
            $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch (PDOException $e){
            echo $e->getMessage();
        }
        $sql = "SELECT * FROM users";
        $stmt = $conexion->prepare($sql);
        $stmt->execute();

        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return User::createMultipleUsersFromArray($resultado);
    }

    public static function getUserById($id):User|false{
        $conexion = "";
        try {
            $conexion = new PDO("mysql:host=mariadb;dbname=mhdatabase","marsanhost","marsanhost");
            $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch (PDOException $e){
            echo $e->getMessage();
        }
        $sql = "SELECT * FROM users WHERE id=:id";
        $stmt = $conexion->prepare($sql);
        $stmt->bindValue("id",$id);
        $stmt->execute();

        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($resultado){
            return User::createFromArray($resultado);
        }else {
            return false;
        }
    }

    //Sin finalizar
    public static function addNewUser(){
        $conexion = "";
        try {
            $conexion = new PDO("mysql:host=mariadb;dbname=mhdatabase","marsanhost","marsanhost");
            $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch (PDOException $e){
            echo $e->getMessage();
        }
        $sql = "INSERT INTO users (name, password, email) 
                VALUES (:name,:password,:email)";
        $stmt = $conexion->prepare($sql);


        $stmt->execute();
    }

}