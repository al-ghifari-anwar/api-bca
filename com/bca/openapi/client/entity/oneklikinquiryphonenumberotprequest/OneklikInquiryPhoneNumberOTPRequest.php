<?php

namespace com\bca\openapi\client\entity\oneklikinquiryphonenumberotprequest;

class AdditionalInfo
{
    public $userId;
    public $xcoId;

    public function __construct()
    {
    }
}

class OneklikInquiryPhoneNumberOTPRequest
{
    public $merchantId;
    public $additionalInfo;

    public function __construct()
    {
        $this->additionalInfo = new AdditionalInfo();
    }
}
