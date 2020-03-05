<?php

namespace IFT_Faturas\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RegisterInvoiceType StructType
 * @package IFT_Faturas
 * @subpackage Structs
 */
class IFT_FaturasRegisterInvoiceType extends AbstractStructBase
{
    /**
     * The TaxRegistrationNumber
     * Meta information extracted from the WSDL
     * - base: xsd:integer
     * - maxInclusive: 999999999
     * - minInclusive: 100000000
     * @var int
     */
    public $TaxRegistrationNumber;
    /**
     * The InvoiceNo
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 60
     * - minLength: 1
     * - pattern: ([a-zA-Z0-9./_\-])+ ([a-zA-Z0-9]*[:slash:][0-9]+)
     * - ref: tns:InvoiceNo
     * @var string
     */
    public $InvoiceNo;
    /**
     * The InvoiceDate
     * Meta information extracted from the WSDL
     * - base: xsd:date
     * - ref: tns:InvoiceDate
     * @var string
     */
    public $InvoiceDate;
    /**
     * The InvoiceType
     * Meta information extracted from the WSDL
     * - ref: tns:InvoiceType
     * @var string
     */
    public $InvoiceType;
    /**
     * The InvoiceStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: tns:InvoiceStatus
     * @var string
     */
    public $InvoiceStatus;
    /**
     * The EACCode
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 5
     * - minOccurs: 0
     * - pattern: (([0-9]*))
     * - ref: tns:EACCode
     * @var string
     */
    public $EACCode;
    /**
     * The CustomerTaxID
     * Meta information extracted from the WSDL
     * - base: xsd:integer
     * - choice: CustomerTaxID | InternationalCustomerTaxID
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxInclusive: 999999999
     * - minInclusive: 100000000
     * @var int
     */
    public $CustomerTaxID;
    /**
     * The InternationalCustomerTaxID
     * Meta information extracted from the WSDL
     * - choice: CustomerTaxID | InternationalCustomerTaxID
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - ref: tns:InternationalCustomerTaxID
     * @var \IFT_Faturas\StructType\IFT_FaturasInternationalCustomerTaxID
     */
    public $InternationalCustomerTaxID;
    /**
     * The Line
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \IFT_Faturas\StructType\IFT_FaturasLine[]
     */
    public $Line;
    /**
     * The DocumentTotals
     * @var \IFT_Faturas\StructType\IFT_FaturasDocumentTotals
     */
    public $DocumentTotals;
    /**
     * Constructor method for RegisterInvoiceType
     * @uses IFT_FaturasRegisterInvoiceType::setTaxRegistrationNumber()
     * @uses IFT_FaturasRegisterInvoiceType::setInvoiceNo()
     * @uses IFT_FaturasRegisterInvoiceType::setInvoiceDate()
     * @uses IFT_FaturasRegisterInvoiceType::setInvoiceType()
     * @uses IFT_FaturasRegisterInvoiceType::setInvoiceStatus()
     * @uses IFT_FaturasRegisterInvoiceType::setEACCode()
     * @uses IFT_FaturasRegisterInvoiceType::setCustomerTaxID()
     * @uses IFT_FaturasRegisterInvoiceType::setInternationalCustomerTaxID()
     * @uses IFT_FaturasRegisterInvoiceType::setLine()
     * @uses IFT_FaturasRegisterInvoiceType::setDocumentTotals()
     * @param int $taxRegistrationNumber
     * @param string $invoiceNo
     * @param string $invoiceDate
     * @param string $invoiceType
     * @param string $invoiceStatus
     * @param string $eACCode
     * @param int $customerTaxID
     * @param \IFT_Faturas\StructType\IFT_FaturasInternationalCustomerTaxID $internationalCustomerTaxID
     * @param \IFT_Faturas\StructType\IFT_FaturasLine[] $line
     * @param \IFT_Faturas\StructType\IFT_FaturasDocumentTotals $documentTotals
     */
    public function __construct($taxRegistrationNumber = null, $invoiceNo = null, $invoiceDate = null, $invoiceType = null, $invoiceStatus = null, $eACCode = null, $customerTaxID = null, \IFT_Faturas\StructType\IFT_FaturasInternationalCustomerTaxID $internationalCustomerTaxID = null, array $line = array(), \IFT_Faturas\StructType\IFT_FaturasDocumentTotals $documentTotals = null)
    {
        $this
            ->setTaxRegistrationNumber($taxRegistrationNumber)
            ->setInvoiceNo($invoiceNo)
            ->setInvoiceDate($invoiceDate)
            ->setInvoiceType($invoiceType)
            ->setInvoiceStatus($invoiceStatus)
            ->setEACCode($eACCode)
            ->setCustomerTaxID($customerTaxID)
            ->setInternationalCustomerTaxID($internationalCustomerTaxID)
            ->setLine($line)
            ->setDocumentTotals($documentTotals);
    }
    /**
     * Get TaxRegistrationNumber value
     * @return int|null
     */
    public function getTaxRegistrationNumber()
    {
        return $this->TaxRegistrationNumber;
    }
    /**
     * Set TaxRegistrationNumber value
     * @param int $taxRegistrationNumber
     * @return \IFT_Faturas\StructType\IFT_FaturasRegisterInvoiceType
     */
    public function setTaxRegistrationNumber($taxRegistrationNumber = null)
    {
        // validation for constraint: int
        if (!is_null($taxRegistrationNumber) && !(is_int($taxRegistrationNumber) || ctype_digit($taxRegistrationNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($taxRegistrationNumber, true), gettype($taxRegistrationNumber)), __LINE__);
        }
        // validation for constraint: maxInclusive(999999999)
        if (!is_null($taxRegistrationNumber) && $taxRegistrationNumber > 999999999) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 999999999', var_export($taxRegistrationNumber, true)), __LINE__);
        }
        // validation for constraint: minInclusive(100000000)
        if (!is_null($taxRegistrationNumber) && $taxRegistrationNumber < 100000000) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 100000000', var_export($taxRegistrationNumber, true)), __LINE__);
        }
        $this->TaxRegistrationNumber = $taxRegistrationNumber;
        return $this;
    }
    /**
     * Get InvoiceNo value
     * @return string|null
     */
    public function getInvoiceNo()
    {
        return $this->InvoiceNo;
    }
    /**
     * Set InvoiceNo value
     * @param string $invoiceNo
     * @return \IFT_Faturas\StructType\IFT_FaturasRegisterInvoiceType
     */
    public function setInvoiceNo($invoiceNo = null)
    {
        // validation for constraint: string
        if (!is_null($invoiceNo) && !is_string($invoiceNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceNo, true), gettype($invoiceNo)), __LINE__);
        }
        // validation for constraint: maxLength(60)
        if (!is_null($invoiceNo) && mb_strlen($invoiceNo) > 60) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 60', mb_strlen($invoiceNo)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($invoiceNo) && mb_strlen($invoiceNo) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($invoiceNo)), __LINE__);
        }
        // validation for constraint: pattern(([a-zA-Z0-9./_\-])+ ([a-zA-Z0-9]*/[0-9]+))
        if (!is_null($invoiceNo) && !preg_match('/([a-zA-Z0-9.\/_\\-])+ ([a-zA-Z0-9]*\/[0-9]+)/', $invoiceNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression ([a-zA-Z0-9./_\-])+ ([a-zA-Z0-9]*/[0-9]+)', var_export($invoiceNo, true)), __LINE__);
        }
        $this->InvoiceNo = $invoiceNo;
        return $this;
    }
    /**
     * Get InvoiceDate value
     * @return string|null
     */
    public function getInvoiceDate()
    {
        return $this->InvoiceDate;
    }
    /**
     * Set InvoiceDate value
     * @param string $invoiceDate
     * @return \IFT_Faturas\StructType\IFT_FaturasRegisterInvoiceType
     */
    public function setInvoiceDate($invoiceDate = null)
    {
        // validation for constraint: string
        if (!is_null($invoiceDate) && !is_string($invoiceDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceDate, true), gettype($invoiceDate)), __LINE__);
        }
        $this->InvoiceDate = $invoiceDate;
        return $this;
    }
    /**
     * Get InvoiceType value
     * @return string|null
     */
    public function getInvoiceType()
    {
        return $this->InvoiceType;
    }
    /**
     * Set InvoiceType value
     * @uses \IFT_Faturas\EnumType\IFT_FaturasInvoiceType::valueIsValid()
     * @uses \IFT_Faturas\EnumType\IFT_FaturasInvoiceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $invoiceType
     * @return \IFT_Faturas\StructType\IFT_FaturasRegisterInvoiceType
     */
    public function setInvoiceType($invoiceType = null)
    {
        // validation for constraint: enumeration
        if (!\IFT_Faturas\EnumType\IFT_FaturasInvoiceType::valueIsValid($invoiceType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \IFT_Faturas\EnumType\IFT_FaturasInvoiceType', is_array($invoiceType) ? implode(', ', $invoiceType) : var_export($invoiceType, true), implode(', ', \IFT_Faturas\EnumType\IFT_FaturasInvoiceType::getValidValues())), __LINE__);
        }
        $this->InvoiceType = $invoiceType;
        return $this;
    }
    /**
     * Get InvoiceStatus value
     * @return string|null
     */
    public function getInvoiceStatus()
    {
        return $this->InvoiceStatus;
    }
    /**
     * Set InvoiceStatus value
     * @uses \IFT_Faturas\EnumType\IFT_FaturasInvoiceStatus::valueIsValid()
     * @uses \IFT_Faturas\EnumType\IFT_FaturasInvoiceStatus::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $invoiceStatus
     * @return \IFT_Faturas\StructType\IFT_FaturasRegisterInvoiceType
     */
    public function setInvoiceStatus($invoiceStatus = null)
    {
        // validation for constraint: enumeration
        if (!\IFT_Faturas\EnumType\IFT_FaturasInvoiceStatus::valueIsValid($invoiceStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \IFT_Faturas\EnumType\IFT_FaturasInvoiceStatus', is_array($invoiceStatus) ? implode(', ', $invoiceStatus) : var_export($invoiceStatus, true), implode(', ', \IFT_Faturas\EnumType\IFT_FaturasInvoiceStatus::getValidValues())), __LINE__);
        }
        $this->InvoiceStatus = $invoiceStatus;
        return $this;
    }
    /**
     * Get EACCode value
     * @return string|null
     */
    public function getEACCode()
    {
        return $this->EACCode;
    }
    /**
     * Set EACCode value
     * @param string $eACCode
     * @return \IFT_Faturas\StructType\IFT_FaturasRegisterInvoiceType
     */
    public function setEACCode($eACCode = null)
    {
        // validation for constraint: string
        if (!is_null($eACCode) && !is_string($eACCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eACCode, true), gettype($eACCode)), __LINE__);
        }
        // validation for constraint: length(5)
        if (!is_null($eACCode) && mb_strlen($eACCode) !== 5) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 5', mb_strlen($eACCode)), __LINE__);
        }
        // validation for constraint: pattern((([0-9]*)))
        if (!is_null($eACCode) && !preg_match('/(([0-9]*))/', $eACCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression (([0-9]*))', var_export($eACCode, true)), __LINE__);
        }
        $this->EACCode = $eACCode;
        return $this;
    }
    /**
     * Get CustomerTaxID value
     * @return int|null
     */
    public function getCustomerTaxID()
    {
        return isset($this->CustomerTaxID) ? $this->CustomerTaxID : null;
    }
    /**
     * This method is responsible for validating the value passed to the setCustomerTaxID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomerTaxID method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateCustomerTaxIDForChoiceConstraintsFromSetCustomerTaxID($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'InternationalCustomerTaxID',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property CustomerTaxID can\'t be set as the property %s is already set. Only one property must be set among these properties: CustomerTaxID, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set CustomerTaxID value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param int $customerTaxID
     * @return \IFT_Faturas\StructType\IFT_FaturasRegisterInvoiceType
     */
    public function setCustomerTaxID($customerTaxID = null)
    {
        // validation for constraint: int
        if (!is_null($customerTaxID) && !(is_int($customerTaxID) || ctype_digit($customerTaxID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerTaxID, true), gettype($customerTaxID)), __LINE__);
        }
        // validation for constraint: choice(CustomerTaxID, InternationalCustomerTaxID)
        if ('' !== ($customerTaxIDChoiceErrorMessage = self::validateCustomerTaxIDForChoiceConstraintsFromSetCustomerTaxID($customerTaxID))) {
            throw new \InvalidArgumentException($customerTaxIDChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: maxInclusive(999999999)
        if (!is_null($customerTaxID) && $customerTaxID > 999999999) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 999999999', var_export($customerTaxID, true)), __LINE__);
        }
        // validation for constraint: minInclusive(100000000)
        if (!is_null($customerTaxID) && $customerTaxID < 100000000) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 100000000', var_export($customerTaxID, true)), __LINE__);
        }
        if (is_null($customerTaxID) || (is_array($customerTaxID) && empty($customerTaxID))) {
            unset($this->CustomerTaxID);
        } else {
            $this->CustomerTaxID = $customerTaxID;
        }
        return $this;
    }
    /**
     * Get InternationalCustomerTaxID value
     * @return \IFT_Faturas\StructType\IFT_FaturasInternationalCustomerTaxID|null
     */
    public function getInternationalCustomerTaxID()
    {
        return isset($this->InternationalCustomerTaxID) ? $this->InternationalCustomerTaxID : null;
    }
    /**
     * This method is responsible for validating the value passed to the setInternationalCustomerTaxID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setInternationalCustomerTaxID method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateInternationalCustomerTaxIDForChoiceConstraintsFromSetInternationalCustomerTaxID($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CustomerTaxID',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property InternationalCustomerTaxID can\'t be set as the property %s is already set. Only one property must be set among these properties: InternationalCustomerTaxID, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set InternationalCustomerTaxID value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \IFT_Faturas\StructType\IFT_FaturasInternationalCustomerTaxID $internationalCustomerTaxID
     * @return \IFT_Faturas\StructType\IFT_FaturasRegisterInvoiceType
     */
    public function setInternationalCustomerTaxID(\IFT_Faturas\StructType\IFT_FaturasInternationalCustomerTaxID $internationalCustomerTaxID = null)
    {
        // validation for constraint: choice(CustomerTaxID, InternationalCustomerTaxID)
        if ('' !== ($internationalCustomerTaxIDChoiceErrorMessage = self::validateInternationalCustomerTaxIDForChoiceConstraintsFromSetInternationalCustomerTaxID($internationalCustomerTaxID))) {
            throw new \InvalidArgumentException($internationalCustomerTaxIDChoiceErrorMessage, __LINE__);
        }
        if (is_null($internationalCustomerTaxID) || (is_array($internationalCustomerTaxID) && empty($internationalCustomerTaxID))) {
            unset($this->InternationalCustomerTaxID);
        } else {
            $this->InternationalCustomerTaxID = $internationalCustomerTaxID;
        }
        return $this;
    }
    /**
     * Get Line value
     * @return \IFT_Faturas\StructType\IFT_FaturasLine[]|null
     */
    public function getLine()
    {
        return $this->Line;
    }
    /**
     * This method is responsible for validating the values passed to the setLine method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLine method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLineForArrayConstraintsFromSetLine(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $registerInvoiceTypeLineItem) {
            // validation for constraint: itemType
            if (!$registerInvoiceTypeLineItem instanceof \IFT_Faturas\StructType\IFT_FaturasLine) {
                $invalidValues[] = is_object($registerInvoiceTypeLineItem) ? get_class($registerInvoiceTypeLineItem) : sprintf('%s(%s)', gettype($registerInvoiceTypeLineItem), var_export($registerInvoiceTypeLineItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Line property can only contain items of type \IFT_Faturas\StructType\IFT_FaturasLine, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Line value
     * @throws \InvalidArgumentException
     * @param \IFT_Faturas\StructType\IFT_FaturasLine[] $line
     * @return \IFT_Faturas\StructType\IFT_FaturasRegisterInvoiceType
     */
    public function setLine(array $line = array())
    {
        // validation for constraint: array
        if ('' !== ($lineArrayErrorMessage = self::validateLineForArrayConstraintsFromSetLine($line))) {
            throw new \InvalidArgumentException($lineArrayErrorMessage, __LINE__);
        }
        $this->Line = $line;
        return $this;
    }
    /**
     * Add item to Line value
     * @throws \InvalidArgumentException
     * @param \IFT_Faturas\StructType\IFT_FaturasLine $item
     * @return \IFT_Faturas\StructType\IFT_FaturasRegisterInvoiceType
     */
    public function addToLine(\IFT_Faturas\StructType\IFT_FaturasLine $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \IFT_Faturas\StructType\IFT_FaturasLine) {
            throw new \InvalidArgumentException(sprintf('The Line property can only contain items of type \IFT_Faturas\StructType\IFT_FaturasLine, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Line[] = $item;
        return $this;
    }
    /**
     * Get DocumentTotals value
     * @return \IFT_Faturas\StructType\IFT_FaturasDocumentTotals|null
     */
    public function getDocumentTotals()
    {
        return $this->DocumentTotals;
    }
    /**
     * Set DocumentTotals value
     * @param \IFT_Faturas\StructType\IFT_FaturasDocumentTotals $documentTotals
     * @return \IFT_Faturas\StructType\IFT_FaturasRegisterInvoiceType
     */
    public function setDocumentTotals(\IFT_Faturas\StructType\IFT_FaturasDocumentTotals $documentTotals = null)
    {
        $this->DocumentTotals = $documentTotals;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \IFT_Faturas\StructType\IFT_FaturasRegisterInvoiceType
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
