<?php

namespace Source\Models;

use Source\Core\Connect;

class Client
{
    private $id;
    private $name;
    private $lastname;
    private $cpf;
    private $email;
    private $password;

    /**
     * @param $id
     * @param $name
     * @param $lastname
     * @param $cpf
     * @param $email
     * @param $password
     */
    public function __construct
    (
        $id = NULL,
        $name = NULL,
        $lastname = NULL,
        $cpf = NULL,
        $email = NULL,
        $password = NULL
    )
    {
        $this->id = $id;
        $this->name = $name;
        $this->lastname = $lastname;
        $this->cpf = $cpf;
        $this->email = $email;
        $this->password = $password;
    }

    public function create() {
        $query = "INSERT INTO clients (name, lastname, cpf, email, password) VALUES (:name, :lastname, :cpf, :email, :password)";
        $stmt = Connect::getInstance()->prepare($query);
        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":lastname", $this->lastname);
        $stmt->bindParam(":cpf", $this->cpf);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindValue(":password", password_hash($this->password,PASSWORD_DEFAULT));
        $stmt->execute();

        return true;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getLastname()
    {
        return $this->lastname;
    }

    public function setLastname($lastname): void
    {
        $this->lastname = $lastname;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf): void
    {
        $this->cpf = $cpf;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email): void
    {
        $this->email = $email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password): void
    {
        $this->password = $password;
    }
}