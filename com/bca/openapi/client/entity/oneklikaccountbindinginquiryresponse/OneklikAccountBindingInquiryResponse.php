<?php

namespace com\bca\openapi\client\entity\oneklikaccountbindinginquiryresponse;

class AdditionalInfo
{
    public $accountData;

    public function __construct()
    {
        $this->accountData = [new AccountData()];
    }
}

class AccountData
{
	
	public $requestId;
	public $xcoId;
	public $credentialType;
	public $credentialNumber;
	public $maxLimit;
	public $userId;
	public $merchantId;
	public $createdDate;
	public $status;
	
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

class OneklikAccountBindingInquiryResponse
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
