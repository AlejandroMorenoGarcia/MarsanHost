<?php

namespace App\Class;

use DateTime;
use JsonSerializable;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;
use Respect\Validation\Exceptions\NestedValidationException;
use Respect\Validation\Validator as v;

class User implements JsonSerializable
{
    private UuidInterface $id;
    private string $name;
    private string $email;
    private string $password;
    private DateTime $birthdate;
    private string $phone;
    private array $favApartments;


    public function __construct()
    {
        $this->favApartments=[];
    }

    public function getId(): Uuid{return $this->id;}
    public function setId(Uuid $id): void{$this->id = $id;}
    public function getFavApartments(): array{return $this->favApartments;}
    public function setFavApartments(array $favApartments): void{$this->favApartments = $favApartments;}
    public function getPhone(): string{return $this->phone;}
    public function setPhone(string $phone): void{$this->phone = $phone;}
    public function getBirthdate(): DateTime{return $this->birthdate;}
    public function setBirthdate(DateTime $birthdate): void{$this->birthdate = $birthdate;}
    public function getPassword(): string{return $this->password;}
    public function setPassword(string $password): void{$this->password = $password;}
    public function getEmail(): string{return $this->email;}
    public function setEmail(string $email): void{$this->email = $email;}
    public function getName(): string{return $this->name;}
    public function setName(string $name): void{$this->name = $name;}

    public function jsonSerialize(): mixed
    {
        return  [
            'id' => $this->id,
            'name' => $this->name,
            'phone' => $this->phone,
            'birthdate' => $this->birthdate->format('Y-m-d'),
        ];
    }

    public static function createFromArray(array $userData):User{
        $usuario = new User();

        if(isset($userData['id'])){
            //Si el usuario se esta leyendo de la BBDD
            $usuario->setId($userData['id']);
            $usuario->setPassword($userData['password']);
        }else{
            $password_cifrado = password_hash($userData['password'],PASSWORD_DEFAULT);
            $usuario->setPassword($password_cifrado);
        }
        //Propiedades que se tienen que insertar
        $usuario->setName($userData['name']);
        $usuario->setEmail($userData['email']);

        //Propiedades que pueden no insertarse
        $usuario->setPhone($userData['phone']??'');
        if (isset($userData['birthdate'])) {
            $usuario->setBirthdate(
                \DateTime::createFromFormat(
                    'Y-m-d', $userData['birthdate']));
        }else{
            $usuario->setBirthdate(
                \DateTime::createFromFormat(
                    'Y-m-d', '1900-01-01'));
        }

        return $usuario;
    }

    public static function createMultipleUsersFromArray(array $usersData):array {
        $usuarios=[];
        foreach ($usersData as $datosUsuarios){
            $usuarios[]=User::createFromArray($datosUsuarios);
        }
        return $usuarios;
    }
}