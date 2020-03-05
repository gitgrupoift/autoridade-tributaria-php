<?php

namespace IFT_Faturas\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Tax StructType
 * @package IFT_Faturas
 * @subpackage Structs
 */
class IFT_FaturasTax extends AbstractStructBase
{
    /**
     * The TaxType
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 3
     * - minLength: 3
     * - pattern: IVA
     * - ref: tns:TaxType
     * @var string
     */
    public $TaxType;
    /**
     * The TaxCountryRegion
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 5
     * - minLength: 2
     * - pattern: PT|PT-AC|PT-MA
     * - ref: tns:TaxCountryRegion
     * @var string
     */
    public $TaxCountryRegion;
    /**
     * The TaxPercentage
     * Meta information extracted from the WSDL
     * - base: xsd:decimal
     * - ref: tns:TaxPercentage
     * @var float
     */
    public $TaxPercentage;
    /**
     * Constructor method for Tax
     * @uses IFT_FaturasTax::setTaxType()
     * @uses IFT_FaturasTax::setTaxCountryRegion()
     * @uses IFT_FaturasTax::setTaxPercentage()
     * @param string $taxType
     * @param string $taxCountryRegion
     * @param float $taxPercentage
     */
    public function __construct($taxType = null, $taxCountryRegion = null, $taxPercentage = null)
    {
        $this
            ->setTaxType($taxType)
            ->setTaxCountryRegion($taxCountryRegion)
            ->setTaxPercentage($taxPercentage);
    }
    /**
     * Get TaxType value
     * @return string|null
     */
    public function getTaxType()
    {
        return $this->TaxType;
    }
    /**
     * Set TaxType value
     * @param string $taxType
     * @return \IFT_Faturas\StructType\IFT_FaturasTax
     */
    public function setTaxType($taxType = null)
    {
        // validation for constraint: string
        if (!is_null($taxType) && !is_string($taxType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($taxType, true), gettype($taxType)), __LINE__);
        }
        // validation for constraint: maxLength(3)
        if (!is_null($taxType) && mb_strlen($taxType) > 3) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 3', mb_strlen($taxType)), __LINE__);
        }
        // validation for constraint: minLength(3)
        if (!is_null($taxType) && mb_strlen($taxType) < 3) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 3', mb_strlen($taxType)), __LINE__);
        }
        // validation for constraint: pattern(IVA)
        if (!is_null($taxType) && !preg_match('/IVA/', $taxType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression IVA', var_export($taxType, true)), __LINE__);
        }
        $this->TaxType = $taxType;
        return $this;
    }
    /**
     * Get TaxCountryRegion value
     * @return string|null
     */
    public function getTaxCountryRegion()
    {
        return $this->TaxCountryRegion;
    }
    /**
     * Set TaxCountryRegion value
     * @param string $taxCountryRegion
     * @return \IFT_Faturas\StructType\IFT_FaturasTax
     */
    public function setTaxCountryRegion($taxCountryRegion = null)
    {
        // validation for constraint: string
        if (!is_null($taxCountryRegion) && !is_string($taxCountryRegion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($taxCountryRegion, true), gettype($taxCountryRegion)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($taxCountryRegion) && mb_strlen($taxCountryRegion) > 5) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen($taxCountryRegion)), __LINE__);
        }
        // validation for constraint: minLength(2)
        if (!is_null($taxCountryRegion) && mb_strlen($taxCountryRegion) < 2) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 2', mb_strlen($taxCountryRegion)), __LINE__);
        }
        // validation for constraint: pattern(PT|PT-AC|PT-MA)
        if (!is_null($taxCountryRegion) && !preg_match('/PT|PT-AC|PT-MA/', $taxCountryRegion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression PT|PT-AC|PT-MA', var_export($taxCountryRegion, true)), __LINE__);
        }
        $this->TaxCountryRegion = $taxCountryRegion;
        return $this;
    }
    /**
     * Get TaxPercentage value
     * @return float|null
     */
    public function getTaxPercentage()
    {
        return $this->TaxPercentage;
    }
    /**
     * Set TaxPercentage value
     * @param float $taxPercentage
     * @return \IFT_Faturas\StructType\IFT_FaturasTax
     */
    public function setTaxPercentage($taxPercentage = null)
    {
        // validation for constraint: float
        if (!is_null($taxPercentage) && !(is_float($taxPercentage) || is_numeric($taxPercentage))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($taxPercentage, true), gettype($taxPercentage)), __LINE__);
        }
        $this->TaxPercentage = $taxPercentage;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \IFT_Faturas\StructType\IFT_FaturasTax
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
