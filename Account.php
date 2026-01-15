<?php

class Account {
    public $accountNumber;
    public $type;
    public $balance;

    public function __construct($accountNumber, $type, $balance) {
        $this->accountNumber = $accountNumber;
        $this->type = $type;
        $this->balance = $balance;
    }
}
