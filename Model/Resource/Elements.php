<?php

namespace OuterEdge\Layout\Model\Resource;

use Magento\Framework\Model\Resource\Db\AbstractDb;

class Elements extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('layout_elements', 'id_element');
    }
}
