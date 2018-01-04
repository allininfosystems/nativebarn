<?php
namespace TemplateMonster\FilmSlider\Controller\Adminhtml\Slider\Save;

/**
 * Interceptor class for @see \TemplateMonster\FilmSlider\Controller\Adminhtml\Slider\Save
 */
class Interceptor extends \TemplateMonster\FilmSlider\Controller\Adminhtml\Slider\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \TemplateMonster\FilmSlider\Api\SliderRepositoryInterface $sliderRepository, \TemplateMonster\FilmSlider\Controller\Adminhtml\Slider\PostDataProcessor $dataProcessor)
    {
        $this->___init();
        parent::__construct($context, $sliderRepository, $dataProcessor);
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
