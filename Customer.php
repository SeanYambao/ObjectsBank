<?php

class Customer {
    public $firstName;
    public $lastName;
    public $accounts;

    public function __construct($firstName, $lastName, $accounts) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->accounts = $accounts;
    }

    public function getFullName() {
        return $this->firstName . " " . $this->lastName;
    }
}
