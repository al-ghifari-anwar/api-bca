<?php

namespace com\bca\openapi\client\entity\oneklikaccountunbindingrequest;

class AdditionalInfo
{
    public $xcoId;

    public function __construct()
    {
    }
}

class OneklikAccountUnbindingRequest
{
    public $merchantId;
    public $additionalInfo;

    public function __construct()
    {
        $this->additionalInfo = new AdditionalInfo();
    }
}
