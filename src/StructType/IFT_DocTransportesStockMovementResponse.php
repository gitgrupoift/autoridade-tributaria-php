<?php

namespace IFT_DocTransportes\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StockMovementResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: Resposta da AT ao envio do Documento de Transporte
 * @package IFT_DocTransportes
 * @subpackage Structs
 */
class IFT_DocTransportesStockMovementResponse extends AbstractStructBase
{
    /**
     * The ResponseStatus
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \IFT_DocTransportes\StructType\IFT_DocTransportesResponseStatus[]
     */
    public $ResponseStatus;
    /**
     * The DocumentNumber
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 60
     * - minLength: 1
     * - minOccurs: 0
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
     * Constructor method for StockMovementResponse
     * @uses IFT_DocTransportesStockMovementResponse::setResponseStatus()
     * @uses IFT_DocTransportesStockMovementResponse::setDocumentNumber()
     * @uses IFT_DocTransportesStockMovementResponse::setATDocCodeID()
     * @param \IFT_DocTransportes\StructType\IFT_DocTransportesResponseStatus[] $responseStatus
     * @param string $documentNumber
     * @param string $aTDocCodeID
     */
    public function __construct(array $responseStatus = array(), $documentNumber = null, $aTDocCodeID = null)
    {
        $this
            ->setResponseStatus($responseStatus)
            ->setDocumentNumber($documentNumber)
            ->setATDocCodeID($aTDocCodeID);
    }
    /**
     * Get ResponseStatus value
     * @return \IFT_DocTransportes\StructType\IFT_DocTransportesResponseStatus[]
     */
    public function getResponseStatus()
    {
        return $this->ResponseStatus;
    }
    /**
     * This method is responsible for validating the values passed to the setResponseStatus method
     * This method is willingly generated in order to preserve the one-line inline validation within the setResponseStatus method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateResponseStatusForArrayConstraintsFromSetResponseStatus(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $stockMovementResponseResponseStatusItem) {
            // validation for constraint: itemType
            if (!$stockMovementResponseResponseStatusItem instanceof \IFT_DocTransportes\StructType\IFT_DocTransportesResponseStatus) {
                $invalidValues[] = is_object($stockMovementResponseResponseStatusItem) ? get_class($stockMovementResponseResponseStatusItem) : sprintf('%s(%s)', gettype($stockMovementResponseResponseStatusItem), var_export($stockMovementResponseResponseStatusItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ResponseStatus property can only contain items of type \IFT_DocTransportes\StructType\IFT_DocTransportesResponseStatus, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ResponseStatus value
     * @throws \InvalidArgumentException
     * @param \IFT_DocTransportes\StructType\IFT_DocTransportesResponseStatus[] $responseStatus
     * @return \IFT_DocTransportes\StructType\IFT_DocTransportesStockMovementResponse
     */
    public function setResponseStatus(array $responseStatus = array())
    {
        // validation for constraint: array
        if ('' !== ($responseStatusArrayErrorMessage = self::validateResponseStatusForArrayConstraintsFromSetResponseStatus($responseStatus))) {
            throw new \InvalidArgumentException($responseStatusArrayErrorMessage, __LINE__);
        }
        $this->ResponseStatus = $responseStatus;
        return $this;
    }
    /**
     * Add item to ResponseStatus value
     * @throws \InvalidArgumentException
     * @param \IFT_DocTransportes\StructType\IFT_DocTransportesResponseStatus $item
     * @return \IFT_DocTransportes\StructType\IFT_DocTransportesStockMovementResponse
     */
    public function addToResponseStatus(\IFT_DocTransportes\StructType\IFT_DocTransportesResponseStatus $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \IFT_DocTransportes\StructType\IFT_DocTransportesResponseStatus) {
            throw new \InvalidArgumentException(sprintf('The ResponseStatus property can only contain items of type \IFT_DocTransportes\StructType\IFT_DocTransportesResponseStatus, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ResponseStatus[] = $item;
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
     * @return \IFT_DocTransportes\StructType\IFT_DocTransportesStockMovementResponse
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
     * @return \IFT_DocTransportes\StructType\IFT_DocTransportesStockMovementResponse
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \IFT_DocTransportes\StructType\IFT_DocTransportesStockMovementResponse
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
