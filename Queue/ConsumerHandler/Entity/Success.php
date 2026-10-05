<?php

declare(strict_types=1);

/**
 * File: Success.php
 *
 * @author Bartosz Kubicki
 */

namespace BKubicki\RabbitMqPlayground\Queue\ConsumerHandler\Entity;

use BKubicki\RabbitMqPlayground\Model\Data\Entity;
use RuntimeException;

/**
 * Class Success
 * @package BKubicki\RabbitMqPlayground\Queue\ConsumerHandler\Entity
 * @codeCoverageIgnore
 */
class Success
{
    /**
     * @param Entity $entity
     * @return void
     */
    public function execute(Entity $entity): void
    {
        sleep(10);
        echo $entity->getId(), "\n";
    }
}
