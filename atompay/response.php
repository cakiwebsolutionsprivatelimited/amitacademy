<?php

require_once 'TransactionResponse.php';
$transactionResponse = new TransactionResponse();
$transactionResponse->setRespHashKey("eccce2104b9614e0df");

if($transactionResponse->validateResponse($_POST)){
    echo "Transaction Processed <br/>";
    echo '<pre>';
    print_r($_POST);
} else {
    echo "Invalid Signature";
}


//print_r($_POST);
