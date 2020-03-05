<?php

namespace IFT_Faturas\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderReference StructType
 * @package IFT_Faturas
 * @subpackage Structs
 */
class IFT_FaturasOrderReference extends AbstractStructBase
{
    /**
     * The OriginatingON
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 60
     * - maxOccurs: 1
     * - minLength: 1
     * - minOccurs: 1
     * - ref: tns:OriginatingON
     * @var string
     */
    public $OriginatingON;
    /**
     * The OrderDate
     * Meta information extracted from the WSDL
     * - base: xsd:date
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: tns:OrderDate
     * @var string
     */
    public $OrderDate;
    /**
     * Constructor method for OrderReference
     * @uses IFT_FaturasOrderReference::setOriginatingON()
     * @uses IFT_FaturasOrderReference::setOrderDate()
     * @param string $originatingON
     * @param string $orderDate
     */
    public function __construct($originatingON = null, $orderDate = null)
    {
        $this
            ->setOriginatingON($originatingON)
            ->setOrderDate($orderDate);
    }
    /**
     * Get OriginatingON value
     * @return string
     */
    public function getOriginatingON()
    {
        return $this->OriginatingON;
    }
    /**
     * Set OriginatingON value
     * @param string $originatingON
     * @return \IFT_Faturas\StructType\IFT_FaturasOrderReference
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
     * Get OrderDate value
     * @return string
     */
    public function getOrderDate()
    {
        return $this->OrderDate;
    }
    /**
     * Set OrderDate value
     * @param string $orderDate
     * @return \IFT_Faturas\StructType\IFT_FaturasOrderReference
     */
    public function setOrderDate($orderDate = null)
    {
        // validation for constraint: string
        if (!is_null($orderDate) && !is_string($orderDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderDate, true), gettype($orderDate)), __LINE__);
        }
        $this->OrderDate = $orderDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \IFT_Faturas\StructType\IFT_FaturasOrderReference
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
