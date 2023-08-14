<?php

namespace com\bca\openapi\client\entity\settlementqrisresponse;

class Paylater
{
    public $totalRecordBase;
    public $totalAmountBase;
    public $totalRecordTip;
    public $totalAmountTip;
    public $totalAmount;

    public function __construct()
    {
    }
}

class Switching
{
    public $totalRecordBase;
    public $totalAmountBase;
    public $totalRecordTip;
    public $totalAmountTip;
    public $totalAmount;

    public function __construct()
    {
    }
}

class Cardless
{
    public $totalRecordBase;
    public $totalAmountBase;
    public $totalRecordTip;
    public $totalAmountTip;
    public $totalAmount;

    public function __construct()
    {
    }
}

class CreditCard
{
    public $totalRecordBase;
    public $totalAmountBase;
    public $totalRecordTip;
    public $totalAmountTip;
    public $totalAmount;

    public function __construct()
    {
    }
}

class DebitCard
{
    public $totalRecordBase;
    public $totalAmountBase;
    public $totalRecordTip;
    public $totalAmountTip;
    public $totalAmount;

    public function __construct()
    {
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

class SettlementQRISResponse
{
    public $ErrorCode;
    public $ErrorMessage;
    public $merchantId;
    public $terminalId;
    public $host;
    public $acquirerName;
    public $responseCode;
    public $responseMessage;
    public $partnerSettlementNo;
    public $batchNumber;
    public $transactionDateTime;
    public $debitCard;
    public $creditCard;
    public $cardless;
    public $switching;
    public $paylater;

    public function __construct()
    {
        $this->ErrorMessage = new ErrorMessage();
        $this->debitCard = new DebitCard();
        $this->creditCard = new CreditCard();
        $this->cardless = new Cardless();
        $this->switching = new Switching();
        $this->paylater = new Paylater();
    }
}
