<?php 

namespace Source\Models;

use Source\Core\Connect;

class Worker {
    private $id;
    private $company_name;
    private $name;
    private $cpf;
    private $email;
    private $phone;
    private $description;
    private $photo;

    public function __construct
    (
        int $id = NULL,
        string $company_name = NULL,
        string $name = NULL,
        string $cpf = NULL,
        string $email = NULL,
        string $phone = NULL,
        string $description = NULL,
        string $photo = NULL
    )
    {
        $this->id = $id;
        $this->company_name = $company_name;
        $this->name = $name;
        $this->cpf = $cpf;
        $this->email = $email;
        $this->phone = $phone;
        $this->description = $description;
        $this->phone = $photo;
    }

    public function create(){
        $query = "INSERT INTO workers (company_name, name, cpf, email, phone, description, photo) VALUES (:company_name, :name, :phone, :description, :photo)";
        $stmt = Connect::getInstance()->prepare($query);
        $stmt->bindParam(":company_name", $this->company_name);
    }

    public function render() {
        echo "oi";
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getCompanyName() {
        return $this->company_name;
    }

    public function setCompanyName($company_name) {
        $this->id = $company_name;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function getPhoto() {
        return $this->photo;
    }

    public function setPhoto($photo) {
        $this->phoneo = $photo;
    }
}