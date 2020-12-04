<?php
declare(strict_types=1);

namespace Rostyslav\ControllerDemo\Controller\Demo;

use Magento\Framework\Controller\Result\Forward as ForwardResult;

class Forward implements \Magento\Framework\App\Action\HttpGetActionInterface
{
    /**
     * @var \Magento\Framework\App\RequestInterface $request
     */
    private $request;

    /**
     * @var \Magento\Framework\Controller\Result\ForwardFactory $forwardResultFactory;
     */
    private $forwardResultFactory;

    /**
     * Controller constructor.
     * @param \Magento\Framework\App\RequestInterface $request
     * @param \Magento\Framework\Controller\Result\ForwardFactory $forwardResultFactory
     */

    public function __construct(
        \Magento\Framework\App\RequestInterface $request,
        \Magento\Framework\Controller\Result\ForwardFactory $forwardResultFactory
    ) {
        $this->request = $request;
        $this->forwardResultFactory = $forwardResultFactory;
    }

    /**
     * https://rostyslav-vyshemirskyi-dev.local/rostyslav-link/demo/forward
     *
     * @return ForwardResult
     */
    public function execute(): ForwardResult
    {
        return $this->forwardResultFactory->create()
            ->setParams([
                'firstname' =>'Rostyslav',
                'lastname' => 'Vyshemirskyi',
                'url' => 'https://github.com/Rooosss/dv-campus-2020-2021-magento'
            ])
            ->forward('Data');
    }
}
