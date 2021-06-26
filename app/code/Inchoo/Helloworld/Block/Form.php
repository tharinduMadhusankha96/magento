<?php

namespace Inchoo\Helloworld\Block;

use Magento\Backend\Block\Template\Context;
use Magento\Framework\View\Element\Template;
use Inchoo\Helloworld\Model\Post;

class Form extends Template
{
    private $extensionFactory;

    public function __construct(Post $extensionFactory, Context $context, array $data = [])
    {
        parent::__construct($context, $data);
        $this->extensionFactory = $extensionFactory;
    }

    public function getFormAction()
    {
        return $this->getUrl('helloworld/index/submit', ['_secure' => true]);
    }

    public function getAllData()
    {
        $id = $this->getRequest()->getParam("id");
        $model = $this->extensionFactory->create();
        return $model->load($id);
    }
}
