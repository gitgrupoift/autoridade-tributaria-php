<?php

namespace IFT_DocTransportes\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StockMovement StructType
 * Meta information extracted from the WSDL
 * - documentation: Comunicação de um Documentos de Transporte pelo Cliente
 * @package IFT_DocTransportes
 * @subpackage Structs
 */
class IFT_DocTransportesStockMovement extends AbstractStructBase
{
    /**
     * The Line
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \IFT_DocTransportes\StructType\IFT_DocTransportesLine[]
     */
    public $Line;
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
     * The CompanyName
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 100
     * - minLength: 1
     * @var string
     */
    public $CompanyName;
    /**
     * The CompanyAddress
     * @var \IFT_DocTransportes\StructType\IFT_DocTransportesAddressStructurePT
     */
    public $CompanyAddress;
    /**
     * The DocumentNumber
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 60
     * - minLength: 1
     * @var string
     */
    public $DocumentNumber;
    /**
     * The ATDocCodeID
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 200
     * - minLength: 1
     * - minOccurs: 0
     * @var string
     */
    public $ATDocCodeID;
    /**
     * The MovementStatus
     * @var string
     */
    public $MovementStatus;
    /**
     * The MovementDate
     * Meta information extracted from the WSDL
     * - base: xsd:date
     * @var string
     */
    public $MovementDate;
    /**
     * The MovementType
     * @var string
     */
    public $MovementType;
    /**
     * The CustomerTaxID
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - choice: CustomerTaxID | SupplierTaxID
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxLength: 20
     * - minLength: 1
     * - minOccurs: 0
     * @var string
     */
    public $CustomerTaxID;
    /**
     * The SupplierTaxID
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - choice: CustomerTaxID | SupplierTaxID
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxLength: 20
     * - minLength: 1
     * - minOccurs: 0
     * @var string
     */
    public $SupplierTaxID;
    /**
     * The CustomerAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \IFT_DocTransportes\StructType\IFT_DocTransportesAddressStructurePT
     */
    public $CustomerAddress;
    /**
     * The CustomerName
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 100
     * - minLength: 1
     * - minOccurs: 0
     * @var string
     */
    public $CustomerName;
    /**
     * The AddressTo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \IFT_DocTransportes\StructType\IFT_DocTransportesAddressStructurePT
     */
    public $AddressTo;
    /**
     * The AddressFrom
     * @var \IFT_DocTransportes\StructType\IFT_DocTransportesAddressStructurePT
     */
    public $AddressFrom;
    /**
     * The MovementEndTime
     * Meta information extracted from the WSDL
     * - base: xsd:dateTime
     * - minOccurs: 0
     * @var string
     */
    public $MovementEndTime;
    /**
     * The MovementStartTime
     * Meta information extracted from the WSDL
     * - base: xsd:dateTime
     * @var string
     */
    public $MovementStartTime;
    /**
     * The VehicleID
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 32
     * - minLength: 1
     * - minOccurs: 0
     * @var string
     */
    public $VehicleID;
    /**
     * Constructor method for StockMovement
     * @uses IFT_DocTransportesStockMovement::setLine()
     * @uses IFT_DocTransportesStockMovement::setTaxRegistrationNumber()
     * @uses IFT_DocTransportesStockMovement::setCompanyName()
     * @uses IFT_DocTransportesStockMovement::setCompanyAddress()
     * @uses IFT_DocTransportesStockMovement::setDocumentNumber()
     * @uses IFT_DocTransportesStockMovement::setATDocCodeID()
     * @uses IFT_DocTransportesStockMovement::setMovementStatus()
     * @uses IFT_DocTransportesStockMovement::setMovementDate()
     * @uses IFT_DocTransportesStockMovement::setMovementType()
     * @uses IFT_DocTransportesStockMovement::setCustomerTaxID()
     * @uses IFT_DocTransportesStockMovement::setSupplierTaxID()
     * @uses IFT_DocTransportesStockMovement::setCustomerAddress()
     * @uses IFT_DocTransportesStockMovement::setCustomerName()
     * @uses IFT_DocTransportesStockMovement::setAddressTo()
     * @uses IFT_DocTransportesStockMovement::setAddressFrom()
     * @uses IFT_DocTransportesStockMovement::setMovementEndTime()
     * @uses IFT_DocTransportesStockMovement::setMovementStartTime()
     * @uses IFT_DocTransportesStockMovement::setVehicleID()
     * @param \IFT_DocTransportes\StructType\IFT_DocTransportesLine[] $line
     * @param int $taxRegistrationNumber
     * @param string $companyName
     * @param \IFT_DocTransportes\StructType\IFT_DocTransportesAddressStructurePT $companyAddress
     * @param string $documentNumber
     * @param string $aTDocCodeID
     * @param string $movementStatus
     * @param string $movementDate
     * @param string $movementType
     * @param string $customerTaxID
     * @param string $supplierTaxID
     * @param \IFT_DocTransportes\StructType\IFT_DocTransportesAddressStructurePT $customerAddress
     * @param string $customerName
     * @param \IFT_DocTransportes\StructType\IFT_DocTransportesAddressStructurePT $addressTo
     * @param \IFT_DocTransportes\StructType\IFT_DocTransportesAddressStructurePT $addressFrom
     * @param string $movementEndTime
     * @param string $movementStartTime
     * @param string $vehicleID
     */
    public function __construct(array $line = array(), $taxRegistrationNumber = null, $companyName = null, \IFT_DocTransportes\StructType\IFT_DocTransportesAddressStructurePT $companyAddress = null, $documentNumber = null, $aTDocCodeID = null, $movementStatus = null, $movementDate = null, $movementType = null, $customerTaxID = null, $supplierTaxID = null, \IFT_DocTransportes\StructType\IFT_DocTransportesAddressStructurePT $customerAddress = null, $customerName = null, \IFT_DocTransportes\StructType\IFT_DocTransportesAddressStructurePT $addressTo = null, \IFT_DocTransportes\StructType\IFT_DocTransportesAddressStructurePT $addressFrom = null, $movementEndTime = null, $movementStartTime = null, $vehicleID = null)
    {
        $this
            ->setLine($line)
            ->setTaxRegistrationNumber($taxRegistrationNumber)
            ->setCompanyName($companyName)
            ->setCompanyAddress($companyAddress)
            ->setDocumentNumber($documentNumber)
            ->setATDocCodeID($aTDocCodeID)
            ->setMovementStatus($movementStatus)
            ->setMovementDate($movementDate)
            ->setMovementType($movementType)
            ->setCustomerTaxID($customerTaxID)
            ->setSupplierTaxID($supplierTaxID)
            ->setCustomerAddress($customerAddress)
            ->setCustomerName($customerName)
            ->setAddressTo($addressTo)
            ->setAddressFrom($addressFrom)
            ->setMovementEndTime($movementEndTime)
            ->setMovementStartTime($movementStartTime)
            ->setVehicleID($vehicleID);
    }
    /**
     * Get Line value
     * @return \IFT_DocTransportes\StructType\IFT_DocTransportesLine[]
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
        foreach ($values as $stockMovementLineItem) {
            // validation for constraint: itemType
            if (!$stockMovementLineItem instanceof \IFT_DocTransportes\StructType\IFT_DocTransportesLine) {
                $invalidValues[] = is_object($stockMovementLineItem) ? get_class($stockMovementLineItem) : sprintf('%s(%s)', gettype($stockMovementLineItem), var_export($stockMovementLineItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Line property can only contain items of type \IFT_DocTransportes\StructType\IFT_DocTransportesLine, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Line value
     * @throws \InvalidArgumentException
     * @param \IFT_DocTransportes\StructType\IFT_DocTransportesLine[] $line
     * @return \IFT_DocTransportes\StructType\IFT_DocTransportesStockMovement
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
     * @param \IFT_DocTransportes\StructType\IFT_DocTransportesLine $item
     * @return \IFT_DocTransportes\StructType\IFT_DocTransportesStockMovement
     */
    public function addToLine(\IFT_DocTransportes\StructType\IFT_DocTransportesLine $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \IFT_DocTransportes\StructType\IFT_DocTransportesLine) {
            throw new \InvalidArgumentException(sprintf('The Line property can only contain items of type \IFT_DocTransportes\StructType\IFT_DocTransportesLine, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Line[] = $item;
        return $this;
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
     * @return \IFT_DocTransportes\StructType\IFT_DocTransportesStockMovement
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
     * Get CompanyName value
     * @return string|null
     */
    public function getCompanyName()
    {
        return $this->CompanyName;
    }
    /**
     * Set CompanyName value
     * @param string $companyName
     * @return \IFT_DocTransportes\StructType\IFT_DocTransportesStockMovement
     */
    public function setCompanyName($companyName = null)
    {
        // validation for constraint: string
        if (!is_null($companyName) && !is_string($companyName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($companyName, true), gettype($companyName)), __LINE__);
        }
        // validation for constraint: maxLength(100)
        if (!is_null($companyName) && mb_strlen($companyName) > 100) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 100', mb_strlen($companyName)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($companyName) && mb_strlen($companyName) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($companyName)), __LINE__);
        }
        $this->CompanyName = $companyName;
        return $this;
    }
    /**
     * Get CompanyAddress value
     * @return \IFT_DocTransportes\StructType\IFT_DocTransportesAddressStructurePT|null
     */
    public function getCompanyAddress()
    {
        return $this->CompanyAddress;
    }
    /**
     * Set CompanyAddress value
     * @param \IFT_DocTransportes\StructType\IFT_DocTransportesAddressStructurePT $companyAddress
     * @return \IFT_DocTransportes\StructType\IFT_DocTransportesStockMovement
     */
    public function setCompanyAddress(\IFT_DocTransportes\StructType\IFT_DocTransportesAddressStructurePT $companyAddress = null)
    {
        $this->CompanyAddress = $companyAddress;
        return $this;
    }
    /**
     * Get DocumentNumber value
     * @return string|null
     */
    public function getDocumentNumber()
    {
        return $this->DocumentNumber;
    }
    /**
     * Set DocumentNumber value
     * @param string $documentNumber
     * @return \IFT_DocTransportes\StructType\IFT_DocTransportesStockMovement
     */
    public function setDocumentNumber($documentNumber = null)
    {
        // validation for constraint: string
        if (!is_null($documentNumber) && !is_string($documentNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentNumber, true), gettype($documentNumber)), __LINE__);
        }
        // validation for constraint: maxLength(60)
        if (!is_null($documentNumber) && mb_strlen($documentNumber) > 60) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 60', mb_strlen($documentNumber)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($documentNumber) && mb_strlen($documentNumber) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($documentNumber)), __LINE__);
        }
        $this->DocumentNumber = $documentNumber;
        return $this;
    }
    /**
     * Get ATDocCodeID value
     * @return string|null
     */
    public function getATDocCodeID()
    {
        return $this->ATDocCodeID;
    }
    /**
     * Set ATDocCodeID value
     * @param string $aTDocCodeID
     * @return \IFT_DocTransportes\StructType\IFT_DocTransportesStockMovement
     */
    public function setATDocCodeID($aTDocCodeID = null)
    {
        // validation for constraint: string
        if (!is_null($aTDocCodeID) && !is_string($aTDocCodeID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($aTDocCodeID, true), gettype($aTDocCodeID)), __LINE__);
        }
        // validation for constraint: maxLength(200)
        if (!is_null($aTDocCodeID) && mb_strlen($aTDocCodeID) > 200) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 200', mb_strlen($aTDocCodeID)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($aTDocCodeID) && mb_strlen($aTDocCodeID) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($aTDocCodeID)), __LINE__);
        }
        $this->ATDocCodeID = $aTDocCodeID;
        return $this;
    }
    /**
     * Get MovementStatus value
     * @return string|null
     */
    public function getMovementStatus()
    {
        return $this->MovementStatus;
    }
    /**
     * Set MovementStatus value
     * @uses \IFT_DocTransportes\EnumType\IFT_DocTransportesMovementStatus::valueIsValid()
     * @uses \IFT_DocTransportes\EnumType\IFT_DocTransportesMovementStatus::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $movementStatus
     * @return \IFT_DocTransportes\StructType\IFT_DocTransportesStockMovement
     */
    public function setMovementStatus($movementStatus = null)
    {
        // validation for constraint: enumeration
        if (!\IFT_DocTransportes\EnumType\IFT_DocTransportesMovementStatus::valueIsValid($movementStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \IFT_DocTransportes\EnumType\IFT_DocTransportesMovementStatus', is_array($movementStatus) ? implode(', ', $movementStatus) : var_export($movementStatus, true), implode(', ', \IFT_DocTransportes\EnumType\IFT_DocTransportesMovementStatus::getValidValues())), __LINE__);
        }
        $this->MovementStatus = $movementStatus;
        return $this;
    }
    /**
     * Get MovementDate value
     * @return string|null
     */
    public function getMovementDate()
    {
        return $this->MovementDate;
    }
    /**
     * Set MovementDate value
     * @param string $movementDate
     * @return \IFT_DocTransportes\StructType\IFT_DocTransportesStockMovement
     */
    public function setMovementDate($movementDate = null)
    {
        // validation for constraint: string
        if (!is_null($movementDate) && !is_string($movementDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($movementDate, true), gettype($movementDate)), __LINE__);
        }
        $this->MovementDate = $movementDate;
        return $this;
    }
    /**
     * Get MovementType value
     * @return string|null
     */
    public function getMovementType()
    {
        return $this->MovementType;
    }
    /**
     * Set MovementType value
     * @uses \IFT_DocTransportes\EnumType\IFT_DocTransportesMovementType::valueIsValid()
     * @uses \IFT_DocTransportes\EnumType\IFT_DocTransportesMovementType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $movementType
     * @return \IFT_DocTransportes\StructType\IFT_DocTransportesStockMovement
     */
    public function setMovementType($movementType = null)
    {
        // validation for constraint: enumeration
        if (!\IFT_DocTransportes\EnumType\IFT_DocTransportesMovementType::valueIsValid($movementType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \IFT_DocTransportes\EnumType\IFT_DocTransportesMovementType', is_array($movementType) ? implode(', ', $movementType) : var_export($movementType, true), implode(', ', \IFT_DocTransportes\EnumType\IFT_DocTransportesMovementType::getValidValues())), __LINE__);
        }
        $this->MovementType = $movementType;
        return $this;
    }
    /**
     * Get CustomerTaxID value
     * @return string|null
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
            'SupplierTaxID',
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
     * @param string $customerTaxID
     * @return \IFT_DocTransportes\StructType\IFT_DocTransportesStockMovement
     */
    public function setCustomerTaxID($customerTaxID = null)
    {
        // validation for constraint: string
        if (!is_null($customerTaxID) && !is_string($customerTaxID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerTaxID, true), gettype($customerTaxID)), __LINE__);
        }
        // validation for constraint: choice(CustomerTaxID, SupplierTaxID)
        if ('' !== ($customerTaxIDChoiceErrorMessage = self::validateCustomerTaxIDForChoiceConstraintsFromSetCustomerTaxID($customerTaxID))) {
            throw new \InvalidArgumentException($customerTaxIDChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: maxLength(20)
        if (!is_null($customerTaxID) && mb_strlen($customerTaxID) > 20) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 20', mb_strlen($customerTaxID)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($customerTaxID) && mb_strlen($customerTaxID) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($customerTaxID)), __LINE__);
        }
        if (is_null($customerTaxID) || (is_array($customerTaxID) && empty($customerTaxID))) {
            unset($this->CustomerTaxID);
        } else {
            $this->CustomerTaxID = $customerTaxID;
        }
        return $this;
    }
    /**
     * Get SupplierTaxID value
     * @return string|null
     */
    public function getSupplierTaxID()
    {
        return isset($this->SupplierTaxID) ? $this->SupplierTaxID : null;
    }
    /**
     * This method is responsible for validating the value passed to the setSupplierTaxID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSupplierTaxID method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateSupplierTaxIDForChoiceConstraintsFromSetSupplierTaxID($value)
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
                    throw new \InvalidArgumentException(sprintf('The property SupplierTaxID can\'t be set as the property %s is already set. Only one property must be set among these properties: SupplierTaxID, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set SupplierTaxID value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param string $supplierTaxID
     * @return \IFT_DocTransportes\StructType\IFT_DocTransportesStockMovement
     */
    public function setSupplierTaxID($supplierTaxID = null)
    {
        // validation for constraint: string
        if (!is_null($supplierTaxID) && !is_string($supplierTaxID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierTaxID, true), gettype($supplierTaxID)), __LINE__);
        }
        // validation for constraint: choice(CustomerTaxID, SupplierTaxID)
        if ('' !== ($supplierTaxIDChoiceErrorMessage = self::validateSupplierTaxIDForChoiceConstraintsFromSetSupplierTaxID($supplierTaxID))) {
            throw new \InvalidArgumentException($supplierTaxIDChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: maxLength(20)
        if (!is_null($supplierTaxID) && mb_strlen($supplierTaxID) > 20) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 20', mb_strlen($supplierTaxID)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($supplierTaxID) && mb_strlen($supplierTaxID) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($supplierTaxID)), __LINE__);
        }
        if (is_null($supplierTaxID) || (is_array($supplierTaxID) && empty($supplierTaxID))) {
            unset($this->SupplierTaxID);
        } else {
            $this->SupplierTaxID = $supplierTaxID;
        }
        return $this;
    }
    /**
     * Get CustomerAddress value
     * @return \IFT_DocTransportes\StructType\IFT_DocTransportesAddressStructurePT|null
     */
    public function getCustomerAddress()
    {
        return $this->CustomerAddress;
    }
    /**
     * Set CustomerAddress value
     * @param \IFT_DocTransportes\StructType\IFT_DocTransportesAddressStructurePT $customerAddress
     * @return \IFT_DocTransportes\StructType\IFT_DocTransportesStockMovement
     */
    public function setCustomerAddress(\IFT_DocTransportes\StructType\IFT_DocTransportesAddressStructurePT $customerAddress = null)
    {
        $this->CustomerAddress = $customerAddress;
        return $this;
    }
    /**
     * Get CustomerName value
     * @return string|null
     */
    public function getCustomerName()
    {
        return $this->CustomerName;
    }
    /**
     * Set CustomerName value
     * @param string $customerName
     * @return \IFT_DocTransportes\StructType\IFT_DocTransportesStockMovement
     */
    public function setCustomerName($customerName = null)
    {
        // validation for constraint: string
        if (!is_null($customerName) && !is_string($customerName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerName, true), gettype($customerName)), __LINE__);
        }
        // validation for constraint: maxLength(100)
        if (!is_null($customerName) && mb_strlen($customerName) > 100) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 100', mb_strlen($customerName)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($customerName) && mb_strlen($customerName) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($customerName)), __LINE__);
        }
        $this->CustomerName = $customerName;
        return $this;
    }
    /**
     * Get AddressTo value
     * @return \IFT_DocTransportes\StructType\IFT_DocTransportesAddressStructurePT|null
     */
    public function getAddressTo()
    {
        return $this->AddressTo;
    }
    /**
     * Set AddressTo value
     * @param \IFT_DocTransportes\StructType\IFT_DocTransportesAddressStructurePT $addressTo
     * @return \IFT_DocTransportes\StructType\IFT_DocTransportesStockMovement
     */
    public function setAddressTo(\IFT_DocTransportes\StructType\IFT_DocTransportesAddressStructurePT $addressTo = null)
    {
        $this->AddressTo = $addressTo;
        return $this;
    }
    /**
     * Get AddressFrom value
     * @return \IFT_DocTransportes\StructType\IFT_DocTransportesAddressStructurePT|null
     */
    public function getAddressFrom()
    {
        return $this->AddressFrom;
    }
    /**
     * Set AddressFrom value
     * @param \IFT_DocTransportes\StructType\IFT_DocTransportesAddressStructurePT $addressFrom
     * @return \IFT_DocTransportes\StructType\IFT_DocTransportesStockMovement
     */
    public function setAddressFrom(\IFT_DocTransportes\StructType\IFT_DocTransportesAddressStructurePT $addressFrom = null)
    {
        $this->AddressFrom = $addressFrom;
        return $this;
    }
    /**
     * Get MovementEndTime value
     * @return string|null
     */
    public function getMovementEndTime()
    {
        return $this->MovementEndTime;
    }
    /**
     * Set MovementEndTime value
     * @param string $movementEndTime
     * @return \IFT_DocTransportes\StructType\IFT_DocTransportesStockMovement
     */
    public function setMovementEndTime($movementEndTime = null)
    {
        // validation for constraint: string
        if (!is_null($movementEndTime) && !is_string($movementEndTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($movementEndTime, true), gettype($movementEndTime)), __LINE__);
        }
        $this->MovementEndTime = $movementEndTime;
        return $this;
    }
    /**
     * Get MovementStartTime value
     * @return string|null
     */
    public function getMovementStartTime()
    {
        return $this->MovementStartTime;
    }
    /**
     * Set MovementStartTime value
     * @param string $movementStartTime
     * @return \IFT_DocTransportes\StructType\IFT_DocTransportesStockMovement
     */
    public function setMovementStartTime($movementStartTime = null)
    {
        // validation for constraint: string
        if (!is_null($movementStartTime) && !is_string($movementStartTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($movementStartTime, true), gettype($movementStartTime)), __LINE__);
        }
        $this->MovementStartTime = $movementStartTime;
        return $this;
    }
    /**
     * Get VehicleID value
     * @return string|null
     */
    public function getVehicleID()
    {
        return $this->VehicleID;
    }
    /**
     * Set VehicleID value
     * @param string $vehicleID
     * @return \IFT_DocTransportes\StructType\IFT_DocTransportesStockMovement
     */
    public function setVehicleID($vehicleID = null)
    {
        // validation for constraint: string
        if (!is_null($vehicleID) && !is_string($vehicleID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vehicleID, true), gettype($vehicleID)), __LINE__);
        }
        // validation for constraint: maxLength(32)
        if (!is_null($vehicleID) && mb_strlen($vehicleID) > 32) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 32', mb_strlen($vehicleID)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($vehicleID) && mb_strlen($vehicleID) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($vehicleID)), __LINE__);
        }
        $this->VehicleID = $vehicleID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \IFT_DocTransportes\StructType\IFT_DocTransportesStockMovement
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
