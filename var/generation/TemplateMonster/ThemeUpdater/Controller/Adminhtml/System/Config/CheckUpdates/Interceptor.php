<?php
namespace TemplateMonster\ThemeUpdater\Controller\Adminhtml\System\Config\CheckUpdates;

/**
 * Interceptor class for @see \TemplateMonster\ThemeUpdater\Controller\Adminhtml\System\Config\CheckUpdates
 */
class Interceptor extends \TemplateMonster\ThemeUpdater\Controller\Adminhtml\System\Config\CheckUpdates implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory, \TemplateMonster\ThemeUpdater\Model\UpdateDataFactory $updateDataFactory, \TemplateMonster\ThemeUpdater\Helper\Data $helperData)
    {
        $this->___init();
        parent::__construct($context, $resultJsonFactory, $updateDataFactory, $helperData);
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
