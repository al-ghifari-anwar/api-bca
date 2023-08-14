<?php

namespace com\bca\openapi\client\entity\externalaccountinquiryresponse;

class ErrorMessage
{
    public $English;
    public $Indonesian;

    public function __construct()
    {
    }
}

class ExternalAccountInquiryResponse
{
    public $ErrorCode;
    public $ErrorMessage;
    public $responseCode;
    public $responseMessage;
    public $referenceNo;
    public $partnerReferenceNo;
    public $beneficiaryAccountName;
    public $beneficiaryAccountNo;
    public $beneficiaryBankCode;
    public $beneficiaryBankName;
    public $currency;

    public function __construct()
    {
        $this->ErrorMessage = new ErrorMessage();
    }
}
