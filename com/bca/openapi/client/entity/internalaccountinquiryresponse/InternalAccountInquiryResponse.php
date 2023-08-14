<?php

namespace com\bca\openapi\client\entity\internalaccountinquiryresponse;

class InternalAccountInquiryResponse
{
    public $responseCode;
    public $responseMessage;
    public $referenceNo;
    public $partnerReferenceNo;
    public $beneficiaryAccountName;
    public $beneficiaryAccountNo;
    public $beneficiaryAccountStatus;
    public $beneficiaryAccountType;
    public $currency;

    public function __construct()
    {
    }
}
