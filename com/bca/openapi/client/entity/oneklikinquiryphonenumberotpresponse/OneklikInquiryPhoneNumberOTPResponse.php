<?php

namespace com\bca\openapi\client\entity\oneklikinquiryphonenumberotpresponse;

class MsisdnList
{
    public $phoneId;
    public $phoneNumber;

    public function __construct()
    {
    }
}

class AdditionalInfo
{
    public $msisdnList;

    public function __construct()
    {
        $this->msisdnList = [new MsisdnList()];
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

class OneklikInquiryPhoneNumberOTPResponse
{
    public $ErrorCode;
    public $ErrorMessage;
    public $responseCode;
    public $responseMessage;
    public $additionalInfo;

    public function __construct()
    {
        $this->ErrorMessage = new ErrorMessage();
        $this->additionalInfo = new AdditionalInfo();
    }
}
