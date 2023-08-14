<?php

namespace com\bca\openapi\client\entity\accountstatementresponse;

class Amount
{
    public $value;
    public $currency;

    public function __construct()
    {
    }
}

class StartingBalance
{
    public $amount;
    public $dateTime;

    public function __construct()
    {
        $this->amount = new Amount();
    }
}

class DetailBalance
{
    public $amount;

    public function __construct()
    {
        $this->amount = new Amount();
    }
}

class DetailData
{
    public $detailBalance;
    public $amount;
    public $transactionDate;
    public $remark;
    public $type;

    public function __construct()
    {
        $this->detailBalance = [new DetailBalance()];
        $this->amount = new Amount();
    }
}

class TotalDebitEntries
{
    public $numberOfEntries;
    public $amount;

    public function __construct()
    {
        $this->amount = new Amount();
    }
}

class EndingBalance
{
    public $amount;
    public $dateTime;

    public function __construct()
    {
        $this->amount = new Amount();
    }
}

class TotalCreditEntries
{
    public $numberOfEntries;
    public $amount;

    public function __construct()
    {
        $this->amount = new Amount();
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

class AccountStatementResponse
{
    public $ErrorCode;
    public $ErrorMessage;
    public $referenceNo;
    public $totalCreditEntries;
    public $endingBalance;
    public $totalDebitEntries;
    public $detailData;
    public $partnerReferenceNo;
    public $responseMessage;
    public $responseCode;
    public $startingBalance;

    public function __construct()
    {
        $this->ErrorMessage = new ErrorMessage();
        $this->totalCreditEntries = new TotalCreditEntries();
        $this->endingBalance = new EndingBalance();
        $this->totalDebitEntries = new TotalDebitEntries();
        $this->detailData = [new DetailData()];
        $this->startingBalance = new StartingBalance();
    }
}
