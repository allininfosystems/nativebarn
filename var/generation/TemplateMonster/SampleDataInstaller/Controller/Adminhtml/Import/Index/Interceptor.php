<?php
namespace TemplateMonster\SampleDataInstaller\Controller\Adminhtml\Import\Index;

/**
 * Interceptor class for @see \TemplateMonster\SampleDataInstaller\Controller\Adminhtml\Import\Index
 */
class Interceptor extends \TemplateMonster\SampleDataInstaller\Controller\Adminhtml\Import\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\TemplateMonster\SampleDataInstaller\Model\Import\ImportFactory $importFactory, \Magento\Backend\App\Action\Context $context)
    {
        $this->___init();
        parent::__construct($importFactory, $context);
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
