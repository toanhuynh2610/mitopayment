<?php

namespace Magenest\MitoPayment\Gateway\Http\Client;

/**
 * Class Order
 * @package Magenest\MitoPayment\Gateway\Http\Client
 */
class Order implements \Magento\Payment\Gateway\Http\ClientInterface
{
    public function placeRequest(\Magento\Payment\Gateway\Http\TransferInterface $transferObject){
        return [
            'error' => true,
            'message' => "My message"
        ];
    }

}
