<?php

namespace com\bca\openapi\client\entity\accountbalanceresponse;

class HoldAmount
{
    public $value;
    public $currency;

    public function __construct()
    {
    }
}

class FloatAmount
{
    public $value;
    public $currency;

    public function __construct()
    {
    }
}

class Amount
{
    public $value;
    public $currency;

    public function __construct()
    {
    }
}

class AccountType
{
    public $amount;
    public $floatAmount;
    public $holdAmount;
    public $availableBalance;

    public function __construct()
    {
        $this->amount = new Amount();
        $this->floatAmount = new FloatAmount();
        $this->holdAmount = new HoldAmount();
    }
}

class ErrorMessage
{
    public $English;
    public $Indonesian;

    public function __construct()
    {
    }
}

class AccountBalanceResponse
{
    public $ErrorCode;
    public $ErrorMessage;
    public $referenceNo;
    public $accountNo;
    public $accountType;
    public $name;
    public $partnerReferenceNo;
    public $responseMessage;
    public $responseCode;

    public function __construct()
    {
        $this->ErrorMessage = new ErrorMessage();
        $this->accountType = new AccountType();
    }
}
