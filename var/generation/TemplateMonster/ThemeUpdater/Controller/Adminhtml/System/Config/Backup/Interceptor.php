<?php
namespace TemplateMonster\ThemeUpdater\Controller\Adminhtml\System\Config\Backup;

/**
 * Interceptor class for @see \TemplateMonster\ThemeUpdater\Controller\Adminhtml\System\Config\Backup
 */
class Interceptor extends \TemplateMonster\ThemeUpdater\Controller\Adminhtml\System\Config\Backup implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory, \TemplateMonster\ThemeUpdater\Model\BackupFactory $backupFactory, \TemplateMonster\ThemeUpdater\Model\ThemeDataFactory $themeDataFactory, \TemplateMonster\ThemeUpdater\Helper\Data $helperData)
    {
        $this->___init();
        parent::__construct($context, $resultJsonFactory, $backupFactory, $themeDataFactory, $helperData);
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
