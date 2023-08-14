<?php

namespace com\bca\openapi\client\entity\oneklikaccountunbindingresponse;

class AdditionalInfo
{
    public $xcoId;

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

class OneklikAccountUnbindingResponse
{
    public $ErrorCode;
    public $ErrorMessage;
    public $responseCode;
    public $responseMessage;
    public $referenceNo;
    public $unlinkResult;
    public $additionalInfo;

    public function __construct()
    {
        $this->ErrorMessage = new ErrorMessage();
        $this->additionalInfo = new AdditionalInfo();
    }
}
