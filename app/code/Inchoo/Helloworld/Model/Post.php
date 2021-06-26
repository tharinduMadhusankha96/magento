<?php
namespace Inchoo\Helloworld\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'neosolax_test';

    protected $_cacheTag = 'neosolax_test';

    protected $_eventPrefix = 'neosolax_test';

    protected function _construct()
    {
        $this->_init('Inchoo\Helloworld\Model\ResourceModel\Post');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getDefaultValues()
    {
        $values = [];

        return $values;
    }
}
