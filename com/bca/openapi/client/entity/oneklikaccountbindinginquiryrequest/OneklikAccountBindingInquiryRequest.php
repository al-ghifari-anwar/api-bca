<?php

namespace com\bca\openapi\client\entity\oneklikaccountbindinginquiryrequest;

class AdditionalInfo
{
    public $userId;
	public $requestIds;

    public function __construct()
    {
		   $this->requestIds = [];
    }
}

class OneklikAccountBindingInquiryRequest
{
    public $additionalInfo;

    public function __construct()
    {
        $this->additionalInfo = new AdditionalInfo();
    }
}
