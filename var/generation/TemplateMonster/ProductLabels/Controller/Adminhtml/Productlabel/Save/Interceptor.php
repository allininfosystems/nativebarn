<?php
namespace TemplateMonster\ProductLabels\Controller\Adminhtml\Productlabel\Save;

/**
 * Interceptor class for @see \TemplateMonster\ProductLabels\Controller\Adminhtml\Productlabel\Save
 */
class Interceptor extends \TemplateMonster\ProductLabels\Controller\Adminhtml\Productlabel\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \TemplateMonster\ProductLabels\Api\ProductLabelRepositoryInterfaceFactory $productLabelRepository, \Magento\Framework\Image\AdapterFactory $adapterFactory, \Magento\MediaStorage\Model\File\UploaderFactory $uploader, \Magento\Framework\Filesystem $filesystem, \Magento\Framework\Filesystem\Driver\File $file)
    {
        $this->___init();
        parent::__construct($context, $productLabelRepository, $adapterFactory, $uploader, $filesystem, $file);
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
