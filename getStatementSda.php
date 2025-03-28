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
$url = "/openapi/v1.0/bank-statement";
$getToken = mysqli_query($conn, "SELECT * FROM tb_bca_token WHERE id_bca_token = 1");
$rowToken = $getToken->fetch_array(MYSQLI_ASSOC);
$oauth_token = $rowToken['bca_token'];
// For Body
$partnerReferenceNo = date("YmdHis") . rand(10000000, 99999999);
$fromDate = date('Y-m-d\T00:00:00P');
$toDate = date('Y-m-d\T00:00:00P');
$bodyStr = "{\"partnerReferenceNo\": \"$partnerReferenceNo\",\"accountNo\": \"8881051362\",\"fromDateTime\": \"$fromDate\",\"toDateTime\": \"$toDate\"}";
$body = json_decode($bodyStr, true);

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
    CURLOPT_URL => 'https://api.klikbca.com/openapi/v1.0/bank-statement',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => '{
 "partnerReferenceNo": "' . $partnerReferenceNo . '",
 "accountNo": "8881051362",
 "fromDateTime": "' . $fromDate . '",
 "toDateTime": "' . $toDate . '"
}',
    CURLOPT_HTTPHEADER => array(
        'CHANNEL-ID: 95051',
        'X-PARTNER-ID: KBBTOPMORT',
        'X-CLIENT-KEY: ' . $client_id,
        'Content-Type: application/json',
        'Authorization: Bearer ' . $oauth_token,
        'X-EXTERNAL-ID: ' . rand(10000000, 99999999),
        'X-TIMESTAMP: ' . $time_stamp,
        'X-SIGNATURE: ' . $signatureApi
    ),
));

$response = curl_exec($curl);

curl_close($curl);

$res = json_decode($response, true);
$detailData = $res['detailData'];
// echo json_encode($detailData);
// echo $response;

foreach ($detailData as $detailData) {
    if ($detailData['type'] == 'CREDIT') {
        $amount = (int)$detailData['amount']['value'];
        $transactionDate = date('Y-m-d H:i:s');
        $remark = $detailData['remark'] . " - Date: " . $detailData['transactionDate'];
        $arrResponse = ['amount' => $amount, 'date' => $transactionDate, 'remark' => $remark];

        $checkInv = mysqli_query($conn, "SELECT * FROM tb_invoice JOIN tb_surat_jalan ON tb_surat_jalan.id_surat_jalan = tb_invoice.id_surat_jalan JOIN tb_contact ON tb_contact.id_contact = tb_surat_jalan.id_contact JOIN tb_city ON tb_city.id_city = tb_contact.id_city WHERE total_invoice = '$amount' AND status_invoice = 'waiting' AND tb_city.id_distributor = 7");
        $rowInv = $checkInv->fetch_array(MYSQLI_ASSOC);

        if ($rowInv) {
            $id_invoice = $rowInv['id_invoice'];

            if ($rowInv['status_invoice'] == 'waiting') {

                $checkPayment = mysqli_query($conn, "SELECT * FROM tb_payment WHERE remark_payment = '$remark'");
                $rowPayment = $checkPayment->fetch_array(MYSQLI_ASSOC);

                if ($rowPayment) {
                    $return = ["response" => 200, "status" => "failed", "message" => "Payment already saved", "detail" => mysqli_error($conn)];
                    echo json_encode($return);
                } else {
                    $setStatus = mysqli_query($conn, "UPDATE tb_invoice SET status_invoice = 'paid' WHERE total_invoice = '$amount'");

                    $getInvoice = mysqli_query($conn, "SELECT * FROM tb_invoice JOIN tb_surat_jalan ON tb_surat_jalan.id_surat_jalan = tb_invoice.id_surat_jalan WHERE tb_invoice.total_invoice = '$amount'");
                    $invArray = $getInvoice->fetch_array();
                    $id_contact = $invArray['id_contact'];
                    $date = date("Y-m-d H:i:s");

                    if ($setStatus) {
                        $removeRenvis = mysqli_query($conn, "UPDATE tb_rencana_visit SET is_visited = 1, visit_date = '$date' WHERE id_contact = '$id_contact' AND type_rencana = 'jatem'");

                        $savePayment = mysqli_query($conn, "INSERT INTO tb_payment(amount_payment,date_payment,remark_payment,id_invoice, source) VALUES($amount,'$transactionDate','$remark',$id_invoice,'8881051362')");

                        if ($savePayment) {
                            // $getContact = mysqli_query($conn, "SELECT * FROM tb_contact JOIN tb_city ON tb_city.id_city = tb_contact.id_city WHERE id_contact = '$id_contact'");
                            // $rowContact = $getContact->fetch_array(MYSQLI_ASSOC);
                            $id_distributor = 7;

                            $getStatusAutoTf = mysqli_query($conn, "SELECT * FROM tb_switch_tf WHERE id_distributor = '$id_distributor'");
                            $rowStatusAutoTf = $getStatusAutoTf->fetch_array(MYSQLI_ASSOC);

                            $statusAutoTf = $rowStatusAutoTf['status_switch_tf'];

                            if ($statusAutoTf == 1) {
                                if ($amount != 30000) {
                                    if ($amount != 200000) {
                                        $getCompany = mysqli_query($conn, "SELECT * FROM tb_company WHERE id_distributor = '$id_distributor'");
                                        $rowCompany = $getCompany->fetch_array(MYSQLI_ASSOC);

                                        $to_name = $rowCompany['name_company'];
                                        $to_account = $rowCompany['norek_company'];

                                        // Send Money
                                        $to_name = str_replace(" ", "%20", $to_name);
                                        // TF intrabank
                                        $curl = curl_init();

                                        curl_setopt_array($curl, array(
                                            CURLOPT_URL => 'https://apibca.topmortarindonesia.com/snapIntrabankSda.php?to=' . $to_account . '&to_name=' . $to_name . '&amount=' . $amount,
                                            CURLOPT_RETURNTRANSFER => true,
                                            CURLOPT_ENCODING => '',
                                            CURLOPT_MAXREDIRS => 10,
                                            CURLOPT_TIMEOUT => 0,
                                            CURLOPT_FOLLOWLOCATION => true,
                                            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                            CURLOPT_CUSTOMREQUEST => 'GET',
                                        ));

                                        $response = curl_exec($curl);

                                        curl_close($curl);

                                        $resTf = json_decode($response, true);
                                    }
                                }
                            }

                            $return = ["response" => 200, "status" => "ok", "message" => "Invoice paid!"];
                            echo json_encode($return);
                        } else {
                            $return = ["response" => 200, "status" => "failed", "message" => "Status set but payment is not saved yet", "detail" => mysqli_error($conn)];
                            echo json_encode($return);
                        }
                    } else {
                        $return = ["response" => 200, "status" => "failed", "message" => "Failed to set status payment", "detail" => mysqli_error($conn)];
                        echo json_encode($return);
                    }
                }
            } else {
                $return = ["response" => 200, "status" => "failed", "message" => "Invoice already paid", "detail" => mysqli_error($conn)];
                echo json_encode($return);
            }
        } else {
            $id_invoice = 0;

            $checkPayment = mysqli_query($conn, "SELECT * FROM tb_payment WHERE remark_payment = '$remark'");
            $rowPayment = $checkPayment->fetch_array(MYSQLI_ASSOC);

            if ($rowPayment) {
                $return = ["response" => 200, "status" => "failed", "message" => "Payment already saved", "detail" => mysqli_error($conn)];
                echo json_encode($return);
            } else {
                $savePayment = mysqli_query($conn, "INSERT INTO tb_payment(amount_payment,date_payment,remark_payment,id_invoice,source) VALUES($amount,'$transactionDate','$remark',$id_invoice,'8881051362')");

                if ($savePayment) {
                    $id_distributor = 7;

                    $getStatusAutoTf = mysqli_query($conn, "SELECT * FROM tb_switch_tf WHERE id_distributor = '$id_distributor'");
                    $rowStatusAutoTf = $getStatusAutoTf->fetch_array(MYSQLI_ASSOC);

                    $statusAutoTf = $rowStatusAutoTf['status_switch_tf'];

                    if ($statusAutoTf == 1) {
                        if ($amount != 30000) {
                            if ($amount != 200000) {
                                $getCompany = mysqli_query($conn, "SELECT * FROM tb_company WHERE id_distributor = '$id_distributor'");
                                $rowCompany = $getCompany->fetch_array(MYSQLI_ASSOC);

                                $to_name = $rowCompany['name_company'];
                                $to_account = $rowCompany['norek_company'];

                                // Send Money
                                $to_name = "Sidoarjo3";
                                // TF intrabank
                                $curl = curl_init();

                                curl_setopt_array($curl, array(
                                    CURLOPT_URL => 'https://apibca.topmortarindonesia.com/snapIntrabankSda.php?to=' . $to_account . '&to_name=' . $to_name . '&amount=' . $amount,
                                    CURLOPT_RETURNTRANSFER => true,
                                    CURLOPT_ENCODING => '',
                                    CURLOPT_MAXREDIRS => 10,
                                    CURLOPT_TIMEOUT => 0,
                                    CURLOPT_FOLLOWLOCATION => true,
                                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                    CURLOPT_CUSTOMREQUEST => 'GET',
                                ));

                                $response = curl_exec($curl);

                                curl_close($curl);

                                $resTf = json_decode($response, true);

                                // echo $response;

                                if ($resTf['status'] == 'ok') {
                                    $return = ["response" => 200, "status" => "ok", "message" => "Payment saved but don't have an invoice data!", "detail" => $resTf];
                                    echo json_encode($return);
                                } else {
                                    $return = ["response" => 200, "status" => "ok", "message" => "Payment saved but amount not transferred", "detail" => $resTf, "error" => curl_error($curl)];
                                    echo json_encode($return);
                                }
                            } else {
                                $return = ["response" => 200, "status" => "ok", "message" => "Biaya admin!"];
                                echo json_encode($return);
                            }
                        } else {
                            $return = ["response" => 200, "status" => "ok", "message" => "Biaya admin!"];
                            echo json_encode($return);
                        }
                    } else {
                        $return = ["response" => 200, "status" => "ok", "message" => "Switch off"];
                        echo json_encode($return);
                    }
                } else {
                    $return = ["response" => 200, "status" => "failed", "message" => "Failed to save payment", "detail" => mysqli_error($conn)];
                    echo json_encode($return);
                }
            }
        }
    }
}

// echo $response;
