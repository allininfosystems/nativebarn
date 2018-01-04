<?php
namespace TemplateMonster\Parallax\Controller\Adminhtml\Block\Grid;

/**
 * Interceptor class for @see \TemplateMonster\Parallax\Controller\Adminhtml\Block\Grid
 */
class Interceptor extends \TemplateMonster\Parallax\Controller\Adminhtml\Block\Grid implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\TemplateMonster\Parallax\Api\BlockRepositoryInterface $blockRepository, \Magento\Framework\Registry $coreRegistry, \Magento\Framework\View\LayoutFactory $layoutFactory, \Magento\Backend\App\Action\Context $context)
    {
        $this->___init();
        parent::__construct($blockRepository, $coreRegistry, $layoutFactory, $context);
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
