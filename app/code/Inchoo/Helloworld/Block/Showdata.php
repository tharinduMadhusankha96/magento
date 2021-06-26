<?php

namespace Inchoo\Helloworld\Block;

use Magento\Framework\Data\Form\Element\CollectionFactory;
use Magento\Framework\View\Element\Template;
use Magento\Backend\Block\Template\Context;


class Showdata extends Template
{

    public $collection;

    public function __construct(Context $context, CollectionFactory $collectionFactory, array $data = [])
    {
        $this->collection = $collectionFactory;
        parent::__construct($context, $data);
    }

    public function getCollection()
    {
        return $this->collection->create();
    }
    public function getDeleteAction()
    {
        return $this->getUrl('helloworld/index/delete', ['_secure' => true]);
    }
    public function getEditAction()
    {
        return $this->getUrl('helloworld/index/index', ['_secure' => true]);
    }

}
