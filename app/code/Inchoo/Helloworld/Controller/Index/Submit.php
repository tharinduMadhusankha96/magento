<?php

namespace Inchoo\Helloworld\Controller\Index;

use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Inchoo\Helloworld\Model\Post;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\Action\Action;
use Magento\Framework\UrlInterface;
class Submit extends Action
{
    protected $resultPageFactory;
    protected $extensionFactory;
    private $url;

    public function __construct(
        UrlInterface $url,
        Context $context,
        PageFactory $resultPageFactory,
        Post $extensionFactory

    )
    {
        $this->resultPageFactory = $resultPageFactory;
        $this->extensionFactory = $extensionFactory;
        $this->url = $url;
        parent::__construct($context);
    }

    public function execute()
    {
        try {
            $data = (array)$this->getRequest()->getPost();
            if (!empty($data)) {
                $model = $this -> _objectManager ->create('Inchoo\Helloworld\Model\Post');
                $model -> setData($data);
                $model -> save();



                $this->messageManager->addSuccessMessage(__("Data Saved Successfully."));
            }
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage($e, __("We can\'t submit your request, Please try again."));
        }
        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        $resultRedirect->setUrl($this->url->getUrl('helloworld/index/showdata'));
        return $resultRedirect;

    }
}
