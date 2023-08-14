<?php

namespace com\bca\openapi\client\entity\oneklikaccountbindingrequest;

class AdditionalInfo
{
    public $additionalInfo;
    public $merchantLogoUrl;

    public function __construct()
    {
    }
}

class AdditionalData
{
    public $userId;

    public function __construct()
    {
    }
}

class OneklikAccountBindingRequest
{
    public $merchantId;
    public $additionalData;
    public $additionalInfo;

    public function __construct()
    {
        $this->additionalData = new AdditionalData();
        $this->additionalInfo = new AdditionalInfo();
    }
}
