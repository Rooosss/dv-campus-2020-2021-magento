<?php
declare(strict_types=1);

namespace Rostyslav\ControllerDemo\Controller\Demo;

use Magento\Framework\View\Result\Page as DemoPage;

class Data implements \Magento\Framework\App\Action\HttpGetActionInterface
{
    /**
     * @var \Magento\Framework\View\Result\PageFactory $demoPageFactory
     */
    private $demoPageFactory;

    /**
     * Controller constructor.
     * @param \Magento\Framework\View\Result\PageFactory $demoPageFactory
     */
    public function __construct(
        \Magento\Framework\View\Result\PageFactory $demoPageFactory
    ) {
        $this->demoPageFactory = $demoPageFactory;
    }

    /**
     * Page file name: rostyslav_controller_demo_demo_data.xml
     *
     * @return DemoPage
     */
    public function execute(): DemoPage
    {
        return $this->demoPageFactory->create();
    }
}
