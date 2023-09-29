<?php

class Client {
  private ?int $idClient = null;
  private ?string $firstName = null;
  private ?string $lastName = null;
  private ?string $email = null;
  private ?string $password = null;
  private ?int $phone = null;
  private ?int $isConfirmed = null;
  private ?string $confirmationCode = null;

  //Construct
  public function __construct(
    $idClient,
    $firstName,
    $lastName,
    $email,
    $password,
    $phone,
    $isConfirmed,
    $confirmationCode,
  ) {
    $this->idClient = $idClient;
    $this->firstName = $firstName;
    $this->lastName = $lastName;
    $this->email = $email;
    $this->password = $password;
    $this->phone = $phone;
    $this->isConfirmed = $isConfirmed;
    $this->confirmationCode = $confirmationCode;
  }

  // Getters
  public function getIdClient() {
    return $this->idClient;
  }

  public function getFirstName() {
    return $this->firstName;
  }
  public function getLastName() {
    return $this->lastName;
  }

  public function getEmail() {
    return $this->email;
  }

  public function getPassword() {
    return $this->password;
  }

  public function getPhone() {
    return $this->phone;
  }

  public function getIsConfirmed() {
    return $this->isConfirmed;
  }

  public function getConfirmationCode() {
    return $this->confirmationCode;
  }

  // Setters
  public function setId($idClient) {
    $this->idClient = $idClient;
  }

  public function setFirstName($firstName) {
    $this->firstName = $firstName;
  }

  public function setLastName($lastName) {
    $this->lastName = $lastName;
  }

  public function setEmail($email) {
    $this->email = $email;
  }

  public function setPassword($password) {
    $this->password = $password;
  }

  public function setPhone($phone) {
    $this->phone = $phone;
  }

  public function setIsConfirmed($isConfirmed) {
    $this->isConfirmed = $isConfirmed;
  }

  public function setConfirmationCode($confirmationCode) {
    $this->confirmationCode = $confirmationCode;
  }
}

?>