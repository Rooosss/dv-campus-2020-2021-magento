<?php
declare(strict_types=1);

namespace Rostyslav\ControllerDemo\Block;

class Demo extends \Magento\Framework\View\Element\Template
{
    /**
     * @return string
     */
    public function getFirst(): string
    {
        return (string) $this->getRequest()->getParam('firstname');
    }

    public function getLast(): string
    {
        return (string) $this->getRequest()->getParam('lastname');
    }

    public function getLink(): string
    {
        return (string) $this->getRequest()->getParam('url');
    }
}
