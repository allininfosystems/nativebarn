<?php
namespace TemplateMonster\Parallax\Controller\Adminhtml\BlockItem\MassDelete;

/**
 * Interceptor class for @see \TemplateMonster\Parallax\Controller\Adminhtml\BlockItem\MassDelete
 */
class Interceptor extends \TemplateMonster\Parallax\Controller\Adminhtml\BlockItem\MassDelete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\TemplateMonster\Parallax\Api\BlockItemRepositoryInterface $blockItemRepository, \TemplateMonster\Parallax\Model\ResourceModel\Block\Item\CollectionFactory $collectionFactory, \Magento\Backend\App\Action\Context $context)
    {
        $this->___init();
        parent::__construct($blockItemRepository, $collectionFactory, $context);
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
