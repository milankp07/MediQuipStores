<?php
namespace Magento\Catalog\Ui\DataProvider\Product\Form\Modifier\Eav;

/**
 * Interceptor class for @see \Magento\Catalog\Ui\DataProvider\Product\Form\Modifier\Eav
 */
class Interceptor extends \Magento\Catalog\Ui\DataProvider\Product\Form\Modifier\Eav implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Model\Locator\LocatorInterface $locator, \Magento\Catalog\Ui\DataProvider\CatalogEavValidationRules $catalogEavValidationRules, \Magento\Eav\Model\Config $eavConfig, \Magento\Framework\App\RequestInterface $request, \Magento\Eav\Model\ResourceModel\Entity\Attribute\Group\CollectionFactory $groupCollectionFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Ui\DataProvider\Mapper\FormElement $formElementMapper, \Magento\Ui\DataProvider\Mapper\MetaProperties $metaPropertiesMapper, \Magento\Catalog\Api\ProductAttributeGroupRepositoryInterface $attributeGroupRepository, \Magento\Catalog\Api\ProductAttributeRepositoryInterface $attributeRepository, \Magento\Framework\Api\SearchCriteriaBuilder $searchCriteriaBuilder, \Magento\Framework\Api\SortOrderBuilder $sortOrderBuilder, \Magento\Catalog\Model\ResourceModel\Eav\AttributeFactory $eavAttributeFactory, \Magento\Framework\Filter\Translit $translitFilter, \Magento\Framework\Stdlib\ArrayManager $arrayManager, \Magento\Catalog\Model\Attribute\ScopeOverriddenValue $scopeOverriddenValue, \Magento\Framework\App\Request\DataPersistorInterface $dataPersistor, $attributesToDisable = [], $attributesToEliminate = [], ?\Magento\Catalog\Ui\DataProvider\Product\Form\Modifier\Eav\CompositeConfigProcessor $wysiwygConfigProcessor = null, ?\Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig = null, ?\Magento\Eav\Model\ResourceModel\Entity\Attribute\CollectionFactory $attributeCollectionFactory = null, ?\Magento\Framework\AuthorizationInterface $auth = null)
    {
        $this->___init();
        parent::__construct($locator, $catalogEavValidationRules, $eavConfig, $request, $groupCollectionFactory, $storeManager, $formElementMapper, $metaPropertiesMapper, $attributeGroupRepository, $attributeRepository, $searchCriteriaBuilder, $sortOrderBuilder, $eavAttributeFactory, $translitFilter, $arrayManager, $scopeOverriddenValue, $dataPersistor, $attributesToDisable, $attributesToEliminate, $wysiwygConfigProcessor, $scopeConfig, $attributeCollectionFactory, $auth);
    }

    /**
     * {@inheritdoc}
     */
    public function modifyMeta(array $meta)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'modifyMeta');
        return $pluginInfo ? $this->___callPlugins('modifyMeta', func_get_args(), $pluginInfo) : parent::modifyMeta($meta);
    }

    /**
     * {@inheritdoc}
     */
    public function addContainerChildren(array $attributeContainer, \Magento\Catalog\Api\Data\ProductAttributeInterface $attribute, $groupCode, $sortOrder)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addContainerChildren');
        return $pluginInfo ? $this->___callPlugins('addContainerChildren', func_get_args(), $pluginInfo) : parent::addContainerChildren($attributeContainer, $attribute, $groupCode, $sortOrder);
    }

    /**
     * {@inheritdoc}
     */
    public function getContainerChildren(\Magento\Catalog\Api\Data\ProductAttributeInterface $attribute, $groupCode, $sortOrder)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getContainerChildren');
        return $pluginInfo ? $this->___callPlugins('getContainerChildren', func_get_args(), $pluginInfo) : parent::getContainerChildren($attribute, $groupCode, $sortOrder);
    }

    /**
     * {@inheritdoc}
     */
    public function modifyData(array $data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'modifyData');
        return $pluginInfo ? $this->___callPlugins('modifyData', func_get_args(), $pluginInfo) : parent::modifyData($data);
    }

    /**
     * {@inheritdoc}
     */
    public function setupAttributeMeta(\Magento\Catalog\Api\Data\ProductAttributeInterface $attribute, $groupCode, $sortOrder)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setupAttributeMeta');
        return $pluginInfo ? $this->___callPlugins('setupAttributeMeta', func_get_args(), $pluginInfo) : parent::setupAttributeMeta($attribute, $groupCode, $sortOrder);
    }

    /**
     * {@inheritdoc}
     */
    public function setupAttributeContainerMeta(\Magento\Catalog\Api\Data\ProductAttributeInterface $attribute)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setupAttributeContainerMeta');
        return $pluginInfo ? $this->___callPlugins('setupAttributeContainerMeta', func_get_args(), $pluginInfo) : parent::setupAttributeContainerMeta($attribute);
    }

    /**
     * {@inheritdoc}
     */
    public function setupAttributeData(\Magento\Catalog\Api\Data\ProductAttributeInterface $attribute)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setupAttributeData');
        return $pluginInfo ? $this->___callPlugins('setupAttributeData', func_get_args(), $pluginInfo) : parent::setupAttributeData($attribute);
    }
}
