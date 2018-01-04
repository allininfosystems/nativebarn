<?php
namespace TemplateMonster\Parallax\Controller\Adminhtml\Block\MassDelete;

/**
 * Interceptor class for @see \TemplateMonster\Parallax\Controller\Adminhtml\Block\MassDelete
 */
class Interceptor extends \TemplateMonster\Parallax\Controller\Adminhtml\Block\MassDelete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Ui\Component\MassAction\Filter $filter, \TemplateMonster\Parallax\Model\ResourceModel\Block\CollectionFactory $collectionFactory, \Magento\Backend\App\Action\Context $context)
    {
        $this->___init();
        parent::__construct($filter, $collectionFactory, $context);
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
