<?php

namespace IFT_Faturas\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderReferences StructType
 * @package IFT_Faturas
 * @subpackage Structs
 */
class IFT_FaturasOrderReferences extends AbstractStructBase
{
    /**
     * The OrderReference
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: tns:OrderReference
     * @var \IFT_Faturas\StructType\IFT_FaturasOrderReference[]
     */
    public $OrderReference;
    /**
     * Constructor method for OrderReferences
     * @uses IFT_FaturasOrderReferences::setOrderReference()
     * @param \IFT_Faturas\StructType\IFT_FaturasOrderReference[] $orderReference
     */
    public function __construct(array $orderReference = array())
    {
        $this
            ->setOrderReference($orderReference);
    }
    /**
     * Get OrderReference value
     * @return \IFT_Faturas\StructType\IFT_FaturasOrderReference[]|null
     */
    public function getOrderReference()
    {
        return $this->OrderReference;
    }
    /**
     * This method is responsible for validating the values passed to the setOrderReference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrderReference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrderReferenceForArrayConstraintsFromSetOrderReference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $orderReferencesOrderReferenceItem) {
            // validation for constraint: itemType
            if (!$orderReferencesOrderReferenceItem instanceof \IFT_Faturas\StructType\IFT_FaturasOrderReference) {
                $invalidValues[] = is_object($orderReferencesOrderReferenceItem) ? get_class($orderReferencesOrderReferenceItem) : sprintf('%s(%s)', gettype($orderReferencesOrderReferenceItem), var_export($orderReferencesOrderReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The OrderReference property can only contain items of type \IFT_Faturas\StructType\IFT_FaturasOrderReference, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set OrderReference value
     * @throws \InvalidArgumentException
     * @param \IFT_Faturas\StructType\IFT_FaturasOrderReference[] $orderReference
     * @return \IFT_Faturas\StructType\IFT_FaturasOrderReferences
     */
    public function setOrderReference(array $orderReference = array())
    {
        // validation for constraint: array
        if ('' !== ($orderReferenceArrayErrorMessage = self::validateOrderReferenceForArrayConstraintsFromSetOrderReference($orderReference))) {
            throw new \InvalidArgumentException($orderReferenceArrayErrorMessage, __LINE__);
        }
        $this->OrderReference = $orderReference;
        return $this;
    }
    /**
     * Add item to OrderReference value
     * @throws \InvalidArgumentException
     * @param \IFT_Faturas\StructType\IFT_FaturasOrderReference $item
     * @return \IFT_Faturas\StructType\IFT_FaturasOrderReferences
     */
    public function addToOrderReference(\IFT_Faturas\StructType\IFT_FaturasOrderReference $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \IFT_Faturas\StructType\IFT_FaturasOrderReference) {
            throw new \InvalidArgumentException(sprintf('The OrderReference property can only contain items of type \IFT_Faturas\StructType\IFT_FaturasOrderReference, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->OrderReference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \IFT_Faturas\StructType\IFT_FaturasOrderReferences
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
