<?php

namespace com\bca\openapi\client\entity\oneklikaccountbindingresponse;

class AdditionalInfo
{
    public $requestId;
    public $randomString;

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

class OneklikAccountBindingResponse
{
    public $ErrorCode;
    public $ErrorMessage;
    public $responseCode;
    public $responseMessage;
    public $referenceNo;
    public $additionalInfo;

    public function __construct()
    {
        $this->ErrorMessage = new ErrorMessage();
        $this->additionalInfo = new AdditionalInfo();
    }
}
