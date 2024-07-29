<?php
include_once("config.php");
// PLEASE ENABLE EXTENTION CURL OPENSSL
require dirname(__FILE__) . '/com/bca/openapi/client/utils/SignatureUtil.php';

date_default_timezone_set('Asia/Jakarta');

$client_id = "8cfcef3f-a591-4362-9648-3ecf187539ce";
$client_secret = "5fb67eb9-dec3-4967-9f32-d9ce7798e280";
$public_key = "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAziGKsFMaLQfLLhRcWnh1pw5qIxj3lhsTpK6zjDoRvRWuLA1QR9/rOupxnTXX/qfFaRK5jerhnqR5n9F3isS1vsBDa/wDnMk3iqo3yHppuMlqqqWBsc98Ah+icLQ2ZuJRu/N30jizs2bvGwECVt78vR4K9aWHGv8RBIL8SUTfCtN/9CzaPzi8YIFSEWVaBKkuThr8SuYnIefjDQuXk3k90D0zv2L65FcjbAwXAr5fV2jahTzoi30yYmP6uhl7dwl+dQI6RSQ+LDncLxrZxx2JRjwBVn1Ftrrh7B3GtzxOE9ju3dMRc1ULaqQwIhy4+OdVfGA9w1mMVkgVGjUE5XBvFQIDAQAB";
$private_key = "MIIEvwIBADANBgkqhkiG9w0BAQEFAASCBKkwggSlAgEAAoIBAQDOIYqwUxotB8suFFxaeHWnDmojGPeWGxOkrrOMOhG9Fa4sDVBH3+s66nGdNdf+p8VpErmN6uGepHmf0XeKxLW+wENr/AOcyTeKqjfIemm4yWqqpYGxz3wCH6JwtDZm4lG783fSOLOzZu8bAQJW3vy9Hgr1pYca/xEEgvxJRN8K03/0LNo/OLxggVIRZVoEqS5OGvxK5ich5+MNC5eTeT3QPTO/YvrkVyNsDBcCvl9XaNqFPOiLfTJiY/q6GXt3CX51AjpFJD4sOdwvGtnHHYlGPAFWfUW2uuHsHca3PE4T2O7d0xFzVQtqpDAiHLj451V8YD3DWYxWSBUaNQTlcG8VAgMBAAECggEAXskdtScBimNjErVaIl/x+feu5qS8dNHOnpOXDIxHS+OES81zdRmKWXUk+V2hDQCozkBGAvRW+1Q2eT8g8TazPBu85RLltlrwp1rOe+mOY+J6oi2pDdKS+4cAc0LrITRA0WSLXKemOoDCwnAcW0X+ghgmgf6zub5AXQq+aBK7XYZANpH0rOroFTUZU8A2esslzod69SSTAMPCNq6nKSGndi73NKW6gYPgAZIuPW+F6zy0XIDWncMma39Klp2KIjEysFGhLmACK5djGoMRfSGNbDqMQUxQfhDax5zxW2+vuRtmCfyEBRq117nhRcyBB3qTH5Hq3vIIPXARwEAO5ySlAQKBgQD1760iHXa/Rfsvf6ve6/fWNtHB2+/yvXJ8seursYKCLVs879hs8M1Y9T36/1G5Knc2s3gwRAIzV+xbKa20Q3l50h8NaP0D/OoortAfyF2adjIxa3dZnprnOu7IehQ8hAIrwWHTHeqIEoS7KBJlU7BuZaewyk+6UQP8bLS+j5LcyQKBgQDWkOIHG/weZwBWR0v7CXTJtBbtIBDX2v0n4Zt9C0aUSiRhvzBy1577JOV9ISQtQPgq18XH2ocgFItqXs9mKKkwdOkkkakXbWmJWcZgj1b7rPjRhDJrfxIbyLMYq+uPAbYDbBFwVmDWgT18dHPgWpC4ym21IQY5utlFu0gDIZNB7QKBgQDVX+j6nE2WjgTspPxdIKWaOV2rsEJyfGOERGmQQSZWAzwRlpZTjmjbMYtg5XvmBy3/S56PYbH3EeWDApouuAwA4YkHfXtnplsSiPkRWim8BahusCqQmscSr1LUpPZButaXV+Sj4mTFQivepVmwh/efEJt5C044/GlU7Iu0eaSV4QKBgQCEZ9+zN2e7cyBYHaMbhNhW6BUFuzXpni9+ftAut9iUBbSxxQOmurxWiow7TUo/ysnZ1lEsZQPhngvyVhNyHUFar6p3cJOB63im04mBaLLql/DricJ7Z2zLTGyImv6/vvSM5BFW21bix9ojhNFE715DSles4HYxBcayK0Hi/MMceQKBgQD0v3EQg1r7AhhH57fRMYkYNgX5LU2Fu0kIp7G1zFO3+VjWi9sZxuQQ3h+gY0/gULe98xrJ8x2RmvO3toqJjQhe3lAIU384VTJ2Fbzs6Jo0KSWe+0Aw9maQtOpbhwfE97wEg73c8Y38PON56PvZ8YNXXKMN6Fxt27OsF/x6Ovu1wQ==";
$time_stamp = date('Y-m-d\TH:i:sP');
$method = "POST";
$url = "/openapi/v2.0/transfer-interbank";
$getToken = mysqli_query($conn, "SELECT * FROM tb_bca_token WHERE id_bca_token = 1");
$rowToken = $getToken->fetch_array(MYSQLI_ASSOC);
$oauth_token = $rowToken['bca_token'];
// GET Value
$id_city = $_GET['city'];
$to_account = $_GET['to'];
$qty = $_GET['qty'];
$amount = number_format(1000 * $_GET['qty'], 2, '.', '');
$sj = $_GET['sj'];
$from_account = "8881051362";
$getSj = mysqli_query($conn, "SELECT * FROM tb_surat_jalan WHERE id_surat_jalan = '$sj'");
$rowSj = $getSj->fetch_array(MYSQLI_ASSOC);
$remark = "Auto Trnsfr Tst-" . $_GET['qty'] . "SAK-" . $rowSj['no_surat_jalan'];
$to_name = $_GET['to_name'];
$bank_code = $_GET['bank_code'];
// For Body
$partnerReferenceNo = date("YmdHis") . rand(10000000, 99999999);
$fromDate = date('Y-m-d\T00:00:00P');
$toDate = date('Y-m-d\T00:00:00P');
$bodyStr = "{\"partnerReferenceNo\": \"$partnerReferenceNo\",\"amount\": {\"value\": \"$amount\",\"currency\": \"IDR\"},\"beneficiaryAccountName\": \"$to_name\",\"beneficiaryAccountNo\": \"$to_account\",\"beneficiaryBankCode\": \"$bank_code\",\"sourceAccountNo\": \"$from_account\",\"transactionDate\": \"$time_stamp\",\"additionalInfo\": {\"transferType\": \"2\",\"purposeCode\": \"99\"}}";
$body = json_decode($bodyStr, true);
// echo $fromDate;

$signatureUtil = new \com\bca\openapi\client\utils\SignatureUtil;
// $signatureOauth = $signatureUtil->generateOauthSignature($private_key, $client_id, $time_stamp);

// echo $time_stamp;

// echo "Signature Oauth :" . $signatureOauth . "\n";
// $isValidSignatureOauth = $signatureUtil->validateOauthSignature($public_key, $client_id, $time_stamp, $signatureOauth);
// echo "isValidSignatureOauth :" . $isValidSignatureOauth . "\n";


$signatureApi = $signatureUtil->generateServiceSignature($client_secret, $method, $url, $oauth_token, $time_stamp, $body);
// echo "Signature api :" . $signatureApi . "\n";
// $isValidSignatureApi = $signatureUtil->validateServiceSignature($client_secret, $method, $url, $oauth_token, $time_stamp, $body, $signatureApi);
// echo "isValidSignatureApi :" . $isValidSignatureApi . "\n";

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.klikbca.com/openapi/v2.0/transfer-interbank',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => '{
  "partnerReferenceNo": "' . $partnerReferenceNo . '",
  "amount": {
    "value": "' . $amount . '",
    "currency": "IDR"
  },
  "beneficiaryAccountName": "' . $to_name . '",
  "beneficiaryAccountNo": "' . $to_account . '",
  "beneficiaryBankCode": "' . $bank_code . '",
  "sourceAccountNo": "' . $from_account . '",
  "transactionDate": "' . $time_stamp . '",
  "additionalInfo": {
    "transferType": "2",
    "purposeCode": "99"
  }
}',
  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer ' . $oauth_token,
    'Content-Type: application/json',
    'CHANNEL-ID: 95051',
    'X-TIMESTAMP: ' . $time_stamp,
    'X-SIGNATURE: ' . $signatureApi,
    'ORIGIN: ' . 'topmortarindonesia.com',
    'X-EXTERNAL-ID: ' . rand(10000000, 99999999),
    'X-PARTNER-ID: KBBTOPMORT',
    'X-CLIENT-KEY: ' . $client_id
  ),
));

$response = curl_exec($curl);

// $header_size = curl_getinfo($curl, CURLINFO_HEADER_SIZE);
// $header = substr($response, 0, $header_size);
// $body = substr($response, $header_size);

// $a = '{
//  "partnerReferenceNo": "' . $partnerReferenceNo . '",
//  "amount":{
//     "value": "10000.00",
//     "currency": "IDR"
//  },
//  "beneficiaryAccountName": "Yories Yolanda",
//  "beneficiaryAccountNo": "' . 888801000157508 . '",
//  "beneficiaryBankCode": "002",
//  "sourceAccountNo": "0611102380",
//  "transactionDate": "' . $time_stamp . '",
//  "additionalInfo":{
//     "transferType":"1",
//     "purposeCode":""
//  }
// }'

curl_close($curl);

$res = json_decode($response, true);

// echo $response;

if ($res['responseMessage'] == "Successful") {
  $reference_no = $res['referenceNo'];
  $transaction_date = date("Y-m-d H:i:s");

  $saveLog = mysqli_query($conn, "INSERT INTO tb_log_bca_test(id_city,id_surat_jalan,norek_asal,qty_sak,amount_transfered, reference_no,transaction_date,remark) VALUES($id_city, $sj,'$from_account',$qty,'$amount','$reference_no','$transaction_date','$remark')");

  if ($saveLog) {
    $return = ["response" => 200, "status" => "ok", "message" => "Success transfered, log saved!"];
    echo json_encode($return);
  } else {
    $return = ["response" => 200, "status" => "failed", "message" => "Success transfered but log not saved", "detail" => mysqli_error($conn)];
    echo json_encode($return);
  }
} else {
  $transaction_date = date("Y-m-d H:i:s");
  $saveLog = mysqli_query($conn, "INSERT INTO tb_log_bca_test(id_city,id_surat_jalan,norek_asal,qty_sak,amount_transfered, reference_no,transaction_date,remark) VALUES($id_city, $sj,'$from_account',$qty,'$amount','failed','$transaction_date','$remark')");

  $return = ["response" => 200, "status" => "failed", "message" => "Transfer failed", "detail" => $res];
  echo json_encode($return);
}

// $info = curl_getinfo($curl);
// print_r($info);
// print_r($info['request_header']);
// echo $header;
// echo $time_stamp . "<br>";
// echo $signatureApi;
// $detailData = $res['detailData'];
// echo json_encode($detailData);

// foreach ($detailData as $detailData) {
//     if ($detailData['type'] == 'CREDIT') {
//         $amount = (int)$detailData['amount']['value'];
//         $transactionDate = date('Y-m-d H:i:s');
//         $remark = $detailData['remark'] . " - Date: " . $detailData['transactionDate'];
//         $arrResponse = ['amount' => $amount, 'date' => $transactionDate, 'remark' => $remark];

//         $checkInv = mysqli_query($conn, "SELECT * FROM tb_invoice WHERE total_invoice = '$amount' AND status_invoice = 'waiting'");
//         $rowInv = $checkInv->fetch_array(MYSQLI_ASSOC);

//         if ($rowInv) {
//             $id_invoice = $rowInv['id_invoice'];

//             if ($rowInv['status_invoice'] == 'waiting') {

//                 $checkPayment = mysqli_query($conn, "SELECT * FROM tb_payment WHERE remark_payment = '$remark'");
//                 $rowPayment = $checkPayment->fetch_array(MYSQLI_ASSOC);

//                 if ($rowPayment) {
//                     $return = ["response" => 200, "status" => "failed", "message" => "Payment already saved", "detail" => mysqli_error($conn)];
//                     echo json_encode($return);
//                 } else {
//                     $setStatus = mysqli_query($conn, "UPDATE tb_invoice SET status_invoice = 'paid' WHERE total_invoice = '$amount'");

//                     if ($setStatus) {
//                         $savePayment = mysqli_query($conn, "INSERT INTO tb_payment(amount_payment,date_payment,remark_payment,id_invoice, source) VALUES($amount,'$transactionDate','$remark',$id_invoice, '8880762231')");

//                         if ($savePayment) {
//                             $return = ["response" => 200, "status" => "ok", "message" => "Invoice paid!"];
//                             echo json_encode($return);
//                         } else {
//                             $return = ["response" => 200, "status" => "failed", "message" => "Status set but payment is not saved yet", "detail" => mysqli_error($conn)];
//                             echo json_encode($return);
//                         }
//                     } else {
//                         $return = ["response" => 200, "status" => "failed", "message" => "Failed to set status payment", "detail" => mysqli_error($conn)];
//                         echo json_encode($return);
//                     }
//                 }
//             } else {
//                 $return = ["response" => 200, "status" => "failed", "message" => "Invoice already paid", "detail" => mysqli_error($conn)];
//                 echo json_encode($return);
//             }
//         } else {
//             $id_invoice = 0;

//             $checkPayment = mysqli_query($conn, "SELECT * FROM tb_payment WHERE remark_payment = '$remark'");
//             $rowPayment = $checkPayment->fetch_array(MYSQLI_ASSOC);

//             if ($rowPayment) {
//                 $return = ["response" => 200, "status" => "failed", "message" => "Payment already saved", "detail" => mysqli_error($conn)];
//                 echo json_encode($return);
//             } else {
//                 $savePayment = mysqli_query($conn, "INSERT INTO tb_payment(amount_payment,date_payment,remark_payment,id_invoice) VALUES($amount,'$transactionDate','$remark',$id_invoice)");

//                 if ($savePayment) {
//                     $return = ["response" => 200, "status" => "ok", "message" => "Payment saved but don't have an invoice data!"];
//                     echo json_encode($return);
//                 } else {
//                     $return = ["response" => 200, "status" => "failed", "message" => "Failed to save payment", "detail" => mysqli_error($conn)];
//                     echo json_encode($return);
//                 }
//             }
//         }
//     }
// }
