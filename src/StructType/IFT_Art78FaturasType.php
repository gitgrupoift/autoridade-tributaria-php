<?php

namespace IFT_Art78\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FaturasType StructType
 * @package IFT_Art78
 * @subpackage Structs
 */
class IFT_Art78FaturasType extends AbstractStructBase
{
    /**
     * The Fatura
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * - nillable: false
     * @var \IFT_Art78\StructType\IFT_Art78FaturaType[]
     */
    public $Fatura;
    /**
     * Constructor method for FaturasType
     * @uses IFT_Art78FaturasType::setFatura()
     * @param \IFT_Art78\StructType\IFT_Art78FaturaType[] $fatura
     */
    public function __construct(array $fatura = array())
    {
        $this
            ->setFatura($fatura);
    }
    /**
     * Get Fatura value
     * @return \IFT_Art78\StructType\IFT_Art78FaturaType[]
     */
    public function getFatura()
    {
        return $this->Fatura;
    }
    /**
     * This method is responsible for validating the values passed to the setFatura method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFatura method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFaturaForArrayConstraintsFromSetFatura(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $faturasTypeFaturaItem) {
            // validation for constraint: itemType
            if (!$faturasTypeFaturaItem instanceof \IFT_Art78\StructType\IFT_Art78FaturaType) {
                $invalidValues[] = is_object($faturasTypeFaturaItem) ? get_class($faturasTypeFaturaItem) : sprintf('%s(%s)', gettype($faturasTypeFaturaItem), var_export($faturasTypeFaturaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Fatura property can only contain items of type \IFT_Art78\StructType\IFT_Art78FaturaType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Fatura value
     * @throws \InvalidArgumentException
     * @param \IFT_Art78\StructType\IFT_Art78FaturaType[] $fatura
     * @return \IFT_Art78\StructType\IFT_Art78FaturasType
     */
    public function setFatura(array $fatura = array())
    {
        // validation for constraint: array
        if ('' !== ($faturaArrayErrorMessage = self::validateFaturaForArrayConstraintsFromSetFatura($fatura))) {
            throw new \InvalidArgumentException($faturaArrayErrorMessage, __LINE__);
        }
        $this->Fatura = $fatura;
        return $this;
    }
    /**
     * Add item to Fatura value
     * @throws \InvalidArgumentException
     * @param \IFT_Art78\StructType\IFT_Art78FaturaType $item
     * @return \IFT_Art78\StructType\IFT_Art78FaturasType
     */
    public function addToFatura(\IFT_Art78\StructType\IFT_Art78FaturaType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \IFT_Art78\StructType\IFT_Art78FaturaType) {
            throw new \InvalidArgumentException(sprintf('The Fatura property can only contain items of type \IFT_Art78\StructType\IFT_Art78FaturaType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Fatura[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \IFT_Art78\StructType\IFT_Art78FaturasType
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
