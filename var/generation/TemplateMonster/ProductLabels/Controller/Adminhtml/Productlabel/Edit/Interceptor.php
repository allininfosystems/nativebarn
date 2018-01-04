<?php
namespace TemplateMonster\ProductLabels\Controller\Adminhtml\Productlabel\Edit;

/**
 * Interceptor class for @see \TemplateMonster\ProductLabels\Controller\Adminhtml\Productlabel\Edit
 */
class Interceptor extends \TemplateMonster\ProductLabels\Controller\Adminhtml\Productlabel\Edit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \TemplateMonster\ProductLabels\Api\ProductLabelRepositoryInterface $productLabelRepository, \Magento\Framework\Registry $registry)
    {
        $this->___init();
        parent::__construct($context, $resultPageFactory, $productLabelRepository, $registry);
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
