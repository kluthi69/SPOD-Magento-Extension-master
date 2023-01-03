<?php
namespace Spod\Sync\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
use Magento\Framework\Model\ResourceModel\Db\Context;

/**
 * Magento 2 resource model for webhook queue entries.
 *
 * @package Spod\Sync\Model\ResourceModel
 */
class Webhook extends AbstractDb
{
    public function __construct(
        Context $context
    ) {
        parent::__construct($context);
    }

    protected function _construct()
    {
        $this->_init('spodsync_queue_webhook', 'id');
    }
}
