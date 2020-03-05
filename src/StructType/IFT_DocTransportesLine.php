<?php

namespace IFT_DocTransportes\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Line StructType
 * @package IFT_DocTransportes
 * @subpackage Structs
 */
class IFT_DocTransportesLine extends AbstractStructBase
{
    /**
     * The OrderReferences
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \IFT_DocTransportes\StructType\IFT_DocTransportesOrderReferences[]
     */
    public $OrderReferences;
    /**
     * The ProductDescription
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 200
     * - minLength: 1
     * @var string
     */
    public $ProductDescription;
    /**
     * The Quantity
     * Meta information extracted from the WSDL
     * - base: xsd:decimal
     * @var float
     */
    public $Quantity;
    /**
     * The UnitOfMeasure
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 20
     * - minLength: 1
     * @var string
     */
    public $UnitOfMeasure;
    /**
     * The UnitPrice
     * Meta information extracted from the WSDL
     * - base: xsd:decimal
     * @var float
     */
    public $UnitPrice;
    /**
     * Constructor method for Line
     * @uses IFT_DocTransportesLine::setOrderReferences()
     * @uses IFT_DocTransportesLine::setProductDescription()
     * @uses IFT_DocTransportesLine::setQuantity()
     * @uses IFT_DocTransportesLine::setUnitOfMeasure()
     * @uses IFT_DocTransportesLine::setUnitPrice()
     * @param \IFT_DocTransportes\StructType\IFT_DocTransportesOrderReferences[] $orderReferences
     * @param string $productDescription
     * @param float $quantity
     * @param string $unitOfMeasure
     * @param float $unitPrice
     */
    public function __construct(array $orderReferences = array(), $productDescription = null, $quantity = null, $unitOfMeasure = null, $unitPrice = null)
    {
        $this
            ->setOrderReferences($orderReferences)
            ->setProductDescription($productDescription)
            ->setQuantity($quantity)
            ->setUnitOfMeasure($unitOfMeasure)
            ->setUnitPrice($unitPrice);
    }
    /**
     * Get OrderReferences value
     * @return \IFT_DocTransportes\StructType\IFT_DocTransportesOrderReferences[]|null
     */
    public function getOrderReferences()
    {
        return $this->OrderReferences;
    }
    /**
     * This method is responsible for validating the values passed to the setOrderReferences method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrderReferences method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrderReferencesForArrayConstraintsFromSetOrderReferences(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $lineOrderReferencesItem) {
            // validation for constraint: itemType
            if (!$lineOrderReferencesItem instanceof \IFT_DocTransportes\StructType\IFT_DocTransportesOrderReferences) {
                $invalidValues[] = is_object($lineOrderReferencesItem) ? get_class($lineOrderReferencesItem) : sprintf('%s(%s)', gettype($lineOrderReferencesItem), var_export($lineOrderReferencesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The OrderReferences property can only contain items of type \IFT_DocTransportes\StructType\IFT_DocTransportesOrderReferences, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set OrderReferences value
     * @throws \InvalidArgumentException
     * @param \IFT_DocTransportes\StructType\IFT_DocTransportesOrderReferences[] $orderReferences
     * @return \IFT_DocTransportes\StructType\IFT_DocTransportesLine
     */
    public function setOrderReferences(array $orderReferences = array())
    {
        // validation for constraint: array
        if ('' !== ($orderReferencesArrayErrorMessage = self::validateOrderReferencesForArrayConstraintsFromSetOrderReferences($orderReferences))) {
            throw new \InvalidArgumentException($orderReferencesArrayErrorMessage, __LINE__);
        }
        $this->OrderReferences = $orderReferences;
        return $this;
    }
    /**
     * Add item to OrderReferences value
     * @throws \InvalidArgumentException
     * @param \IFT_DocTransportes\StructType\IFT_DocTransportesOrderReferences $item
     * @return \IFT_DocTransportes\StructType\IFT_DocTransportesLine
     */
    public function addToOrderReferences(\IFT_DocTransportes\StructType\IFT_DocTransportesOrderReferences $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \IFT_DocTransportes\StructType\IFT_DocTransportesOrderReferences) {
            throw new \InvalidArgumentException(sprintf('The OrderReferences property can only contain items of type \IFT_DocTransportes\StructType\IFT_DocTransportesOrderReferences, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->OrderReferences[] = $item;
        return $this;
    }
    /**
     * Get ProductDescription value
     * @return string|null
     */
    public function getProductDescription()
    {
        return $this->ProductDescription;
    }
    /**
     * Set ProductDescription value
     * @param string $productDescription
     * @return \IFT_DocTransportes\StructType\IFT_DocTransportesLine
     */
    public function setProductDescription($productDescription = null)
    {
        // validation for constraint: string
        if (!is_null($productDescription) && !is_string($productDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productDescription, true), gettype($productDescription)), __LINE__);
        }
        // validation for constraint: maxLength(200)
        if (!is_null($productDescription) && mb_strlen($productDescription) > 200) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 200', mb_strlen($productDescription)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($productDescription) && mb_strlen($productDescription) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($productDescription)), __LINE__);
        }
        $this->ProductDescription = $productDescription;
        return $this;
    }
    /**
     * Get Quantity value
     * @return float|null
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param float $quantity
     * @return \IFT_DocTransportes\StructType\IFT_DocTransportesLine
     */
    public function setQuantity($quantity = null)
    {
        // validation for constraint: float
        if (!is_null($quantity) && !(is_float($quantity) || is_numeric($quantity))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($quantity, true), gettype($quantity)), __LINE__);
        }
        $this->Quantity = $quantity;
        return $this;
    }
    /**
     * Get UnitOfMeasure value
     * @return string|null
     */
    public function getUnitOfMeasure()
    {
        return $this->UnitOfMeasure;
    }
    /**
     * Set UnitOfMeasure value
     * @param string $unitOfMeasure
     * @return \IFT_DocTransportes\StructType\IFT_DocTransportesLine
     */
    public function setUnitOfMeasure($unitOfMeasure = null)
    {
        // validation for constraint: string
        if (!is_null($unitOfMeasure) && !is_string($unitOfMeasure)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitOfMeasure, true), gettype($unitOfMeasure)), __LINE__);
        }
        // validation for constraint: maxLength(20)
        if (!is_null($unitOfMeasure) && mb_strlen($unitOfMeasure) > 20) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 20', mb_strlen($unitOfMeasure)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($unitOfMeasure) && mb_strlen($unitOfMeasure) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($unitOfMeasure)), __LINE__);
        }
        $this->UnitOfMeasure = $unitOfMeasure;
        return $this;
    }
    /**
     * Get UnitPrice value
     * @return float|null
     */
    public function getUnitPrice()
    {
        return $this->UnitPrice;
    }
    /**
     * Set UnitPrice value
     * @param float $unitPrice
     * @return \IFT_DocTransportes\StructType\IFT_DocTransportesLine
     */
    public function setUnitPrice($unitPrice = null)
    {
        // validation for constraint: float
        if (!is_null($unitPrice) && !(is_float($unitPrice) || is_numeric($unitPrice))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($unitPrice, true), gettype($unitPrice)), __LINE__);
        }
        $this->UnitPrice = $unitPrice;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \IFT_DocTransportes\StructType\IFT_DocTransportesLine
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
