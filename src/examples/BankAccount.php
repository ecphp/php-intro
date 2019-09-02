<?php

interface OwnerInterface {
  public function getLastName();
  public function getFirstName();
  public function getFullName();
}

class Owner implements OwnerInterface
{
  private $lastname;

  private $firstname;

  public function __construct($firstname, $lastname) {
    $this->firstname = $firstname;
    $this->lastname = $lastname;
  }

  public function getLastName() {
    return $this->lastname;
  }

  public function getFirstName() {
    return $this->firstname;
  }

  public function getFullName() {
    return sprintf('%s %s', $this->getFirstName(), $this->getLastName());
  }
}

interface BankAccountInterface {
  public function deposit($amount);
  public function withdraw($amount);
  public function balance();
  public function getOwner();
}

class BankAccount implements BankAccountInterface
{
  /**
   * @var \Owner
   */
  private $owner;

  /**
   * @var int
   */
  private $balance;

  public function __construct(OwnerInterface $owner, $balance = 0) {
    $this->owner = $owner;
    $this->balance = $balance;
  }

  public function deposit($amount) {
    $this->balance += $amount;
  }

  public function withdraw($amount) {
    $this->balance -= $amount;
  }

  public function balance() {
    return $this->balance;
  }

  public function getOwner() {
    return $this->owner;
  }
}