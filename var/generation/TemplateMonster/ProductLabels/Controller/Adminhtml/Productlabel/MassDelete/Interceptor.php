<?php
namespace TemplateMonster\ProductLabels\Controller\Adminhtml\Productlabel\MassDelete;

/**
 * Interceptor class for @see \TemplateMonster\ProductLabels\Controller\Adminhtml\Productlabel\MassDelete
 */
class Interceptor extends \TemplateMonster\ProductLabels\Controller\Adminhtml\Productlabel\MassDelete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Ui\Component\MassAction\Filter $filter, \TemplateMonster\ProductLabels\Model\ResourceModel\ProductLabel\CollectionFactory $collectionFactory)
    {
        $this->___init();
        parent::__construct($context, $filter, $collectionFactory);
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
