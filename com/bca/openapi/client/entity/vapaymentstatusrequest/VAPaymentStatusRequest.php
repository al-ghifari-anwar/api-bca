<?php

namespace com\bca\openapi\client\entity\vapaymentstatusrequest;

class VAPaymentStatusRequest
{
    public $partnerServiceId;
    public $customerNo;
    public $virtualAccountNo;
    public $inquiryRequestId;
    public $paymentRequestId;

    public function __construct()
    {
    }
}
