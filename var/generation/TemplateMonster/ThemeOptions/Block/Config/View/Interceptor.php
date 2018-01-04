<?php
namespace TemplateMonster\ThemeOptions\Block\Config\View;

/**
 * Interceptor class for @see \TemplateMonster\ThemeOptions\Block\Config\View
 */
class Interceptor extends \TemplateMonster\ThemeOptions\Block\Config\View implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\TemplateMonster\ThemeOptions\Helper\Data $helper, \Magento\Framework\Config\FileResolverInterface $fileResolver, \Magento\Framework\Config\ConverterInterface $converter, \Magento\Framework\Config\SchemaLocatorInterface $schemaLocator, \Magento\Framework\Config\ValidationStateInterface $validationState, $fileName, $idAttributes = array(), $domDocumentClass = 'Magento\\Framework\\Config\\Dom', $defaultScope = 'global', $xpath = array())
    {
        $this->___init();
        parent::__construct($helper, $fileResolver, $converter, $schemaLocator, $validationState, $fileName, $idAttributes, $domDocumentClass, $defaultScope, $xpath);
    }

    /**
     * {@inheritdoc}
     */
    public function read($scope = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'read');
        if (!$pluginInfo) {
            return parent::read($scope);
        } else {
            return $this->___callPlugins('read', func_get_args(), $pluginInfo);
        }
    }
}
