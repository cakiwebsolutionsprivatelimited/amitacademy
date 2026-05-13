<?php
date_default_timezone_set('Asia/Calcutta');
$datenow = date("d/m/Y h:m:s");
$transactionDate = str_replace(" ", "%20", $datenow);

$transactionId = rand(1000000,9999999).rand();

require_once 'TransactionRequest.php';

$transactionRequest = new TransactionRequest();

//Setting all values here
$transactionRequest->setMode("live");
//https://paynetzuat.atomtech.in/paynetz/epi/fts?login=110270&pass=Puhan@Amit@321&ttype=NBFundTransfer&prodid=ACADEMY&amt=10&txncurr=INR&txnscamt=10&ru=http://amitcollege.org.in/atompay/response.php&clientcode=MTIz&txnid=7343740194702886&date=22/06/2020%2010:06:48&udf1=Bibhu&udf2=bdash@gemini-us.com&udf3=8249689343&udf4=Bhubaneswar&custacc=639827&signature=374e7fd3970c2017b9de2d1e52810e0c916ef14330980d1f2cc9a85a93e14acc689767d565d2fcb6baaa7184c640f9d0be91019dd8444b53b86acb67702e8565
$transactionRequest->setLogin(110270);
$transactionRequest->setPassword("b4ecf8b2");
$transactionRequest->setProductId("ACADEMY");
$transactionRequest->setAmount($_POST['amount']);
$transactionRequest->setTransactionCurrency("INR");
$transactionRequest->setTransactionAmount($_POST['amount']);
$transactionRequest->setReturnUrl("http://amitcollege.org.in/atompay/response.php");
$transactionRequest->setClientCode(64764);
$transactionRequest->setTransactionId($transactionId);
$transactionRequest->setTransactionDate($transactionDate);
$transactionRequest->setCustomerName($_POST['name']);
$transactionRequest->setCustomerEmailId($_POST['email']);
$transactionRequest->setCustomerMobile($_POST['mobile']);
$transactionRequest->setCustomerBillingAddress("Bhubaneswar");
$transactionRequest->setCustomerAccount("639827");
$transactionRequest->setReqHashKey("80dcfc22486207a93f");


$url = $transactionRequest->getPGUrl();

header("Location: $url");