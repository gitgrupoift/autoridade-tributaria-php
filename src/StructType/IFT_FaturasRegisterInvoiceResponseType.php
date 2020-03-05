<?php

namespace IFT_Faturas\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RegisterInvoiceResponseType StructType
 * @package IFT_Faturas
 * @subpackage Structs
 */
class IFT_FaturasRegisterInvoiceResponseType extends AbstractStructBase
{
    /**
     * The ReturnCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $ReturnCode;
    /**
     * The ReturnMessage
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 256
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ReturnMessage;
    /**
     * Constructor method for RegisterInvoiceResponseType
     * @uses IFT_FaturasRegisterInvoiceResponseType::setReturnCode()
     * @uses IFT_FaturasRegisterInvoiceResponseType::setReturnMessage()
     * @param int $returnCode
     * @param string $returnMessage
     */
    public function __construct($returnCode = null, $returnMessage = null)
    {
        $this
            ->setReturnCode($returnCode)
            ->setReturnMessage($returnMessage);
    }
    /**
     * Get ReturnCode value
     * @return int
     */
    public function getReturnCode()
    {
        return $this->ReturnCode;
    }
    /**
     * Set ReturnCode value
     * @param int $returnCode
     * @return \IFT_Faturas\StructType\IFT_FaturasRegisterInvoiceResponseType
     */
    public function setReturnCode($returnCode = null)
    {
        // validation for constraint: int
        if (!is_null($returnCode) && !(is_int($returnCode) || ctype_digit($returnCode))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($returnCode, true), gettype($returnCode)), __LINE__);
        }
        $this->ReturnCode = $returnCode;
        return $this;
    }
    /**
     * Get ReturnMessage value
     * @return string
     */
    public function getReturnMessage()
    {
        return $this->ReturnMessage;
    }
    /**
     * Set ReturnMessage value
     * @param string $returnMessage
     * @return \IFT_Faturas\StructType\IFT_FaturasRegisterInvoiceResponseType
     */
    public function setReturnMessage($returnMessage = null)
    {
        // validation for constraint: string
        if (!is_null($returnMessage) && !is_string($returnMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnMessage, true), gettype($returnMessage)), __LINE__);
        }
        // validation for constraint: maxLength(256)
        if (!is_null($returnMessage) && mb_strlen($returnMessage) > 256) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 256', mb_strlen($returnMessage)), __LINE__);
        }
        $this->ReturnMessage = $returnMessage;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \IFT_Faturas\StructType\IFT_FaturasRegisterInvoiceResponseType
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
