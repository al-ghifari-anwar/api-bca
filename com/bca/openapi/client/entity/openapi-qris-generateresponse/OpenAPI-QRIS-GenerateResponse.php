<?php

namespace com\bca\openapi\client\entity\openapi-qris-generateresponse;

class ErrorMessage
{
    public $English;
    public $Indonesian;

    public function __construct()
    {
    }
}

class OpenAPI-QRIS-GenerateResponse
{
    public $ErrorCode;
    public $ErrorMessage;
    public $responseCode;
    public $responseMessage;
    public $referenceNo;
    public $partnerReferenceNo;
    public $qrImage;
    public $merchantName;
    public $terminalId;

    public function __construct()
    {
        $this->ErrorMessage = new ErrorMessage();
    }
}
