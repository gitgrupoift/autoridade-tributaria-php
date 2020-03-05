<?php

namespace IFT_Faturas\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocumentTotals StructType
 * @package IFT_Faturas
 * @subpackage Structs
 */
class IFT_FaturasDocumentTotals extends AbstractStructBase
{
    /**
     * The TaxPayable
     * Meta information extracted from the WSDL
     * - base: xsd:decimal
     * - ref: tns:TaxPayable
     * @var float
     */
    public $TaxPayable;
    /**
     * The NetTotal
     * Meta information extracted from the WSDL
     * - base: xsd:decimal
     * - ref: tns:NetTotal
     * @var float
     */
    public $NetTotal;
    /**
     * The GrossTotal
     * Meta information extracted from the WSDL
     * - base: xsd:decimal
     * - ref: tns:GrossTotal
     * @var float
     */
    public $GrossTotal;
    /**
     * Constructor method for DocumentTotals
     * @uses IFT_FaturasDocumentTotals::setTaxPayable()
     * @uses IFT_FaturasDocumentTotals::setNetTotal()
     * @uses IFT_FaturasDocumentTotals::setGrossTotal()
     * @param float $taxPayable
     * @param float $netTotal
     * @param float $grossTotal
     */
    public function __construct($taxPayable = null, $netTotal = null, $grossTotal = null)
    {
        $this
            ->setTaxPayable($taxPayable)
            ->setNetTotal($netTotal)
            ->setGrossTotal($grossTotal);
    }
    /**
     * Get TaxPayable value
     * @return float|null
     */
    public function getTaxPayable()
    {
        return $this->TaxPayable;
    }
    /**
     * Set TaxPayable value
     * @param float $taxPayable
     * @return \IFT_Faturas\StructType\IFT_FaturasDocumentTotals
     */
    public function setTaxPayable($taxPayable = null)
    {
        // validation for constraint: float
        if (!is_null($taxPayable) && !(is_float($taxPayable) || is_numeric($taxPayable))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($taxPayable, true), gettype($taxPayable)), __LINE__);
        }
        $this->TaxPayable = $taxPayable;
        return $this;
    }
    /**
     * Get NetTotal value
     * @return float|null
     */
    public function getNetTotal()
    {
        return $this->NetTotal;
    }
    /**
     * Set NetTotal value
     * @param float $netTotal
     * @return \IFT_Faturas\StructType\IFT_FaturasDocumentTotals
     */
    public function setNetTotal($netTotal = null)
    {
        // validation for constraint: float
        if (!is_null($netTotal) && !(is_float($netTotal) || is_numeric($netTotal))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($netTotal, true), gettype($netTotal)), __LINE__);
        }
        $this->NetTotal = $netTotal;
        return $this;
    }
    /**
     * Get GrossTotal value
     * @return float|null
     */
    public function getGrossTotal()
    {
        return $this->GrossTotal;
    }
    /**
     * Set GrossTotal value
     * @param float $grossTotal
     * @return \IFT_Faturas\StructType\IFT_FaturasDocumentTotals
     */
    public function setGrossTotal($grossTotal = null)
    {
        // validation for constraint: float
        if (!is_null($grossTotal) && !(is_float($grossTotal) || is_numeric($grossTotal))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($grossTotal, true), gettype($grossTotal)), __LINE__);
        }
        $this->GrossTotal = $grossTotal;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \IFT_Faturas\StructType\IFT_FaturasDocumentTotals
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
