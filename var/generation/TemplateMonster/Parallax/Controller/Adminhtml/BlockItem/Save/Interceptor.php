<?php
namespace TemplateMonster\Parallax\Controller\Adminhtml\BlockItem\Save;

/**
 * Interceptor class for @see \TemplateMonster\Parallax\Controller\Adminhtml\BlockItem\Save
 */
class Interceptor extends \TemplateMonster\Parallax\Controller\Adminhtml\BlockItem\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\TemplateMonster\Parallax\Helper\Data $parallaxHelper, \TemplateMonster\Parallax\Api\BlockItemRepositoryInterface $blockItemRepository, \Magento\MediaStorage\Model\File\UploaderFactory $uploaderFactory, \Magento\Framework\Filesystem $filesystem, \Magento\Backend\App\Action\Context $context)
    {
        $this->___init();
        parent::__construct($parallaxHelper, $blockItemRepository, $uploaderFactory, $filesystem, $context);
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
