<?php

namespace IFT_Faturas\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InternationalCustomerTaxID StructType
 * @package IFT_Faturas
 * @subpackage Structs
 */
class IFT_FaturasInternationalCustomerTaxID extends AbstractStructBase
{
    /**
     * The TaxIDNumber
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 20
     * - minLength: 1
     * @var string
     */
    public $TaxIDNumber;
    /**
     * The TaxIDCountry
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 2
     * @var string
     */
    public $TaxIDCountry;
    /**
     * Constructor method for InternationalCustomerTaxID
     * @uses IFT_FaturasInternationalCustomerTaxID::setTaxIDNumber()
     * @uses IFT_FaturasInternationalCustomerTaxID::setTaxIDCountry()
     * @param string $taxIDNumber
     * @param string $taxIDCountry
     */
    public function __construct($taxIDNumber = null, $taxIDCountry = null)
    {
        $this
            ->setTaxIDNumber($taxIDNumber)
            ->setTaxIDCountry($taxIDCountry);
    }
    /**
     * Get TaxIDNumber value
     * @return string|null
     */
    public function getTaxIDNumber()
    {
        return $this->TaxIDNumber;
    }
    /**
     * Set TaxIDNumber value
     * @param string $taxIDNumber
     * @return \IFT_Faturas\StructType\IFT_FaturasInternationalCustomerTaxID
     */
    public function setTaxIDNumber($taxIDNumber = null)
    {
        // validation for constraint: string
        if (!is_null($taxIDNumber) && !is_string($taxIDNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($taxIDNumber, true), gettype($taxIDNumber)), __LINE__);
        }
        // validation for constraint: maxLength(20)
        if (!is_null($taxIDNumber) && mb_strlen($taxIDNumber) > 20) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 20', mb_strlen($taxIDNumber)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($taxIDNumber) && mb_strlen($taxIDNumber) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($taxIDNumber)), __LINE__);
        }
        $this->TaxIDNumber = $taxIDNumber;
        return $this;
    }
    /**
     * Get TaxIDCountry value
     * @return string|null
     */
    public function getTaxIDCountry()
    {
        return $this->TaxIDCountry;
    }
    /**
     * Set TaxIDCountry value
     * @param string $taxIDCountry
     * @return \IFT_Faturas\StructType\IFT_FaturasInternationalCustomerTaxID
     */
    public function setTaxIDCountry($taxIDCountry = null)
    {
        // validation for constraint: string
        if (!is_null($taxIDCountry) && !is_string($taxIDCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($taxIDCountry, true), gettype($taxIDCountry)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($taxIDCountry) && mb_strlen($taxIDCountry) !== 2) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen($taxIDCountry)), __LINE__);
        }
        $this->TaxIDCountry = $taxIDCountry;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \IFT_Faturas\StructType\IFT_FaturasInternationalCustomerTaxID
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
