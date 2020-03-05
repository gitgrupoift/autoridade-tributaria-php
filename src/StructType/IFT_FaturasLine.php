<?php

namespace IFT_Faturas\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Line StructType
 * @package IFT_Faturas
 * @subpackage Structs
 */
class IFT_FaturasLine extends AbstractStructBase
{
    /**
     * The OrderReferences
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: tns:OrderReferences
     * @var \IFT_Faturas\StructType\IFT_FaturasOrderReferences
     */
    public $OrderReferences;
    /**
     * The DebitAmount
     * Meta information extracted from the WSDL
     * - base: xsd:decimal
     * - choice: DebitAmount | CreditAmount
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - ref: tns:DebitAmount
     * @var float
     */
    public $DebitAmount;
    /**
     * The CreditAmount
     * Meta information extracted from the WSDL
     * - base: xsd:decimal
     * - choice: DebitAmount | CreditAmount
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - ref: tns:CreditAmount
     * @var float
     */
    public $CreditAmount;
    /**
     * The Tax
     * Meta information extracted from the WSDL
     * - ref: tns:Tax
     * @var \IFT_Faturas\StructType\IFT_FaturasTax
     */
    public $Tax;
    /**
     * The TaxExemptionReason
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 3
     * - minOccurs: 0
     * - ref: tns:TaxExemptionReason
     * @var string
     */
    public $TaxExemptionReason;
    /**
     * Constructor method for Line
     * @uses IFT_FaturasLine::setOrderReferences()
     * @uses IFT_FaturasLine::setDebitAmount()
     * @uses IFT_FaturasLine::setCreditAmount()
     * @uses IFT_FaturasLine::setTax()
     * @uses IFT_FaturasLine::setTaxExemptionReason()
     * @param \IFT_Faturas\StructType\IFT_FaturasOrderReferences $orderReferences
     * @param float $debitAmount
     * @param float $creditAmount
     * @param \IFT_Faturas\StructType\IFT_FaturasTax $tax
     * @param string $taxExemptionReason
     */
    public function __construct(\IFT_Faturas\StructType\IFT_FaturasOrderReferences $orderReferences = null, $debitAmount = null, $creditAmount = null, \IFT_Faturas\StructType\IFT_FaturasTax $tax = null, $taxExemptionReason = null)
    {
        $this
            ->setOrderReferences($orderReferences)
            ->setDebitAmount($debitAmount)
            ->setCreditAmount($creditAmount)
            ->setTax($tax)
            ->setTaxExemptionReason($taxExemptionReason);
    }
    /**
     * Get OrderReferences value
     * @return \IFT_Faturas\StructType\IFT_FaturasOrderReferences|null
     */
    public function getOrderReferences()
    {
        return $this->OrderReferences;
    }
    /**
     * Set OrderReferences value
     * @param \IFT_Faturas\StructType\IFT_FaturasOrderReferences $orderReferences
     * @return \IFT_Faturas\StructType\IFT_FaturasLine
     */
    public function setOrderReferences(\IFT_Faturas\StructType\IFT_FaturasOrderReferences $orderReferences = null)
    {
        $this->OrderReferences = $orderReferences;
        return $this;
    }
    /**
     * Get DebitAmount value
     * @return float|null
     */
    public function getDebitAmount()
    {
        return isset($this->DebitAmount) ? $this->DebitAmount : null;
    }
    /**
     * This method is responsible for validating the value passed to the setDebitAmount method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDebitAmount method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateDebitAmountForChoiceConstraintsFromSetDebitAmount($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreditAmount',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property DebitAmount can\'t be set as the property %s is already set. Only one property must be set among these properties: DebitAmount, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set DebitAmount value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param float $debitAmount
     * @return \IFT_Faturas\StructType\IFT_FaturasLine
     */
    public function setDebitAmount($debitAmount = null)
    {
        // validation for constraint: float
        if (!is_null($debitAmount) && !(is_float($debitAmount) || is_numeric($debitAmount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($debitAmount, true), gettype($debitAmount)), __LINE__);
        }
        // validation for constraint: choice(DebitAmount, CreditAmount)
        if ('' !== ($debitAmountChoiceErrorMessage = self::validateDebitAmountForChoiceConstraintsFromSetDebitAmount($debitAmount))) {
            throw new \InvalidArgumentException($debitAmountChoiceErrorMessage, __LINE__);
        }
        if (is_null($debitAmount) || (is_array($debitAmount) && empty($debitAmount))) {
            unset($this->DebitAmount);
        } else {
            $this->DebitAmount = $debitAmount;
        }
        return $this;
    }
    /**
     * Get CreditAmount value
     * @return float|null
     */
    public function getCreditAmount()
    {
        return isset($this->CreditAmount) ? $this->CreditAmount : null;
    }
    /**
     * This method is responsible for validating the value passed to the setCreditAmount method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCreditAmount method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateCreditAmountForChoiceConstraintsFromSetCreditAmount($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'DebitAmount',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property CreditAmount can\'t be set as the property %s is already set. Only one property must be set among these properties: CreditAmount, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set CreditAmount value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param float $creditAmount
     * @return \IFT_Faturas\StructType\IFT_FaturasLine
     */
    public function setCreditAmount($creditAmount = null)
    {
        // validation for constraint: float
        if (!is_null($creditAmount) && !(is_float($creditAmount) || is_numeric($creditAmount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($creditAmount, true), gettype($creditAmount)), __LINE__);
        }
        // validation for constraint: choice(DebitAmount, CreditAmount)
        if ('' !== ($creditAmountChoiceErrorMessage = self::validateCreditAmountForChoiceConstraintsFromSetCreditAmount($creditAmount))) {
            throw new \InvalidArgumentException($creditAmountChoiceErrorMessage, __LINE__);
        }
        if (is_null($creditAmount) || (is_array($creditAmount) && empty($creditAmount))) {
            unset($this->CreditAmount);
        } else {
            $this->CreditAmount = $creditAmount;
        }
        return $this;
    }
    /**
     * Get Tax value
     * @return \IFT_Faturas\StructType\IFT_FaturasTax|null
     */
    public function getTax()
    {
        return $this->Tax;
    }
    /**
     * Set Tax value
     * @param \IFT_Faturas\StructType\IFT_FaturasTax $tax
     * @return \IFT_Faturas\StructType\IFT_FaturasLine
     */
    public function setTax(\IFT_Faturas\StructType\IFT_FaturasTax $tax = null)
    {
        $this->Tax = $tax;
        return $this;
    }
    /**
     * Get TaxExemptionReason value
     * @return string|null
     */
    public function getTaxExemptionReason()
    {
        return $this->TaxExemptionReason;
    }
    /**
     * Set TaxExemptionReason value
     * @param string $taxExemptionReason
     * @return \IFT_Faturas\StructType\IFT_FaturasLine
     */
    public function setTaxExemptionReason($taxExemptionReason = null)
    {
        // validation for constraint: string
        if (!is_null($taxExemptionReason) && !is_string($taxExemptionReason)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($taxExemptionReason, true), gettype($taxExemptionReason)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($taxExemptionReason) && mb_strlen($taxExemptionReason) !== 3) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen($taxExemptionReason)), __LINE__);
        }
        $this->TaxExemptionReason = $taxExemptionReason;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \IFT_Faturas\StructType\IFT_FaturasLine
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
