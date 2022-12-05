<?php
namespace Magento\Catalog\Controller\Adminhtml\Product\Action\Attribute\Save;

/**
 * Interceptor class for @see \Magento\Catalog\Controller\Adminhtml\Product\Action\Attribute\Save
 */
class Interceptor extends \Magento\Catalog\Controller\Adminhtml\Product\Action\Attribute\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Catalog\Helper\Product\Edit\Action\Attribute $attributeHelper, \Magento\Framework\Bulk\BulkManagementInterface $bulkManagement, \Magento\AsynchronousOperations\Api\Data\OperationInterfaceFactory $operartionFactory, \Magento\Framework\DataObject\IdentityGeneratorInterface $identityService, \Magento\Framework\Serialize\SerializerInterface $serializer, \Magento\Authorization\Model\UserContextInterface $userContext, int $bulkSize = 100, ?\Magento\Framework\Stdlib\DateTime\TimezoneInterface $timezone = null, ?\Magento\Eav\Model\Config $eavConfig = null, ?\Magento\Catalog\Model\ProductFactory $productFactory = null, ?\Magento\Catalog\Model\Product\Filter\DateTime $dateTimeFilter = null)
    {
        $this->___init();
        parent::__construct($context, $attributeHelper, $bulkManagement, $operartionFactory, $identityService, $serializer, $userContext, $bulkSize, $timezone, $eavConfig, $productFactory, $dateTimeFilter);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }

    /**
     * {@inheritdoc}
     */
    public function _processUrlKeys()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, '_processUrlKeys');
        return $pluginInfo ? $this->___callPlugins('_processUrlKeys', func_get_args(), $pluginInfo) : parent::_processUrlKeys();
    }

    /**
     * {@inheritdoc}
     */
    public function getUrl($route = '', $params = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUrl');
        return $pluginInfo ? $this->___callPlugins('getUrl', func_get_args(), $pluginInfo) : parent::getUrl($route, $params);
    }

    /**
     * {@inheritdoc}
     */
    public function getActionFlag()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getActionFlag');
        return $pluginInfo ? $this->___callPlugins('getActionFlag', func_get_args(), $pluginInfo) : parent::getActionFlag();
    }

    /**
     * {@inheritdoc}
     */
    public function getRequest()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRequest');
        return $pluginInfo ? $this->___callPlugins('getRequest', func_get_args(), $pluginInfo) : parent::getRequest();
    }

    /**
     * {@inheritdoc}
     */
    public function getResponse()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getResponse');
        return $pluginInfo ? $this->___callPlugins('getResponse', func_get_args(), $pluginInfo) : parent::getResponse();
    }
}
