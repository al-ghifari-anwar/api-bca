<?php

namespace com\bca\openapi\client\entity\settlementqrisrequest;

class SettlementQRISRequest
{
    public $merchantId;
    public $terminalId;
    public $partnerMerchantType;
    public $totalRecord;
    public $totalBaseAmount;
    public $totalAmount;
    public $partnerSettlementNo;

    public function __construct()
    {
    }
}
