<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\MysqlMq\Model;

/**
 * Test message processor is used by \Magento\MysqlMq\Model\PublisherTest
 */
class Processor
{
    /**
     * @param \Magento\MysqlMq\Model\DataObject $message
     */
    public function processMessage($message)
    {
        echo "Processed {$message->getEntityId()}\n";
    }
}
