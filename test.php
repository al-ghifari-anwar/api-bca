<?php
// PLEASE ENABLE EXTENTION CURL OPENSSL
require_once dirname(__FILE__) . '/com/bca/openapi/client/services/AccountStatementService.php';
require_once dirname(__FILE__) . '/com/bca/openapi/client/services/AccountBalanceService.php';
require_once dirname(__FILE__) . '/com/bca/openapi/client/services/TransferIntraBankService.php';
require_once dirname(__FILE__) . '/com/bca/openapi/client/services/TransferStatusService.php';
require_once dirname(__FILE__) . '/com/bca/openapi/client/services/TransferInterBankONLService.php';
require_once dirname(__FILE__) . '/com/bca/openapi/client/services/TransferInterBankRTGSService.php';
require_once dirname(__FILE__) . '/com/bca/openapi/client/services/TransferInterBankSKNService.php';
require_once dirname(__FILE__) . '/com/bca/openapi/client/services/ExternalAccountInquiryService.php';
require_once dirname(__FILE__) . '/com/bca/openapi/client/services/InternalAccountInquiryService.php';
require_once dirname(__FILE__) . '/com/bca/openapi/client/services/VAPaymentStatusService.php';
require_once dirname(__FILE__) . '/com/bca/openapi/client/services/VABillPresentmentService.php';
require_once dirname(__FILE__) . '/com/bca/openapi/client/services/VAPaymentService.php';
require_once dirname(__FILE__) . '/com/bca/openapi/client/services/SharedBillerService.php';
require_once dirname(__FILE__) . '/com/bca/openapi/client/services/GenerateQRISService.php';
require_once dirname(__FILE__) . '/com/bca/openapi/client/services/InquiryQRISService.php';
require_once dirname(__FILE__) . '/com/bca/openapi/client/services/SettlementQRISService.php';
require_once dirname(__FILE__) . '/com/bca/openapi/client/services/OneklikAccountBindingService.php';
require_once dirname(__FILE__) . '/com/bca/openapi/client/services/OneklikAccountBindingInquiryService.php';
require_once dirname(__FILE__) . '/com/bca/openapi/client/services/OneklikAccountUnbindingService.php';
require_once dirname(__FILE__) . '/com/bca/openapi/client/services/OneklikPaymentService.php';
require_once dirname(__FILE__) . '/com/bca/openapi/client/services/OneklikInquiryPaymentStatusService.php';
require_once dirname(__FILE__) . '/com/bca/openapi/client/services/OneklikInquiryPhoneNumberOTPService.php';
require_once dirname(__FILE__) . '/com/bca/openapi/client/services/OneklikGeneratePaymentOTPService.php';
require_once dirname(__FILE__) . '/com/bca/openapi/client/entity/generateqrisrequest/GenerateQRISRequest.php';
require_once dirname(__FILE__) . '/com/bca/openapi/client/entity/inquiryqrisrequest/InquiryQRISRequest.php';
require_once dirname(__FILE__) . '/com/bca/openapi/client/entity/settlementqrisrequest/SettlementQRISRequest.php';
require_once dirname(__FILE__) . '/com/bca/openapi/client/entity/oneklikaccountbindingrequest/OneklikAccountBindingRequest.php';
require_once dirname(__FILE__) . '/com/bca/openapi/client/entity/oneklikaccountbindinginquiryrequest/OneklikAccountBindingInquiryRequest.php';
require_once dirname(__FILE__) . '/com/bca/openapi/client/entity/oneklikaccountunbindingrequest/OneklikAccountUnbindingRequest.php';
require_once dirname(__FILE__) . '/com/bca/openapi/client/entity/oneklikpaymentrequest/OneklikPaymentRequest.php';
require_once dirname(__FILE__) . '/com/bca/openapi/client/entity/oneklikinquirypaymentstatusrequest/OneklikInquiryPaymentStatusRequest.php';
require_once dirname(__FILE__) . '/com/bca/openapi/client/entity/oneklikinquiryphonenumberotprequest/OneklikInquiryPhoneNumberOTPRequest.php';
require_once dirname(__FILE__) . '/com/bca/openapi/client/entity/oneklikgeneratepaymentotprequest/OneklikGeneratePaymentOTPRequest.php';
require_once dirname(__FILE__) . '/com/bca/openapi/client/entity/accountstatementrequest/AccountStatementRequest.php';
require_once dirname(__FILE__) . '/com/bca/openapi/client/entity/accountbalancerequest/AccountBalanceRequest.php';
require_once dirname(__FILE__) . '/com/bca/openapi/client/entity/transferintrabankrequest/TransferIntraBankRequest.php';
require_once dirname(__FILE__) . '/com/bca/openapi/client/entity/transferstatusrequest/TransferStatusRequest.php';
require_once dirname(__FILE__) . '/com/bca/openapi/client/entity/transferinterbankonlrequest/TransferInterBankONLRequest.php';
require_once dirname(__FILE__) . '/com/bca/openapi/client/entity/transferinterbankrtgsrequest/TransferInterBankRTGSRequest.php';
require_once dirname(__FILE__) . '/com/bca/openapi/client/entity/transferinterbanksknrequest/TransferInterBankSKNRequest.php';
require_once dirname(__FILE__) . '/com/bca/openapi/client/entity/externalaccountinquiryrequest/ExternalAccountInquiryRequest.php';
require_once dirname(__FILE__) . '/com/bca/openapi/client/entity/vapaymentstatusrequest/VAPaymentStatusRequest.php';
require_once dirname(__FILE__) . '/com/bca/openapi/client/entity/vabillpresentmentrequest/VABillPresentmentRequest.php';
require_once dirname(__FILE__) . '/com/bca/openapi/client/entity/vapaymentrequest/VAPaymentRequest.php';
require_once dirname(__FILE__) . '/com/bca/openapi/client/entity/internalaccountinquiryrequest/InternalAccountInquiryRequest.php';
require_once dirname(__FILE__) . '/com/bca/openapi/client/entity/sharedbillerinquirypaymentstatusrequest/SharedBillerRequest.php';
require_once dirname(__FILE__) . '/com/bca/openapi/client/entity/sharedbillerbillpresentmentrequest/SharedBillerRequest.php';
require_once dirname(__FILE__) . '/com/bca/openapi/client/entity/sharedbillerpaymentflagrequest/SharedBillerRequest.php';

$host = "https://devapi.klikbca.com";
$origin = "merchant.co.id";
$corp_id = "H2HAUTO014";
$client_key = "13431066-d4dc-4d98-9fe9-be01143745f9";
$client_secret = "8716005a-dae1-4f02-a352-6b27dfe9fc7f";
$private_key = "MIIEvAIBADANBgkqhkiG9w0BAQEFAASCBKYwggSiAgEAAoIBAQCLd1d7GwcA6iPN8wK4DAblBH81Qwmt6W678yEQTthMmlFxlWDcy/q6M5OkZGC+eHw00voVqE6t3skjg+iw5zPz+XFJb8FNIp/OmrEoJ+XTQhep2Iop2yOFp/OHDJxCNbTdHsPOzObLJJlen68BwHj0nzjxM+wAn5Gb/emHQY/4q9/dhDEywARH4y4n8SDzqZsBntZlAPwZCCf4AL7j4LZBggytkP5y8DX+U66w7+97nbDGZyxp6A7+vA+vNtyuxmbtkrnlhSwBL/eFmyb3meOTU7esCm4J6SS5u9+XYGYOmQQXVIN+u5RRMiLxTUq0bWrncMwAkyfuZVLKkTAG+4v7AgMBAAECggEAD5/JDyOR/0o7xKDK1y+RvipozeC6vt795tRwCdGrbbmEEkN33ISFjEKm8a3FINGCqLBSEAcQ+W2R/waSFO9x5I03YdDBSRDt8klmO2ds2eP3nrGBmPrR2fFc2O5SuyAlKPh/WzWdTXjGLdGZ24pigpUr3enBMLivqVgix2JS7Lq5l1+a6lcBAsRborVywb/rhao1F3CvcMTgq0nf+hFH6SqeN/KUB/3fQQ9zT/0Cd5ia0DO3A81YeyTr5tjU4VigJWT9ZRrD8Ied45fxno1nPTmOGi4rIsnfPg/VlLpCT5o7EXfu8IRpew6gT6R5OGY28toTN3TTJCn6HK8NbQDXYQKBgQDhDMhdh8P1mQoNfoPghScZyFVRL3tMjTsw6TJbeSK9fl6hvVnUKsVdOQ6UeoZdu4WFKBREVLbrQhUUamznqqXoyPYgfQpT8s18d5H0T0HZHFvFd8zV8FR0v10a+h2Rz0al27OAgYD67rokGMFKzrNhjAxp7HndRsqopzRi82TPQwKBgQCepXSvr6jinjQMim0hfzkHVxLkD99nquRGwpDoMiR7621b7Oj9+tVyXbAQZj1pJJ2zOfSmr/4nIwuS4eDFK9LlAKh/HUySn7rAZlPF2j0zKyNYYE3dzWTq1llXUZpzY6KcTuksiTYQ//+DnQjvnlZEdKumk0ueuLhcxzNxpqb46QKBgDQdCaje73nH3pQRX+h17QADa/5IyHyJl9NTrN2Rx4Gp6a/6cPq4jMtxkva/CK5b5idXiJnqJBGGU+tOWbmrwo+NObF8Qw/9gaf46EtyrwTflEC95SkFZglC5wSANqi1Ht75aS+wzXVOIryJHvl7s/46uAUvRWkAI526Wl8vjYCRAoGAXDjQUQSrBzlyBkw9zjgXnbW3TI4Rj0DfPGcEN4ZWgRbFVqesdV/nzni5zX6xejqH1dT97BvogTW1F6hoshWcnfS4/lO43I8vz4Jsdlo8M0+DV298NFCetojuHH1abHNh5r1UfMgyfsVh8k9KD4kamua7lbSQQ+8bdQtzU0DOVWkCgYAXh1gepCkIX8h+X+Uf7GRNl5VwxoSkk5gzWx9CJ4wUW06vcN6nk4XuwsmEWq4/VoV48VuPqSo99T5ekzpxxc7g/rofpyV0/rsvqikiGI9kdPIRTawMPNqbjbcWho1nNS3caqk5PGcF5HLQXGCtFjKtZxOrsn2+MurelE3a+xOihw==";
$timeout_second = 30;
date_default_timezone_set('Asia/Jakarta');

echo "---- Start call AccountStatement ----\n";
try {
    $date = new DateTime('NOW');
    $external_id = $date->format('YmdHisu');
    $partner_ref_no = $date->format('YmdHisu');
    $accountNo = "0200000024";
    $fromDate = "2019-10-07T00:00:00+07:00";
    $endDate = "2019-10-11T00:00:00+07:00";

    $accountStatementService = new \com\bca\openapi\client\services\AccountStatementService($host, $origin, $corp_id, $client_key, $client_secret, $private_key, $timeout_second);
    $accountStatmentRequest = new \com\bca\openapi\client\entity\accountstatementrequest\AccountStatementRequest();
    $accountStatmentRequest->partnerReferenceNo = $partner_ref_no;
    $accountStatmentRequest->accountNo =   $accountNo;
    $accountStatmentRequest->fromDateTime =  $fromDate;
    $accountStatmentRequest->toDateTime = $endDate;
    $accountStatement = $accountStatementService->getAccountStatement(
        $external_id, 
        $accountStatmentRequest);

    if ($accountStatement->ErrorCode != null) {
        echo "Error Code        :" . $accountStatement->ErrorCode . "\n";
        echo "Indonesian        :" . $accountStatement->ErrorMessage->Indonesian . "\n";
        echo "English           :" . $accountStatement->ErrorMessage->English . "\n";
    } else {
        echo "Response Code    :" . $accountStatement->responseCode . "\n";
        echo "Response Message :" . $accountStatement->responseMessage . "\n";
        if ($accountStatement->startingBalance->amount != null) {
            echo "Currency         :" . $accountStatement->startingBalance->amount->currency . "\n";
            echo "Starting Balance :" . $accountStatement->startingBalance->amount->value . "\n";
            foreach ($accountStatement->detailData as &$detail) {
                echo "Detail Trx Date  :" . $detail->transactionDate . "\n";
                echo "Detail Amount    :" . $detail->amount->value . "\n";
                echo "Detail Trx Type  :" . $detail->type . "\n";
                echo "Detail Remark    :" . $detail->remark . "\n";
            }
        }
    }
} catch (Exception $e) {
    echo "Exception        :" . $e->getMessage() . "\n";
}

echo "---- Start call AccountBalance ----\n";
try {
    $date = new DateTime('NOW');
    $external_id = $date->format('YmdHisu');
    $partner_ref_no = $date->format('YmdHisu');
    $accountNo = "0080014945";

    $accountBalanceService = new \com\bca\openapi\client\services\AccountBalanceService($host, $origin, $corp_id, $client_key, $client_secret, $private_key, $timeout_second);
    $accountBalanceRequest = new \com\bca\openapi\client\entity\accountbalancerequest\AccountBalanceRequest();
    $accountBalanceRequest->partnerReferenceNo = $partner_ref_no;
    $accountBalanceRequest->accountNo = $accountNo;
    $accountBalance = $accountBalanceService->getAccountBalance(
        $external_id, 
        $accountBalanceRequest);

    if ($accountBalance->ErrorCode != null) {
        echo "Error Code        :" . $accountBalance->ErrorCode . "\n";
        echo "Indonesian        :" . $accountBalance->ErrorMessage->Indonesian . "\n";
        echo "English           :" . $accountBalance->ErrorMessage->English . "\n";
    } else {
        echo "Response Code    :" . $accountBalance->responseCode . "\n";
        echo "Response Message :" . $accountBalance->responseMessage . "\n";
        if ($accountBalance->accountType != null) {
            echo "Currency         :" . $accountBalance->accountType->amount->currency . "\n";
            echo "Balance          :" . $accountBalance->accountType->amount->value . "\n";
            echo "Name             :" . $accountBalance->name . "\n";
        }
    }
} catch (Exception $e) {
    echo "Exception        :" . $e->getMessage() . "\n";
}

echo "---- Start call GenerateQRIS ----\n";
try {
    $date = new DateTime('NOW');
    $external_id = $date->format('YmdHisu');
    $partner_ref_no = $date->format('YmdHisu');
    $amount_value = "10001.00";
    $amount_currency = "IDR";
	$fee_amount_value = "10001.00";
    $fee_amount_currency = "IDR";
    $merchant_id = "23489182303312";
    $sub_merchant_id = "23489182303312";
    $terminal_id = "213141251124";
    $convenience_fee = "0.00";
    $partner_merchant_type = "";
    $terminal_location_name = "";

    $corp_id = "H2HAUTO014";

    $generateQRISRequest = new \com\bca\openapi\client\entity\generateqrisrequest\GenerateQRISRequest();
    $generateQRISRequest->partnerReferenceNo = $partner_ref_no;
    $amount = new \com\bca\openapi\client\entity\generateqrisrequest\Amount();
    $amount->currency = $amount_currency;
    $amount->value = $amount_value;
    $generateQRISRequest->amount = $amount;
	$feeAmount = new \com\bca\openapi\client\entity\generateqrisrequest\FeeAmount();
	$feeAmount->currency = $fee_amount_currency;
    $feeAmount->value = $fee_amount_value;
    $generateQRISRequest->feeAmount = $feeAmount;
    $generateQRISRequest->merchantId = $merchant_id;
    $generateQRISRequest->subMerchantId = $sub_merchant_id;
    $generateQRISRequest->terminalId =  $terminal_id;
    $additionalInfo = new \com\bca\openapi\client\entity\generateqrisrequest\AdditionalInfo();
    $additionalInfo->convenienceFee = $convenience_fee;
    $additionalInfo->partnerMerchantType = $partner_merchant_type;
    $additionalInfo->terminalLocationName = $terminal_location_name;
    $generateQRISRequest->additionalInfo = $additionalInfo;
    
    $generateQRISService = new \com\bca\openapi\client\services\GenerateQRISService(
	  $host,
 	  $origin,
	  $corp_id,
	  $client_key,
	  $client_secret,
	  $private_key,
	  $timeout_second);

    $generateQRIS = $generateQRISService->generateQRIS(
        $external_id,
        $generateQRISRequest
    );

    if ($generateQRIS->ErrorCode != null) {
        echo "Error Code        :" . $generateQRIS->ErrorCode . "\n";
        echo "Indonesian        :" . $generateQRIS->ErrorMessage->Indonesian . "\n";
        echo "English           :" . $generateQRIS->ErrorMessage->English . "\n";
    } else {
        echo "Response Code    :" . $generateQRIS->responseCode . "\n";
        echo "Response Message :" . $generateQRIS->responseMessage . "\n";
        if ($generateQRIS->qrImage != null) {
            echo "QR Image         :" . $generateQRIS->qrImage . "\n";
            echo "Merchant Name    :" . $generateQRIS->merchantName . "\n";
	    echo "Terminal Id	   :" . $generateQRIS->terminalId . "\n";
        }
    }
} catch (Exception $e) {
    echo "Exception        :" . $e->getMessage() . "\n";
}

echo "---- Start call InquiryQRIS ----\n";
try {
    $date = new DateTime('NOW');
    $external_id = $date->format('YmdHisu');
    $original_partner_ref_no = $date->format('YmdHisu');
    $original_ref_no = "2020102977770000000009";
    $service_code = "51";
    $merchant_id = "23489182303312";
    $sub_merchant_id = "23489182303312";
    $terminal_id = "213141251124";
    $partner_merchant_type = "SA";

    $corp_id = "H2HAUTO014";

    $inquiryQRISRequest = new \com\bca\openapi\client\entity\inquiryqrisrequest\InquiryQRISRequest();
    $inquiryQRISRequest->originalPartnerReferenceNo = $original_partner_ref_no;
	$inquiryQRISRequest->originalReferenceNo = $original_ref_no;
	$inquiryQRISRequest->serviceCode = $service_code;
    $inquiryQRISRequest->merchantId = $merchant_id;
    $inquiryQRISRequest->subMerchantId = $sub_merchant_id;
    $additionalInfo = new \com\bca\openapi\client\entity\inquiryqrisrequest\AdditionalInfo();
    $additionalInfo->terminalId = $terminal_id;
    $additionalInfo->partnerMerchantType = $partner_merchant_type;
    $inquiryQRISRequest->additionalInfo = $additionalInfo;
    
    $inquiryQRISService = new \com\bca\openapi\client\services\InquiryQRISService(
	  $host,
 	  $origin,
	  $corp_id,
	  $client_key,
	  $client_secret,
	  $private_key,
	  $timeout_second);

    $inquiryQRIS = $inquiryQRISService->inquiryQRIS(
        $external_id,
        $inquiryQRISRequest
    );

    if ($inquiryQRIS->ErrorCode != null) {
        echo "Error Code        :" . $inquiryQRIS->ErrorCode . "\n";
        echo "Indonesian        :" . $inquiryQRIS->ErrorMessage->Indonesian . "\n";
        echo "English           :" . $inquiryQRIS->ErrorMessage->English . "\n";
    } else {
        echo "Response Code    :" . $inquiryQRIS->responseCode . "\n";
        echo "Response Message :" . $inquiryQRIS->responseMessage . "\n";
        if ($inquiryQRIS->amount != null) {
            echo "Original Partner Reference No       :" . $inquiryQRIS->originalPartnerReferenceNo . "\n";
            echo "Original Reference No    :" . $inquiryQRIS->originalReferenceNo . "\n";
			echo "Transaction Status Desc	   :" . $inquiryQRIS->transactionStatusDesc . "\n";
        }
    }
} catch (Exception $e) {
    echo "Exception        :" . $e->getMessage() . "\n";
}

echo "---- Start call SettlementQRIS ----\n";
try {
    $date = new DateTime('NOW');
    $external_id = $date->format('YmdHisu');
    $merchant_id = "123456789";
	$terminal_id = "A1553120";
	$partner_merchant_type = "NOVA";
    $total_record = "999";
    $total_base_amount = "1000000000.00";
    $total_amount= "1000000000.00";
    $partner_settlement_no = "10122101";

    $corp_id = "HELLOKITTY";

    $settlementQRISRequest = new \com\bca\openapi\client\entity\settlementqrisrequest\SettlementQRISRequest();
    $settlementQRISRequest->merchantId = $merchant_id;
	$settlementQRISRequest->terminalId = $terminal_id;
	$settlementQRISRequest->partnerMerchantType = $partner_merchant_type;
	$settlementQRISRequest->totalRecord = $total_record;
    $settlementQRISRequest->totalBaseAmount = $total_base_amount;
	$settlementQRISRequest->totalAmount = $total_amount;
	$settlementQRISRequest->partnerSettlementNo = $partner_settlement_no;
    
    $settlementQRISService = new \com\bca\openapi\client\services\SettlementQRISService(
	  $host,
 	  $origin,
	  $corp_id,
	  $client_key,
	  $client_secret,
	  $private_key,
	  $timeout_second);

    $settlementQRIS = $settlementQRISService->settlementQRIS(
        $external_id,
        $settlementQRISRequest
    );

    if ($settlementQRIS->ErrorCode != null) {
        echo "Error Code        :" . $settlementQRIS->ErrorCode . "\n";
        echo "Indonesian        :" . $settlementQRIS->ErrorMessage->Indonesian . "\n";
        echo "English           :" . $settlementQRIS->ErrorMessage->English . "\n";
    } else {
        echo "Response Code    :" . $settlementQRIS->responseCode . "\n";
        echo "Response Message :" . $settlementQRIS->responseMessage . "\n";
        if ($settlementQRIS->debitCard != null) {
            echo "Merchant ID       :" . $settlementQRIS->merchantId . "\n";
            echo "Partner Settlement No    :" . $settlementQRIS->partnerSettlementNo . "\n";
			echo "Debit Card Total Amount	   :" . $settlementQRIS->debitCard->totalAmount . "\n";			
        }
    }
} catch (Exception $e) {
    echo "Exception        :" . $e->getMessage() . "\n";
}

echo "---- Start call OneKlikAccountBinding ----\n";
try {
    $date = new DateTime('NOW');
    $external_id = $date->format('YmdHisu');
	$ip_address = "123.123.123.123";
	$device_id = "WEB||Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Safari/537.36";
    $merchant_id = "61001";
    $additional_data_user_id = "customer01";
    $additional_info_additional_info = "customer01@gmail.com";
    $additional_info_merchant_logo_url = "https://png.pngtree.com/png-vector/20190223/ourmid/pngtree-vector-picture-icon-png-image_695350.jpg";
  
    $corp_id = "61001";

    $oneklikAccountBindingRequest = new \com\bca\openapi\client\entity\oneklikaccountbindingrequest\OneklikAccountBindingRequest();
    $oneklikAccountBindingRequest->merchantId = $merchant_id;
    $additionalData = new \com\bca\openapi\client\entity\oneklikaccountbindingrequest\AdditionalData();
    $additionalData->userId = $additional_data_user_id;
	$oneklikAccountBindingRequest->additionalData = $additionalData;
    $additionalInfo = new \com\bca\openapi\client\entity\oneklikaccountbindingrequest\AdditionalInfo();
    $additionalInfo->additionalInfo = $additional_info_additional_info;
    $additionalInfo->merchantLogoUrl = $additional_info_merchant_logo_url;
    $oneklikAccountBindingRequest->additionalInfo = $additionalInfo;
    
    $oneklikAccountBindingService = new \com\bca\openapi\client\services\OneklikAccountBindingService(
	  $host,
 	  $origin,
	  $corp_id,
	  $client_key,
	  $client_secret,
	  $private_key,
	  $timeout_second);

    $oneklikAccountBinding = $oneklikAccountBindingService->accountBinding(
        $external_id,
		$ip_address,
		$device_id,
        $oneklikAccountBindingRequest
    );

    if ($oneklikAccountBinding->ErrorCode != null) {
        echo "Error Code        :" . $oneklikAccountBinding->ErrorCode . "\n";
        echo "Indonesian        :" . $oneklikAccountBinding->ErrorMessage->Indonesian . "\n";
        echo "English           :" . $oneklikAccountBinding->ErrorMessage->English . "\n";
    } else {
        echo "Response Code    :" . $oneklikAccountBinding->responseCode . "\n";
        echo "Response Message :" . $oneklikAccountBinding->responseMessage . "\n";
        if ($oneklikAccountBinding->referenceNo != null) {
            echo "Reference No         :" . $oneklikAccountBinding->referenceNo . "\n";
            echo "Request Id    :" . $oneklikAccountBinding->additionalInfo->requestId . "\n";
			echo "Random String	   :" . $oneklikAccountBinding->additionalInfo->randomString . "\n";
        }
    }
} catch (Exception $e) {
    echo "Exception        :" . $e->getMessage() . "\n";
}

echo "---- Start call OneKlikAccountBindingInquiry ----\n";
try {
    $date = new DateTime('NOW');
    $external_id = $date->format('YmdHisu');
    $additional_info_user_id = "customer01";
	$requestIds = null;
  
    $corp_id = "61001";

    $oneklikAccountBindingInquiryRequest = new \com\bca\openapi\client\entity\oneklikaccountbindinginquiryrequest\OneklikAccountBindingInquiryRequest();
    $additionalInfo = new \com\bca\openapi\client\entity\oneklikaccountbindinginquiryrequest\AdditionalInfo();
    $additionalInfo->userId = $additional_info_user_id;
	
	//$additionalInfo->requestIds = ["2c90c800702d1234017033ab9a060003"];
	$additionalInfo->requestIds = $requestIds;
	$oneklikAccountBindingInquiryRequest->additionalInfo = $additionalInfo;

    $oneklikAccountBindingInquiryService = new \com\bca\openapi\client\services\OneklikAccountBindingInquiryService(
	  $host,
 	  $origin,
	  $corp_id,
	  $client_key,
	  $client_secret,
	  $private_key,
	  $timeout_second);

    $oneklikAccountBindingInquiry = $oneklikAccountBindingInquiryService->accountBindingInquiry(
        $external_id,
        $oneklikAccountBindingInquiryRequest
    );

    if ($oneklikAccountBindingInquiry->ErrorCode != null) {
        echo "Error Code        :" . $oneklikAccountBindingInquiry->ErrorCode . "\n";
        echo "Indonesian        :" . $oneklikAccountBindingInquiry->ErrorMessage->Indonesian . "\n";
        echo "English           :" . $oneklikAccountBindingInquiry->ErrorMessage->English . "\n";
    } else {
        echo "Response Code    :" . $oneklikAccountBindingInquiry->responseCode . "\n";
        echo "Response Message :" . $oneklikAccountBindingInquiry->responseMessage . "\n";
        if ($oneklikAccountBindingInquiry->additionalInfo->accountData[0]->status != null) {
            echo "Additional Info         :" . $oneklikAccountBindingInquiry->additionalInfo->accountData[0]->status . "\n";
        }
    }
} catch (Exception $e) {
    echo "Exception        :" . $e->getMessage() . "\n";
}

echo "---- Start call OneKlikAccountUnbinding ----\n";
try {
    $date = new DateTime('NOW');
    $external_id = $date->format('YmdHisu');
    $merchant_id = "61001";
    $additional_info_xco_id = "a6fe3266cafd4cddbe3d77e1a9855634";
  
    $corp_id = "61001";

    $oneklikAccountUnbindingRequest = new \com\bca\openapi\client\entity\oneklikaccountunbindingrequest\OneklikAccountUnbindingRequest();
    $oneklikAccountUnbindingRequest->merchantId = $merchant_id;
    $additionalInfo = new \com\bca\openapi\client\entity\oneklikaccountunbindingrequest\AdditionalInfo();
    $additionalInfo->xcoId = $additional_info_xco_id;
    $oneklikAccountUnbindingRequest->additionalInfo = $additionalInfo;
    
    $oneklikAccountUnbindingService = new \com\bca\openapi\client\services\OneklikAccountUnbindingService(
	  $host,
 	  $origin,
	  $corp_id,
	  $client_key,
	  $client_secret,
	  $private_key,
	  $timeout_second);

    $oneklikAccountUnbinding = $oneklikAccountUnbindingService->accountUnbinding(
        $external_id,
        $oneklikAccountUnbindingRequest
    );

    if ($oneklikAccountUnbinding->ErrorCode != null) {
        echo "Error Code        :" . $oneklikAccountUnbinding->ErrorCode . "\n";
        echo "Indonesian        :" . $oneklikAccountUnbinding->ErrorMessage->Indonesian . "\n";
        echo "English           :" . $oneklikAccountUnbinding->ErrorMessage->English . "\n";
    } else {
        echo "Response Code    :" . $oneklikAccountUnbinding->responseCode . "\n";
        echo "Response Message :" . $oneklikAccountUnbinding->responseMessage . "\n";
        if ($oneklikAccountUnbinding->referenceNo != null) {
            echo "Reference No         :" . $oneklikAccountUnbinding->referenceNo . "\n";
			echo "xcoId	   :" . $oneklikAccountUnbinding->additionalInfo>xcoId . "\n";
        }
    }
} catch (Exception $e) {
    echo "Exception        :" . $e->getMessage() . "\n";
}

echo "---- Start call OneKlikPayment ----\n";
try {
    $date = new DateTime('NOW');
    $external_id = $date->format('YmdHisu');
	$partner_ref_no =  $date->format('Ymd')."0000000001";
	$ip_address = "123.123.123.123";
	$device_id = "WEB||Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Safari/537.36";
    $merchant_id = "61001";
	$additional_info_user_id = "customer01";
	$additional_info_customer_name = "John Smith";
	$additional_info_description = "Payment for phone billing";
	$additional_info_payment_type="FULL";
	$additional_info_trx_time="2020-10-29T00:00:01+07:00";
    $additional_info_xco_id = "a6fe3266cafd4cddbe3d77e1a9855634";
	$subCompanyCode ="00000";
	$subBillAmount="99000.00";
	$payMethod = "ONEKLIK";
	$payOption = "ONEKLIK_BCA";
	$transamount_value = "100000.00";
	$transamount_currency="IDR";
	$feeamount_value = "1000.00";
	$feeamount_currency="IDR";
	
  
    $corp_id = "61001";

    $oneklikPaymentRequest = new \com\bca\openapi\client\entity\oneklikpaymentrequest\OneklikPaymentRequest();
	$oneklikPaymentRequest->partnerReferenceNo = $partner_ref_no;
    $oneklikPaymentRequest->merchantId = $merchant_id;
    $additionalInfo = new \com\bca\openapi\client\entity\oneklikpaymentrequest\AdditionalInfo();
	$additionalInfo->userId = $additional_info_user_id;
	$additionalInfo->customerName = $additional_info_customer_name;
	$additionalInfo->description = $additional_info_description;
	$additionalInfo->paymentType = $additional_info_payment_type;
	$additionalInfo->transactionTime = $additional_info_trx_time;
	$additionalInfo->xcoId = $additional_info_xco_id;
	$additionalInfo->customerName = $additional_info_customer_name;
	
	$additionalInfo->billDetails[0]->subCompanyCode = $subCompanyCode;
	$additionalInfo->billDetails[0]->subBillAmount = $subBillAmount;
		
	$oneklikPaymentRequest->payOptionDetails[0]->payMethod = $payMethod;
	$oneklikPaymentRequest->payOptionDetails[0]->payOption = $payOption;
	$oneklikPaymentRequest->payOptionDetails[0]->transAmount->value = $transamount_value;
	$oneklikPaymentRequest->payOptionDetails[0]->transAmount->currency =  $transamount_currency;
	$oneklikPaymentRequest->payOptionDetails[0]->feeAmount->value = $feeamount_value;
	$oneklikPaymentRequest->payOptionDetails[0]->feeAmount->currency = $feeamount_currency;
	
    $oneklikPaymentRequest->additionalInfo = $additionalInfo;
    
    $oneklikPaymentService = new \com\bca\openapi\client\services\OneklikPaymentService(
	  $host,
 	  $origin,
	  $corp_id,
	  $client_key,
	  $client_secret,
	  $private_key,
	  $timeout_second);

    $oneklikPayment = $oneklikPaymentService->payment(
        $external_id,
		$ip_address,
		$device_id,
        $oneklikPaymentRequest
    );

    if ($oneklikPayment->ErrorCode != null) {
        echo "Error Code        :" . $oneklikPayment->ErrorCode . "\n";
        echo "Indonesian        :" . $oneklikPayment->ErrorMessage->Indonesian . "\n";
        echo "English           :" . $oneklikPayment->ErrorMessage->English . "\n";
    } else {
        echo "Response Code    :" . $oneklikPayment->responseCode . "\n";
        echo "Response Message :" . $oneklikPayment->responseMessage . "\n";
        if ($oneklikPayment->referenceNo != null) {
            echo "Reference No         :" . $oneklikPayment->referenceNo . "\n";
			echo "xcoId	   :" . $oneklikPayment->additionalInfo>xcoId . "\n";
        }
    }
} catch (Exception $e) {
    echo "Exception        :" . $e->getMessage() . "\n";
}

echo "---- Start call OneKlikInquiryPaymentStatus ----\n";
try {
    $date = new DateTime('NOW');
    $external_id = $date->format('YmdHisu');
	$original_partner_ref_no = "564ed89df6e34da120";
    $service_code = "54";
  
    $corp_id = "61001";

    $oneklikInquiryPaymentStatusRequest = new \com\bca\openapi\client\entity\oneklikinquirypaymentstatusrequest\OneklikInquiryPaymentStatusRequest();
	$oneklikInquiryPaymentStatusRequest->originalPartnerReferenceNo = $original_partner_ref_no;
    $oneklikInquiryPaymentStatusRequest->serviceCode = $service_code;

    $oneklikInquiryPaymentStatusService = new \com\bca\openapi\client\services\OneklikInquiryPaymentStatusService(
	  $host,
 	  $origin,
	  $corp_id,
	  $client_key,
	  $client_secret,
	  $private_key,
	  $timeout_second);

    $oneklikInquiryPaymentStatus = $oneklikInquiryPaymentStatusService->inquiryStatus(
        $external_id,
        $oneklikInquiryPaymentStatusRequest
    );

    if ($oneklikInquiryPaymentStatus->ErrorCode != null) {
        echo "Error Code        :" . $oneklikInquiryPaymentStatus->ErrorCode . "\n";
        echo "Indonesian        :" . $oneklikInquiryPaymentStatus->ErrorMessage->Indonesian . "\n";
        echo "English           :" . $oneklikInquiryPaymentStatus->ErrorMessage->English . "\n";
    } else {
        echo "Response Code    :" . $oneklikInquiryPaymentStatus->responseCode . "\n";
        echo "Response Message :" . $oneklikInquiryPaymentStatus->responseMessage . "\n";
        if ($oneklikInquiryPaymentStatus->originalReferenceNo != null) {
            echo "Original Reference No      :" . $oneklikInquiryPaymentStatus->originalReferenceNo . "\n";
			echo "Latest Transaction Status      :" . $oneklikInquiryPaymentStatus->latestTransactionStatus . "\n";
        }
    }
} catch (Exception $e) {
    echo "Exception        :" . $e->getMessage() . "\n";
}

echo "---- Start call OneKlikInquiryPhoneNumberOTP ----\n";
try {
    $date = new DateTime('NOW');
    $external_id = $date->format('YmdHisu');
    $merchant_id = "61001";
	$additional_info_user_id = "customer01";
    $additional_info_xco_id = "a6fe3266cafd4cddbe3d77e1a9855634";
  
    $corp_id = "61001";

    $oneklikInquiryPhoneNumberOTPRequest = new \com\bca\openapi\client\entity\oneklikinquiryphonenumberotprequest\OneklikInquiryPhoneNumberOTPRequest();
    $oneklikInquiryPhoneNumberOTPRequest->merchantId = $merchant_id;
    $additionalInfo = new \com\bca\openapi\client\entity\oneklikinquiryphonenumberotprequest\AdditionalInfo();
	$additionalInfo->userId = $additional_info_user_id;
    $additionalInfo->xcoId = $additional_info_xco_id;
    $oneklikInquiryPhoneNumberOTPRequest->additionalInfo = $additionalInfo;
    
    $oneklikInquiryPhoneNumberOTPService = new \com\bca\openapi\client\services\OneklikInquiryPhoneNumberOTPService(
	  $host,
 	  $origin,
	  $corp_id,
	  $client_key,
	  $client_secret,
	  $private_key,
	  $timeout_second);
    $oneklikInquiryPhoneNumberOTPService->setCacheTokenDisable();

    $oneklikInquiryPhoneNumberOTP = $oneklikInquiryPhoneNumberOTPService->inquiryOTP(
        $external_id,
        $oneklikInquiryPhoneNumberOTPRequest
    );

    if ($oneklikInquiryPhoneNumberOTP->ErrorCode != null) {
        echo "Error Code        :" . $oneklikInquiryPhoneNumberOTP->ErrorCode . "\n";
        echo "Indonesian        :" . $oneklikInquiryPhoneNumberOTP->ErrorMessage->Indonesian . "\n";
        echo "English           :" . $oneklikInquiryPhoneNumberOTP->ErrorMessage->English . "\n";
    } else {
        echo "Response Code    :" . $oneklikInquiryPhoneNumberOTP->responseCode . "\n";
        echo "Response Message :" . $oneklikInquiryPhoneNumberOTP->responseMessage . "\n";
        if ($oneklikInquiryPhoneNumberOTP->additionalInfo->msisdnList[0]->phoneId!= null) {
            echo "Additional Info Phone Number     :" . $oneklikInquiryPhoneNumberOTP->additionalInfo->msisdnList[0]->phoneNumber . "\n";
        }
    }
} catch (Exception $e) {
    echo "Exception        :" . $e->getMessage() . "\n";
}

echo "---- Start call OneKlikGeneratePaymentOTP ----\n";
try {
    $date = new DateTime('NOW');
    $external_id = $date->format('YmdHisu');
	$partner_ref_no = $date->format('Ymd')."0000000001";
	$journey_id = $external_id;
	$bank_card_token = "a6fe3266cafd4cddbe3d77e1a9855634";
    $merchant_id = "61001";
	$trx_date_time = "2020-10-29T00:00:01+07:00";
	$additional_info_user_id = "customer01";
	$additional_info_trans_amount_value = "1000000.00";
	$additional_info_trans_amount_currency = "IDR";
    $additional_info_phone_id = "b5da903138c748a38264cea0424a191e";
  
    $corp_id = "61001";

    $oneklikGeneratePaymentOTPRequest = new \com\bca\openapi\client\entity\oneklikgeneratepaymentotprequest\OneklikGeneratePaymentOTPRequest();
	$oneklikGeneratePaymentOTPRequest->journeyId = $journey_id;
	$oneklikGeneratePaymentOTPRequest->bankCardToken = $bank_card_token;
	$oneklikGeneratePaymentOTPRequest->merchantId = $merchant_id;
	$oneklikGeneratePaymentOTPRequest->partnerReferenceNo = $partner_ref_no;
    $oneklikGeneratePaymentOTPRequest->trxDateTime = $trx_date_time;
    $additionalInfo = new \com\bca\openapi\client\entity\oneklikgeneratepaymentotprequest\AdditionalInfo();
	$additionalInfo->userId = $additional_info_user_id;
	$transAmount = new \com\bca\openapi\client\entity\oneklikgeneratepaymentotprequest\TransAmount();
	$transAmount->value = $additional_info_trans_amount_value;
	$transAmount->currency = $additional_info_trans_amount_currency;
	$additionalInfo->transAmount = $transAmount;
    $additionalInfo->phoneId = $additional_info_phone_id;
    $oneklikGeneratePaymentOTPRequest->additionalInfo = $additionalInfo;
    
    $oneklikGeneratePaymentOTPService = new \com\bca\openapi\client\services\OneklikGeneratePaymentOTPService(
	  $host,
 	  $origin,
	  $corp_id,
	  $client_key,
	  $client_secret,
	  $private_key,
	  $timeout_second);

    $oneklikGeneratePaymentOTP = $oneklikGeneratePaymentOTPService->generateOTP(
        $external_id,
        $oneklikGeneratePaymentOTPRequest
    );

    if ($oneklikGeneratePaymentOTP->ErrorCode != null) {
        echo "Error Code        :" . $oneklikGeneratePaymentOTP->ErrorCode . "\n";
        echo "Indonesian        :" . $oneklikGeneratePaymentOTP->ErrorMessage->Indonesian . "\n";
        echo "English           :" . $oneklikGeneratePaymentOTP->ErrorMessage->English . "\n";
    } else {
        echo "Response Code    :" . $oneklikGeneratePaymentOTP->responseCode . "\n";
        echo "Response Message :" . $oneklikGeneratePaymentOTP->responseMessage . "\n";
        if ($oneklikGeneratePaymentOTP->chargeToken != null) {
			echo "Charge Token        :" . $oneklikGeneratePaymentOTP->chargeToken . "\n";
            echo "Additional Info        :" . $oneklikGeneratePaymentOTP->additionalInfo . "\n";
        }
    }
} catch (Exception $e) {
    echo "Exception        :" . $e->getMessage() . "\n";
}

echo "---- Start call TransferIntraBank ----\n";
try {
    $date = new DateTime('NOW');
    $external_id = $date->format('YmdHisu');
    $partner_ref_no = $date->format('YmdHisu');
    $amount_value = "10001.00";
    $amount_currency = "IDR";
    $customer_reference = $date->format('YmdHisu');
    $beneficiary_account_no = "0013007001";
    $currency = "IDR";
    $fee_type = "OUR";
    $remark = "testing transfer BCA";
    $source_account_no = "0013007009";
    $timestamp = new DateTime();
    $transaction_date = $timestamp->format('c');
    $beneficiary_email = "kbb_uat1@dti.co.id";
    $economic_activity = "Surat berharga dalam Rpm";
    $transaction_purpose = "01";

    $corp_id = "H2HAUTO014";

    $transferIntraBankRequest = new \com\bca\openapi\client\entity\transferintrabankrequest\TransferIntraBankRequest();
    $transferIntraBankRequest->partnerReferenceNo = $partner_ref_no;
    $amount = new \com\bca\openapi\client\entity\transferintrabankrequest\Amount();
    $amount->currency = $currency;
    $amount->value = $amount_value;
    $transferIntraBankRequest->amount = $amount;
    $transferIntraBankRequest->beneficiaryAccountNo = $beneficiary_account_no;
    $transferIntraBankRequest->currency = $currency;
    $transferIntraBankRequest->customerReference =  $customer_reference;
    $transferIntraBankRequest->feeType = $fee_type;
    $transferIntraBankRequest->remark = $remark;
    $transferIntraBankRequest->sourceAccountNo = $source_account_no;
    $transferIntraBankRequest->transactionDate = $transaction_date;
    $additionalInfo = new \com\bca\openapi\client\entity\transferintrabankrequest\AdditionalInfo();
    $additionalInfo->beneficiaryEmail = $beneficiary_email;
    $additionalInfo->economicActivity = $economic_activity;
    $additionalInfo->transactionPurpose = $transaction_purpose;
    $transferIntraBankRequest->additionalInfo = $additionalInfo;
    
    $transferIntraBankService = new \com\bca\openapi\client\services\TransferIntraBankService($host, $origin, $corp_id, $client_key, $client_secret, $private_key, $timeout_second);
    $transferIntraBank = $transferIntraBankService->processTransferIntraBank(
        $external_id,
        $transferIntraBankRequest
    );

    if ($transferIntraBank->ErrorCode != null) {
        echo "Error Code        :" . $transferIntraBank->ErrorCode . "\n";
        echo "Indonesian        :" . $transferIntraBank->ErrorMessage->Indonesian . "\n";
        echo "English           :" . $transferIntraBank->ErrorMessage->English . "\n";
    } else {
        echo "Response Code    :" . $transferIntraBank->responseCode . "\n";
        echo "Response Message :" . $transferIntraBank->responseMessage . "\n";
        if ($transferIntraBank->amount != null) {
            echo "Currency         :" . $transferIntraBank->amount->currency . "\n";
            echo "Amount           :" . $transferIntraBank->amount->value . "\n";
        }
    }
} catch (Exception $e) {
    echo "Exception        :" . $e->getMessage() . "\n";
}
echo "---- Start call TransferStatus ----\n";
try {
    $date = new DateTime('NOW');
    $external_id = $date->format('YmdHisu');
    $ori_partner_ref_no = "20220215111904208";
    $ori_ref_no = "22021502064775";
    $ori_external_id = "20220215111904208";
    $service_code = "23";
    $trx_date = "2022-02-15T14:57:15+07:00";
    $amount_value = "10000.00";
    $amount_currency = "IDR";

    $transferStatusService = new \com\bca\openapi\client\services\TransferStatusService($host, $origin, $corp_id, $client_key, $client_secret, $private_key, $timeout_second);
    $transferStatusRequest = new \com\bca\openapi\client\entity\transferstatusrequest\TransferStatusRequest();
    $amount = new \com\bca\openapi\client\entity\transferstatusrequest\Amount();
    $amount->currency = $amount_currency;
    $amount->value = $amount_value;
    $transferStatusRequest->originalPartnerReferenceNo = $ori_partner_ref_no;
    $transferStatusRequest->originalReferenceNo = $ori_ref_no;
    $transferStatusRequest->originalExternalId = $ori_external_id;
    $transferStatusRequest->serviceCode = $service_code;
    $transferStatusRequest->transactionDate = $trx_date;
    $transferStatusRequest->amount = $amount;
    $transferStatus = $transferStatusService->getTransferStatus(
        $external_id,
        $transferStatusRequest
    );

    if ($transferStatus->ErrorCode != null) {
        echo "Error Code        :" . $transferStatus->ErrorCode . "\n";
        echo "Indonesian        :" . $transferStatus->ErrorMessage->Indonesian . "\n";
        echo "English           :" . $transferStatus->ErrorMessage->English . "\n";
    } else {
        echo "Response Code    :" . $transferStatus->responseCode . "\n";
        echo "Response Message :" . $transferStatus->responseMessage . "\n";
        if ($transferStatus->amount != null) {
            echo "Amount           :" . $transferStatus->amount->value . "\n";
            echo "Currency         :" . $transferStatus->amount->currency . "\n";
        }
    }
} catch (Exception $e) {
    echo "Exception        :" . $e->getMessage() . "\n";
}

echo "---- Start call TransferInterBankONL ----\n";
try {
    $date = new DateTime('NOW');
    $partner_ref_no = $date->format('YmdHisu');
    $external_id = $date->format('YmdHisu');
    $customer_reference = $date->format('YmdHisu');
    $amount_value = "10002.00";
    $amount_currency = "IDR";
    $beneficiary_account_name = "Trinawati Eka Putri";
    $beneficiary_account_no = "0013007001";
    $beneficiary_address = "Palembang";
    $beneficiary_bank_code = "BNINIDJA";
    $beneficiary_bank_name = "Bank BRI";
    $beneficiary_email = "yories.yolanda@work.bri.co.id";
    $currency = "IDR";
    $source_account_no = "0013007001";
    $transaction_date = $timestamp->format('c');
    $fee_type = "OUR";

    $transferInterBankONLService = new \com\bca\openapi\client\services\TransferInterBankONLService($host, $origin, $corp_id, $client_key, $client_secret, $private_key, $timeout_second);
    $transferInterBankONLRequest = new \com\bca\openapi\client\entity\transferinterbankonlrequest\TransferInterBankONLRequest();
    $amount = new \com\bca\openapi\client\entity\transferinterbankonlrequest\Amount();
    $amount->currency = $amount_currency;
    $amount->value = $amount_value;
    $transferInterBankONLRequest->partnerReferenceNo = $partner_ref_no;
    $transferInterBankONLRequest->amount = $amount;
    $transferInterBankONLRequest->beneficiaryAccountName = $beneficiary_account_name;
    $transferInterBankONLRequest->beneficiaryAccountNo = $beneficiary_account_no;
    $transferInterBankONLRequest->beneficiaryAddress = $beneficiary_address;
    $transferInterBankONLRequest->beneficiaryBankCode = $beneficiary_bank_code;
    $transferInterBankONLRequest->beneficiaryBankName = $beneficiary_bank_name;
    $transferInterBankONLRequest->beneficiaryEmail = $beneficiary_email;
    $transferInterBankONLRequest->currency = $currency;
    $transferInterBankONLRequest->customerReference = $customer_reference;
    $transferInterBankONLRequest->sourceAccountNo = $source_account_no;
    $transferInterBankONLRequest->transactionDate = $transaction_date;
    $transferInterBankONLRequest->feeType = $fee_type;

    $transferInterBankONL = $transferInterBankONLService->processTransferInterBankONL(
        $external_id,
        $transferInterBankONLRequest
    );

    if ($transferInterBankONL->ErrorCode != null) {
        echo "Error Code        :" . $transferInterBankONL->ErrorCode . "\n";
        echo "Indonesian        :" . $transferInterBankONL->ErrorMessage->Indonesian . "\n";
        echo "English           :" . $transferInterBankONL->ErrorMessage->English . "\n";
    } else {
        echo "Response Code    :" . $transferInterBankONL->responseCode . "\n";
        echo "Response Message :" . $transferInterBankONL->responseMessage . "\n";
        if ($transferInterBankONL->amount != null) {
            echo "Currency         :" . $transferInterBankONL->amount->currency . "\n";
            echo "Amount           :" . $transferInterBankONL->amount->value . "\n";
        }
    }
} catch (Exception $e) {
    echo "Exception        :" . $e->getMessage() . "\n";
}

echo "---- Start call TransferInterBankRTGS ----\n";
try {
    $date = new DateTime('NOW');
    $partner_ref_no = $date->format('YmdHisu');
    $external_id = $date->format('YmdHisu');
    $amount_value = "10003.00";
    $amount_currency = "IDR";
    $beneficiary_account_name = "Trinawati Eka Putri";
    $beneficiary_account_no = "0013007001";
    $beneficiary_address = "Palembang";
    $beneficiary_bank_code = "BNINIDJA";
    $beneficiary_bank_name = "Bank BRI";
    $beneficiary_cust_res= "1";
    $beneficiary_cust_type= "1";
    $beneficiary_email= "yories.yolanda@work.bri.co.id";
    $currency= "IDR";
    $customer_reference = $date->format('YmdHisu');
    $fee_type = "BEN";
    $kodepos = "12250"; 
    $receiver_phone = "080901020300";
    $remark = "remark test";
    $sender_cust_res = "1";
    $sender_cust_type = "1";
    $sender_phone = "080901020304";
    $source_account_no = "0880001256";
    $transaction_date = $timestamp->format('c');

    $transferInterBankRTGSService = new \com\bca\openapi\client\services\TransferInterBankRTGSService($host, $origin, $corp_id, $client_key, $client_secret, $private_key, $timeout_second);
    $transferInterBankRTGSRequest = new \com\bca\openapi\client\entity\transferinterbankrtgsrequest\TransferInterBankRTGSRequest();
    $amount = new \com\bca\openapi\client\entity\transferinterbankrtgsrequest\Amount();
    $amount->currency = $amount_currency;
    $amount->value = $amount_value;
    $transferInterBankRTGSRequest->partnerReferenceNo = $partner_ref_no;
    $transferInterBankRTGSRequest->amount = $amount;
    $transferInterBankRTGSRequest->beneficiaryAccountName = $beneficiary_account_name;
    $transferInterBankRTGSRequest->beneficiaryAccountNo = $beneficiary_account_no;
    $transferInterBankRTGSRequest->beneficiaryAddress = $beneficiary_address;
    $transferInterBankRTGSRequest->beneficiaryBankCode = $beneficiary_bank_code;
    $transferInterBankRTGSRequest->beneficiaryBankName = $beneficiary_bank_name;
    $transferInterBankRTGSRequest->beneficiaryCustomerResidence = $beneficiary_cust_res;
    $transferInterBankRTGSRequest->beneficiaryCustomerType = $beneficiary_cust_type;
    $transferInterBankRTGSRequest->beneficiaryEmail = $beneficiary_email;
    $transferInterBankRTGSRequest->currency = $currency;
    $transferInterBankRTGSRequest->customerReference = $customer_reference;
    $transferInterBankRTGSRequest->feeType = $fee_type;
    $transferInterBankRTGSRequest->kodepos = $kodepos;
    $transferInterBankRTGSRequest->receiverPhone = $receiver_phone;
    $transferInterBankRTGSRequest->remark = $remark;
    $transferInterBankRTGSRequest->senderCustomerResidence = $sender_cust_res;
    $transferInterBankRTGSRequest->senderCustomerType = $sender_cust_type;
    $transferInterBankRTGSRequest->senderPhone = $sender_phone;
    $transferInterBankRTGSRequest->sourceAccountNo = $source_account_no;
    $transferInterBankRTGSRequest->transactionDate = $transaction_date;
    $transferInterBankRTGS = $transferInterBankRTGSService->processTransferInterBankRTGS(
        $external_id,
        $transferInterBankRTGSRequest
    );

    if ($transferInterBankRTGS->ErrorCode != null) {
        echo "Error Code        :" . $transferInterBankRTGS->ErrorCode . "\n";
        echo "Indonesian        :" . $transferInterBankRTGS->ErrorMessage->Indonesian . "\n";
        echo "English           :" . $transferInterBankRTGS->ErrorMessage->English . "\n";
    } else {
        echo "Response Code    :" . $transferInterBankRTGS->responseCode . "\n";
        echo "Response Message :" . $transferInterBankRTGS->responseMessage . "\n";
        if ($transferInterBankRTGS->amount != null) {
            echo "Currency         :" . $transferInterBankRTGS->amount->currency . "\n";
            echo "Amount           :" . $transferInterBankRTGS->amount->value . "\n";
        }
    }
} catch (Exception $e) {
    echo "Exception        :" . $e->getMessage() . "\n";
}

echo "---- Start call TransferInterBankSKN ----\n";
try {
    $date = new DateTime('NOW');
    $partner_ref_no = $date->format('YmdHisu');
    $external_id = $date->format('YmdHisu');
    $amount_value = "10004.00";
    $amount_currency = "IDR";
    $beneficiary_account_name = "Trinawati Eka Putri";
    $beneficiary_account_no = "0013007001";
    $beneficiary_address = "Palembang";
    $beneficiary_bank_code = "BNINIDJA";
    $beneficiary_bank_name = "Bank BRI";
    $beneficiary_cust_res= "1";
    $beneficiary_cust_type= "1";
    $beneficiary_email= "yories.yolanda@work.bri.co.id";
    $currency= "IDR";
    $customer_reference = $date->format('YmdHisu');
    $fee_type = "BEN";
    $kodepos = "12250"; 
    $receiver_phone = "080901020300";
    $remark = "remark test";
    $sender_cust_res = "1";
    $sender_cust_type = "1";
    $sender_phone = "080901020304";
    $source_account_no = "0880001256";
    $transaction_date = $timestamp->format('c');

    $transferInterBankSKNService = new \com\bca\openapi\client\services\TransferInterBankSKNService($host, $origin, $corp_id, $client_key, $client_secret, $private_key, $timeout_second);
    $transferInterBankSKNRequest = new \com\bca\openapi\client\entity\transferinterbanksknrequest\TransferInterBankSKNRequest();
    $amount = new \com\bca\openapi\client\entity\transferinterbanksknrequest\Amount();
    $amount->currency = $amount_currency;
    $amount->value = $amount_value;
    $transferInterBankSKNRequest->partnerReferenceNo = $partner_ref_no;
    $transferInterBankSKNRequest->amount = $amount;
    $transferInterBankSKNRequest->beneficiaryAccountName = $beneficiary_account_name;
    $transferInterBankSKNRequest->beneficiaryAccountNo = $beneficiary_account_no;
    $transferInterBankSKNRequest->beneficiaryAddress = $beneficiary_address;
    $transferInterBankSKNRequest->beneficiaryBankCode = $beneficiary_bank_code;
    $transferInterBankSKNRequest->beneficiaryBankName = $beneficiary_bank_name;
    $transferInterBankSKNRequest->beneficiaryCustomerResidence = $beneficiary_cust_res;
    $transferInterBankSKNRequest->beneficiaryCustomerType = $beneficiary_cust_type;
    $transferInterBankSKNRequest->beneficiaryEmail = $beneficiary_email;
    $transferInterBankSKNRequest->currency = $currency;
    $transferInterBankSKNRequest->customerReference = $customer_reference;
    $transferInterBankSKNRequest->feeType = $fee_type;
    $transferInterBankSKNRequest->kodepos = $kodepos;
    $transferInterBankSKNRequest->receiverPhone = $receiver_phone;
    $transferInterBankSKNRequest->remark = $remark;
    $transferInterBankSKNRequest->senderCustomerResidence = $sender_cust_res;
    $transferInterBankSKNRequest->senderCustomerType = $sender_cust_type;
    $transferInterBankSKNRequest->senderPhone = $sender_phone;
    $transferInterBankSKNRequest->sourceAccountNo = $source_account_no;
    $transferInterBankSKNRequest->transactionDate = $transaction_date;
    $transferInterBankSKN = $transferInterBankSKNService->processTransferInterBankSKN(
        $external_id,
        $transferInterBankSKNRequest
    );

    if ($transferInterBankSKN->ErrorCode != null) {
        echo "Error Code        :" . $transferInterBankSKN->ErrorCode . "\n";
        echo "Indonesian        :" . $transferInterBankSKN->ErrorMessage->Indonesian . "\n";
        echo "English           :" . $transferInterBankSKN->ErrorMessage->English . "\n";
    } else {
        echo "Response Code    :" . $transferInterBankSKN->responseCode . "\n";
        echo "Response Message :" . $transferInterBankSKN->responseMessage . "\n";
        if ($transferInterBankSKN->amount != null) {
            echo "Currency         :" . $transferInterBankSKN->amount->currency . "\n";
            echo "Amount           :" . $transferInterBankSKN->amount->value . "\n";
        }
    }
} catch (Exception $e) {
    echo "Exception        :" . $e->getMessage() . "\n";
}

echo "---- Start call ExternalAccountInquiry ----\n";
try {
    $date = new DateTime('NOW');
    $partner_reference_no = $date->format('YmdHisu');
    $external_id = $date->format('YmdHisu');
    $beneficiary_account_no = "0013007001";
    $beneficiary_bank_code = "BNINIDJA";

    $externalAccountInquiryService = new \com\bca\openapi\client\services\ExternalAccountInquiryService($host, $origin, $corp_id, $client_key, $client_secret, $private_key, $timeout_second);
    $externalAccountInquiryRequest = new \com\bca\openapi\client\entity\externalaccountinquiryrequest\ExternalAccountInquiryRequest();
    $externalAccountInquiryRequest->beneficiaryBankCode = $beneficiary_bank_code;
    $externalAccountInquiryRequest->beneficiaryAccountNo = $beneficiary_account_no;
    $externalAccountInquiryRequest->partnerReferenceNo = $partner_reference_no;
    $externalAccountInquiry = $externalAccountInquiryService->getExternalAccountInquiry(
        $external_id,
        $externalAccountInquiryRequest
    );

    if ($externalAccountInquiry->ErrorCode != null) {
        echo "Error Code        :" . $externalAccountInquiry->ErrorCode . "\n";
        echo "Indonesian        :" . $externalAccountInquiry->ErrorMessage->Indonesian . "\n";
        echo "English           :" . $externalAccountInquiry->ErrorMessage->English . "\n";
    } else {
        echo "Response Code    :" . $externalAccountInquiry->responseCode . "\n";
        echo "Response Message :" . $externalAccountInquiry->responseMessage . "\n";
        echo "Account Name     :" . $externalAccountInquiry->beneficiaryAccountName . "\n";
    }
} catch (Exception $e) {
    echo "Exception        :" . $e->getMessage() . "\n";
}

echo "---- Start call VAPaymentStatus ----\n";
try {
    $date = new DateTime('NOW');
    $external_id = $date->format('YmdHisu');
    $partner_service_id = "";
    $customer_no = "";
    $virtual_account_no = "   70001115124";
    $inquiry_request_id = "";
    $payment_request_id = "";

    $vaPaymentStatusService = new \com\bca\openapi\client\services\VAPaymentStatusService($host, $origin, $corp_id, $client_key, $client_secret, $private_key, $timeout_second);
    $vaPaymentStatusRequest = new \com\bca\openapi\client\entity\vapaymentstatusrequest\VAPaymentStatusRequest();
    $vaPaymentStatusRequest->partnerServiceId = $partner_service_id;
    $vaPaymentStatusRequest->customerNo = $customer_no;
    $vaPaymentStatusRequest->virtualAccountNo = $virtual_account_no;
    $vaPaymentStatusRequest->inquiryRequestId = $inquiry_request_id;
    $vaPaymentStatusRequest->paymentRequestId = $payment_request_id;
    $vaPaymentStatus = $vaPaymentStatusService->getVaPaymentStatus(
        $external_id,
        $vaPaymentStatusRequest
    );

    if ($vaPaymentStatus->ErrorCode != null) {
        echo "Error Code        :" . $vaPaymentStatus->ErrorCode . "\n";
        echo "Indonesian        :" . $vaPaymentStatus->ErrorMessage->Indonesian . "\n";
        echo "English           :" . $vaPaymentStatus->ErrorMessage->English . "\n";
    } else {
        echo "Response Code    :" . $vaPaymentStatus->responseCode . "\n";
        echo "Response Message :" . $vaPaymentStatus->responseMessage . "\n";
        if ($vaPaymentStatus->virtualAccountData->totalAmount->value != null) {
           echo "Total Amount   :" . $vaPaymentStatus->virtualAccountData->totalAmount->value . "\n";
           echo "Currency       :" . $vaPaymentStatus->virtualAccountData->totalAmount->currency . "\n";
           foreach ($vaPaymentStatus->virtualAccountData->billDetails as &$billDetail) {
            echo "Detail status    :" . $billDetail->status . "\n";
            echo "Detail Reason Ind:" . $billDetail->reason->indonesia . "\n";
            echo "Detail Reason Eng:" . $billDetail->reason->english . "\n";
        }
        foreach ($vaPaymentStatus->virtualAccountData->freeTexts as &$freeText) {
            echo "FreeText Ind     :" . $freeText->indonesia . "\n";
            echo "FreeText Eng     :" . $freeText->english . "\n";
        }

        }
    }
} catch (Exception $e) {
    echo "Exception        :" . $e->getMessage() . "\n";
}

echo "---- Start call VABillPresentment ----\n";
try {
    $date = new DateTime('NOW');
    $external_id = $date->format('YmdHisu');
    $partner_service_id = "   88999";
    $customer_no = "12345678901234567890";
    $virtual_account_no = "   88100202203170";
    $trxDateTime = "2022-06-02T01:30:24+07:00";
    $channel_code = "6011";
	$language = "ID";
	$amount_value = "50000.00";
	$amount_currency = "IDR";
	$source_account_no = "0614709550";
    $source_account_type = "S";
    $VABillPresentmentService = new \com\bca\openapi\client\services\VABillPresentmentService($host, $origin, $corp_id, $client_key, $client_secret, $private_key, $timeout_second);
    $VABillPresentmentRequest = new \com\bca\openapi\client\entity\VABillPresentmentrequest\VABillPresentmentRequest();
    $VABillPresentmentRequest->partnerServiceId = $partner_service_id;
    $VABillPresentmentRequest->customerNo = $customer_no;
    $VABillPresentmentRequest->virtualAccountNo = $virtual_account_no;
    $VABillPresentmentRequest->trxDateTime = $trx_date_time;
    $VABillPresentmentRequest->channelCode = $channel_code;
	$VABillPresentmentRequest->language = $language;
	$amount = new \com\bca\openapi\client\entity\vabillpresentmentrequest\Amount();
    $amount->currency = $amount_currency;
    $amount->value = $amount_value;
    $VABillPresentmentRequest->amount = $amount;
	$VABillPresentmentRequest->sourceAccountNo = $source_account_no;
	$VABillPresentmentRequest->sourceAccountType = $source_account_type;
    $VABillPresentment = $VABillPresentmentService->getInquiryBillPresentment(
        $external_id,
        $VABillPresentmentRequest
    );

    if ($VABillPresentment->ErrorCode != null) {
        echo "Error Code        :" . $VABillPresentment->ErrorCode . "\n";
        echo "Indonesian        :" . $VABillPresentment->ErrorMessage->Indonesian . "\n";
        echo "English           :" . $VABillPresentment->ErrorMessage->English . "\n";
    } else {
        echo "Response Code    :" . $VABillPresentment->responseCode . "\n";
        echo "Response Message :" . $VABillPresentment->responseMessage . "\n";
        if ($VABillPresentment->virtualAccountData->totalAmount->value != null) {
           echo "Total Amount   :" . $VABillPresentment->virtualAccountData->totalAmount->value . "\n";
           echo "Currency       :" . $VABillPresentment->virtualAccountData->totalAmount->currency . "\n";
        }
    }
} catch (Exception $e) {
    echo "Exception        :" . $e->getMessage() . "\n";
}

echo "---- Start call VAPayment ----\n";
try {
    $date = new DateTime('NOW');
    $external_id = $date->format('YmdHisu');
	$partnerServiceId= "   75100";
	$customerNo= "20220311001";
	$virtualAccountNo= "000770802022032001";
	$virtualAccountName= "Jokul Doe";
	$virtualAccountEmail= "kbb_uat2@dti.co.id";
	$virtualAccountPhone= "6282231235198";
	$sourceAccountNo= "0614709550";
	$sourceAccountType= "S";
	$inquiryRequestId= "abcdef-123456-abcdef";
	$partnerReferenceNo= "21090105";
	$paidAmount_value= "10501.00";
    $paidAmount_currency= "IDR";
	$cumulativePaymentAmount_value= "50000.00";
    $cumulativePaymentAmount_currency= "IDR";
	$paidBills= "50000";
	$totalAmount_value= "50000.00";
    $totalAmount_currency= "IDR";
	$trxDateTime= "2022-06-02T01:00:24+07:00";
	
    $VAPaymentRequest = new \com\bca\openapi\client\entity\VAPaymentrequest\VAPaymentRequest();
	$VAPaymentRequest->partnerServiceId = $partnerServiceId;
    $VAPaymentRequest->customerNo = $customerNo;
	$VAPaymentRequest->virtualAccountNo = $virtualAccountNo;
	$VAPaymentRequest->virtualAccountName = $virtualAccountName;
	$VAPaymentRequest->virtualAccountEmail = $virtualAccountEmail;
	$VAPaymentRequest->virtualAccountPhone = $virtualAccountPhone;
	$VAPaymentRequest->sourceAccountNo = $sourceAccountNo;
	$VAPaymentRequest->sourceAccountType = $sourceAccountType;
	$VAPaymentRequest->inquiryRequestId = $inquiryRequestId;
	$VAPaymentRequest->partnerReferenceNo = $partnerReferenceNo;
    $paidAmount = new \com\bca\openapi\client\entity\VAPaymentrequest\PaidAmount();
	$paidAmount->value = $paidAmount_value;
	$paidAmount->currency = $paidAmount_currency;
	$VAPaymentRequest->paidAmount = $paidAmount;
	$cumulativePaymentAmount = new \com\bca\openapi\client\entity\VAPaymentrequest\CumulativePaymentAmount();
	$cumulativePaymentAmount->value = $cumulativePaymentAmount_value;
	$cumulativePaymentAmount->currency = $cumulativePaymentAmount_currency;	
	$VAPaymentRequest->cumulativePaymentAmount = $cumulativePaymentAmount;
	$VAPaymentRequest->paidBills = $paidBills;
	$totalAmount = new \com\bca\openapi\client\entity\VAPaymentrequest\TotalAmount();
	$totalAmount->value = $totalAmount_value;
	$totalAmount->currency = $totalAmount_currency;	
	$VAPaymentRequest->totalAmount = $totalAmount;
	$VAPaymentRequest->trxDateTime = $trxDateTime;
	
    $VAPaymentService = new \com\bca\openapi\client\services\VAPaymentService(
	  $host,
 	  $origin,
	  $corp_id,
	  $client_key,
	  $client_secret,
	  $private_key,
	  $timeout_second);

    $VAPayment = $VAPaymentService->getVaPayment(
        $external_id,
        $VAPaymentRequest
    );

    if ($VAPayment->ErrorCode != null) {
        echo "Error Code        :" . $VAPayment->ErrorCode . "\n";
        echo "Indonesian        :" . $VAPayment->ErrorMessage->Indonesian . "\n";
        echo "English           :" . $VAPayment->ErrorMessage->English . "\n";
    } else {
        echo "Response Code    :" . $VAPayment->responseCode . "\n";
        echo "Response Message :" . $VAPayment->responseMessage . "\n";
        if ($VAPayment->virtualAccountData != null) {
            echo "Total Amount      :" . $VAPayment->virtualAccountData->totalAmount->value . "\n";
        }
    }
} catch (Exception $e) {
    echo "Exception        :" . $e->getMessage() . "\n";
}


echo "---- Start call InternalAccountInquiry ----\n";
try {
    $date = new DateTime('NOW');
    $partner_reference_no = $date->format('YmdHisu');
    $external_id = $date->format('YmdHisu');
    $beneficiary_account_no = "0100000474";

    $internalAccountInquiryService = new \com\bca\openapi\client\services\InternalAccountInquiryService($host, $origin, $corp_id, $client_key, $client_secret, $private_key, $timeout_second);
    $internalAccountInquiryRequest = new \com\bca\openapi\client\entity\internalaccountinquiryrequest\InternalAccountInquiryRequest();
    $internalAccountInquiryRequest->beneficiaryAccountNo = $beneficiary_account_no;
    $internalAccountInquiryRequest->partnerReferenceNo = $partner_reference_no;
    $internalAccountInquiry = $internalAccountInquiryService->getInternalAccountInquiry(
        $external_id,
        $internalAccountInquiryRequest
    );

        echo "Response Code    :" . $internalAccountInquiry->responseCode . "\n";
        echo "Response Message :" . $internalAccountInquiry->responseMessage . "\n";
        echo "Account Name     :" . $internalAccountInquiry->beneficiaryAccountName . "\n";
    
} catch (Exception $e) {
    echo "Exception        :" . $e->getMessage() . "\n";
}

echo "---- Start call SharedBiller inquiryPaymentStatus ----\n";
try {
    $date = new DateTime('NOW');
    $external_id = $date->format('YmdHisu');
    $partner_service_id = "03013";
    $customer_no = "123456789012345678";
    $virtual_account_no = "03013123456789012345678";
    $inquiry_request_id = "202209150858440301300001197374";

    $sharedBillerService = new \com\bca\openapi\client\services\SharedBillerService($host, $origin, $corp_id, $client_key, $client_secret, $private_key, $timeout_second);
    $sharedBillerRequest = new \com\bca\openapi\client\entity\sharedbillerinquirypaymentstatusrequest\SharedBillerRequest();
    $sharedBillerRequest->partnerServiceId = $partner_service_id;
    $sharedBillerRequest->customerNo = $customer_no;
    $sharedBillerRequest->virtualAccountNo = $virtual_account_no;
    $sharedBillerRequest->inquiryRequestId = $inquiry_request_id;
    $sharedBillerRequest->paymentRequestId = $payment_request_id;
    $sharedBillerResponse = $sharedBillerService->inquiryPaymentStatus(
        $external_id,
        $sharedBillerRequest
    );

        echo "Response Code    :" . $sharedBillerResponse->responseCode . "\n";
        echo "Response Message :" . $sharedBillerResponse->responseMessage . "\n";
        if ($sharedBillerResponse->virtualAccountData->totalAmount->value != null) {
           echo "Total Amount   :" . $sharedBillerResponse->virtualAccountData->totalAmount->value . "\n";
           echo "Currency       :" . $sharedBillerResponse->virtualAccountData->totalAmount->currency . "\n";
           foreach ($sharedBillerResponse->virtualAccountData->billDetails as &$billDetail) {
            echo "Detail status    :" . $billDetail->status . "\n";
            echo "Detail Reason Ind:" . $billDetail->reason->indonesia . "\n";
            echo "Detail Reason Eng:" . $billDetail->reason->english . "\n";
        }
        foreach ($sharedBillerResponse->virtualAccountData->freeTexts as &$freeText) {
            echo "FreeText Ind     :" . $freeText->indonesia . "\n";
            echo "FreeText Eng     :" . $freeText->english . "\n";
        }

        }
    
} catch (Exception $e) {
    echo "Exception        :" . $e->getMessage() . "\n";
}

echo "---- Start call SharedBiller billPresentment ----\n";
try {
    $date = new DateTime('NOW');
    $external_id = $date->format('YmdHisu');
    $partner_service_id = "   03013";
    $customer_no = "123456789012345678";
	$partner_reference_no = "1122334455";
    $virtual_account_no = "   03013123456789012345678";
    $trxDateTime = "2022-09-16T10:33:07+07:00";
    
    $sharedBillerService = new \com\bca\openapi\client\services\SharedBillerService($host, $origin, $corp_id, $client_key, $client_secret, $private_key, $timeout_second);
    $sharedBillerRequest = new \com\bca\openapi\client\entity\sharedbillerbillpresentmentrequest\SharedBillerRequest();
    $sharedBillerRequest->partnerServiceId = $partner_service_id;
    $sharedBillerRequest->customerNo = $customer_no;
	$sharedBillerRequest->partnerReferenceNo = $partner_reference_no;
    $sharedBillerRequest->virtualAccountNo = $virtual_account_no;
    $sharedBillerRequest->trxDateTime = $trx_date_time;
    
    $sharedBillerResponse = $sharedBillerService->billPresentment(
        $external_id,
        $sharedBillerRequest
    );

        echo "Response Code    :" . $sharedBillerResponse->responseCode . "\n";
        echo "Response Message :" . $sharedBillerResponse->responseMessage . "\n";
        if ($sharedBillerResponse->virtualAccountData->totalAmount->value != null) {
           echo "Total Amount   :" . $sharedBillerResponse->virtualAccountData->totalAmount->value . "\n";
           echo "Currency       :" . $sharedBillerResponse->virtualAccountData->totalAmount->currency . "\n";
        }
    
} catch (Exception $e) {
    echo "Exception        :" . $e->getMessage() . "\n";
}

echo "---- Start call SharedBiller paymentFlag ----\n";
try {
    $date = new DateTime('NOW');
    $external_id = $date->format('YmdHisu');
	$partnerServiceId= "   03013";
	$customerNo= "123456789012345678";
	$virtualAccountNo= "   03013123456789012345678";
	$inquiryRequestId= "202209161033070301300001197441";
	$partnerReferenceNo= "21090105";
	$paidAmount_value= "50000.00";
    $paidAmount_currency= "IDR";
	$trxDateTime= "2022-06-01T10:30:24+07:00";
	
    $sharedBillerRequest = new \com\bca\openapi\client\entity\sharedbillerpaymentflagrequest\SharedBillerRequest();
	$sharedBillerRequest->partnerServiceId = $partnerServiceId;
    $sharedBillerRequest->customerNo = $customerNo;
	$sharedBillerRequest->virtualAccountNo = $virtualAccountNo;
	$sharedBillerRequest->inquiryRequestId = $inquiryRequestId;
	$sharedBillerRequest->partnerReferenceNo = $partnerReferenceNo;
    $paidAmount = new \com\bca\openapi\client\entity\sharedbillerpaymentflagrequest\PaidAmount();
	$paidAmount->value = $paidAmount_value;
	$paidAmount->currency = $paidAmount_currency;
	$sharedBillerRequest->paidAmount = $paidAmount;
	$sharedBillerRequest->trxDateTime = $trxDateTime;
	
    $sharedBillerService = new \com\bca\openapi\client\services\SharedBillerService(
	  $host,
 	  $origin,
	  $corp_id,
	  $client_key,
	  $client_secret,
	  $private_key,
	  $timeout_second);

    $sharedBillerResponse = $sharedBillerService->paymentFlag(
        $external_id,
        $sharedBillerRequest
    );

        echo "Response Code    :" . $sharedBillerResponse->responseCode . "\n";
        echo "Response Message :" . $sharedBillerResponse->responseMessage . "\n";
        if ($sharedBillerResponse->virtualAccountData != null) {
            echo "Total Amount      :" . $sharedBillerResponse->virtualAccountData->totalAmount->value . "\n";
        }
    
} catch (Exception $e) {
    echo "Exception        :" . $e->getMessage() . "\n";
}