<?php

namespace IFT_DocTransportes\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderReferences StructType
 * @package IFT_DocTransportes
 * @subpackage Structs
 */
class IFT_DocTransportesOrderReferences extends AbstractStructBase
{
    /**
     * The OriginatingON
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 60
     * - minLength: 1
     * - minOccurs: 0
     * @var string
     */
    public $OriginatingON;
    /**
     * Constructor method for OrderReferences
     * @uses IFT_DocTransportesOrderReferences::setOriginatingON()
     * @param string $originatingON
     */
    public function __construct($originatingON = null)
    {
        $this
            ->setOriginatingON($originatingON);
    }
    /**
     * Get OriginatingON value
     * @return string|null
     */
    public function getOriginatingON()
    {
        return $this->OriginatingON;
    }
    /**
     * Set OriginatingON value
     * @param string $originatingON
     * @return \IFT_DocTransportes\StructType\IFT_DocTransportesOrderReferences
     */
    public function setOriginatingON($originatingON = null)
    {
        // validation for constraint: string
        if (!is_null($originatingON) && !is_string($originatingON)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originatingON, true), gettype($originatingON)), __LINE__);
        }
        // validation for constraint: maxLength(60)
        if (!is_null($originatingON) && mb_strlen($originatingON) > 60) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 60', mb_strlen($originatingON)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($originatingON) && mb_strlen($originatingON) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($originatingON)), __LINE__);
        }
        $this->OriginatingON = $originatingON;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \IFT_DocTransportes\StructType\IFT_DocTransportesOrderReferences
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
