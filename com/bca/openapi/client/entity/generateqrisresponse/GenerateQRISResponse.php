<?php

namespace com\bca\openapi\client\entity\generateqrisresponse;

class ErrorMessage
{
    public $English;
    public $Indonesian;

    public function __construct()
    {
    }
}

class GenerateQRISResponse
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
