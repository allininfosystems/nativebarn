<?php
namespace TemplateMonster\Parallax\Controller\Adminhtml\BlockItem\MassDisable;

/**
 * Interceptor class for @see \TemplateMonster\Parallax\Controller\Adminhtml\BlockItem\MassDisable
 */
class Interceptor extends \TemplateMonster\Parallax\Controller\Adminhtml\BlockItem\MassDisable implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\TemplateMonster\Parallax\Api\BlockItemRepositoryInterface $blockRepository, \TemplateMonster\Parallax\Model\ResourceModel\Block\Item\CollectionFactory $collectionFactory, \Magento\Backend\App\Action\Context $context)
    {
        $this->___init();
        parent::__construct($blockRepository, $collectionFactory, $context);
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
