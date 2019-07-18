<?php

namespace Magenest\MitoPayment\Helper\Logger;

use Magento\Framework\Logger\Handler\Base;

/**
 * Class Handler
 *
 * @package DrinkiesLocal\MomoPay\Helper\Logger
 */
class Handler extends Base
{
    /**
     * @var string
     */
    protected $fileName = '/var/log/mitopayment/debug.log';

    /**
     * @var int
     */
    protected $loggerType = \Monolog\Logger::DEBUG;
}
