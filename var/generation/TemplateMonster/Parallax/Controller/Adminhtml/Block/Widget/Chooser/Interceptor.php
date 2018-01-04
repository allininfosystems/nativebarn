<?php
namespace TemplateMonster\Parallax\Controller\Adminhtml\Block\Widget\Chooser;

/**
 * Interceptor class for @see \TemplateMonster\Parallax\Controller\Adminhtml\Block\Widget\Chooser
 */
class Interceptor extends \TemplateMonster\Parallax\Controller\Adminhtml\Block\Widget\Chooser implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\LayoutFactory $layoutFactory, \Magento\Backend\App\Action\Context $context)
    {
        $this->___init();
        parent::__construct($layoutFactory, $context);
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        if (!$pluginInfo) {
            return parent::dispatch($request);
        } else {
            return $this->___callPlugins('dispatch', func_get_args(), $pluginInfo);
        }
    }
}
