<?php

declare(strict_types=1);

/**
 * File: RetryConsumerHandler.php
 *
 * @author Bartosz Kubicki
 */

namespace BKubicki\RabbitMqPlayground\Queue\Consumer;

use BKubicki\MessageQueue\Api\Queue\Consumer\EnvelopeCallbackFactoryInterface;
use BKubicki\MessageQueue\Queue\Consumer\ConsumerWithInjectableEnvelopeCallback;
use Magento\Framework\MessageQueue\CallbackInvokerInterface;
use Magento\Framework\MessageQueue\ConsumerConfigurationInterface as UsedConsumerConfig;

/**
 * Class RetryConsumerHandler
 * @package BKubicki\RabbitMqPlayground\Queue\Consumer
 * @codeCoverageIgnore
 */
class RetryConsumerHandler extends ConsumerWithInjectableEnvelopeCallback
{
    /**
     * RetryConsumerHandler constructor.
     * @param EnvelopeCallbackFactoryInterface $envelopeCallbackFactory
     * @param CallbackInvokerInterface $invoker
     * @param UsedConsumerConfig $configuration
     * @param string $envelopeCallbackType
     */
    public function __construct(
        EnvelopeCallbackFactoryInterface $envelopeCallbackFactory,
        CallbackInvokerInterface $invoker,
        UsedConsumerConfig $configuration,
        string $envelopeCallbackType
    ) {
        parent::__construct($envelopeCallbackFactory, $invoker, $configuration, $envelopeCallbackType);
    }
}
