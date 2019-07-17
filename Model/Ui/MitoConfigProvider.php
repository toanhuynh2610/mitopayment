<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magenest\MitoPayment\Model\Ui;
use Magento\Checkout\Model\ConfigProviderInterface;
use Magento\Payment\Gateway\ConfigInterface;

/**
 * Class MitoConfigProvider
 */
class MitoConfigProvider implements ConfigProviderInterface
{
    const CODE = 'mitopay';
    protected $config;
    public function __construct(
        ConfigInterFace $config
    ) {
        $this->config       = $config;
    }
    /**
     * Retrieve assoc array of checkout configuration
     *
     * @return array
     */
    public function getConfig()
    {
        return [
            'payment' => [
                self::CODE => [
                    'isActive'    => $this->config->getValue('active'),
                ]
            ]
        ];
    }
}