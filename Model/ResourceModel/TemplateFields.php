<?php

namespace OuterEdge\Layout\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class TemplateFields extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('layout_template_fields', 'entity_id');
    }
}
