<?php
namespace TemplateMonster\ProductLabels\Controller\Adminhtml\Productlabel\InlineEdit;

/**
 * Interceptor class for @see \TemplateMonster\ProductLabels\Controller\Adminhtml\Productlabel\InlineEdit
 */
class Interceptor extends \TemplateMonster\ProductLabels\Controller\Adminhtml\Productlabel\InlineEdit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \TemplateMonster\ProductLabels\Api\ProductLabelRepositoryInterface $productLabelRepository, \Magento\Framework\Controller\Result\JsonFactory $jsonFactory)
    {
        $this->___init();
        parent::__construct($context, $productLabelRepository, $jsonFactory);
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
