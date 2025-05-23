<?php

namespace Casdorio\GatewayPayment\Gateways\AuthorizeNet\RequestBuilders;

use Casdorio\GatewayPayment\Entities\Payment;

use net\authorize\api\contract\v1 as AnetAPI;

class GetTransactionDetailsRequestBuilder implements RequestBuilderInterface
{
    public function build(?Payment $payment, ...$params): AnetAPI\TransactionRequestType
    {
        $transactionRequestType = new AnetAPI\TransactionRequestType();
        $transactionRequestType->setTransactionType("getTransactionDetails");
        $transactionRequestType->setRefTransId($params[0]); // O primeiro parâmetro é o transactionId
        return $transactionRequestType;
    }
}