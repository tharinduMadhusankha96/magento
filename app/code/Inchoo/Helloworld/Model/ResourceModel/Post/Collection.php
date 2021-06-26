<?php
namespace Inchoo\Helloworld\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'id';
    protected $_eventPrefix = 'neosolax_test_collection';
    protected $_eventObject = 'post_collection';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Inchoo\Helloworld\Model\Post', 'Inchoo\Helloworld\Model\ResourceModel\Post');
    }

}

