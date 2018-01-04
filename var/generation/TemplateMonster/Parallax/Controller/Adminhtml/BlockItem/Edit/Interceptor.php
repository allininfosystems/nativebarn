<?php
namespace TemplateMonster\Parallax\Controller\Adminhtml\BlockItem\Edit;

/**
 * Interceptor class for @see \TemplateMonster\Parallax\Controller\Adminhtml\BlockItem\Edit
 */
class Interceptor extends \TemplateMonster\Parallax\Controller\Adminhtml\BlockItem\Edit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\TemplateMonster\Parallax\Api\BlockItemRepositoryInterface $blockRepository, \Magento\Framework\Registry $registry, \Magento\Backend\App\Action\Context $context)
    {
        $this->___init();
        parent::__construct($blockRepository, $registry, $context);
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
