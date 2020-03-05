<?php

namespace IFT_IES\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AuthenticationFailed StructType
 * @package IFT_IES
 * @subpackage Structs
 */
class IFT_IESAuthenticationFailed extends AbstractStructBase
{
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $Code;
    /**
     * The Message
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Message;
    /**
     * The NumberOfTriesRemaining
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $NumberOfTriesRemaining;
    /**
     * The Actor
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Actor;
    /**
     * Constructor method for AuthenticationFailed
     * @uses IFT_IESAuthenticationFailed::setCode()
     * @uses IFT_IESAuthenticationFailed::setMessage()
     * @uses IFT_IESAuthenticationFailed::setNumberOfTriesRemaining()
     * @uses IFT_IESAuthenticationFailed::setActor()
     * @param int $code
     * @param string $message
     * @param int $numberOfTriesRemaining
     * @param string $actor
     */
    public function __construct($code = null, $message = null, $numberOfTriesRemaining = null, $actor = null)
    {
        $this
            ->setCode($code)
            ->setMessage($message)
            ->setNumberOfTriesRemaining($numberOfTriesRemaining)
            ->setActor($actor);
    }
    /**
     * Get Code value
     * @return int
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param int $code
     * @return \IFT_IES\StructType\IFT_IESAuthenticationFailed
     */
    public function setCode($code = null)
    {
        // validation for constraint: int
        if (!is_null($code) && !(is_int($code) || ctype_digit($code))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        $this->Code = $code;
        return $this;
    }
    /**
     * Get Message value
     * @return string
     */
    public function getMessage()
    {
        return $this->Message;
    }
    /**
     * Set Message value
     * @param string $message
     * @return \IFT_IES\StructType\IFT_IESAuthenticationFailed
     */
    public function setMessage($message = null)
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($message, true), gettype($message)), __LINE__);
        }
        $this->Message = $message;
        return $this;
    }
    /**
     * Get NumberOfTriesRemaining value
     * @return int
     */
    public function getNumberOfTriesRemaining()
    {
        return $this->NumberOfTriesRemaining;
    }
    /**
     * Set NumberOfTriesRemaining value
     * @param int $numberOfTriesRemaining
     * @return \IFT_IES\StructType\IFT_IESAuthenticationFailed
     */
    public function setNumberOfTriesRemaining($numberOfTriesRemaining = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfTriesRemaining) && !(is_int($numberOfTriesRemaining) || ctype_digit($numberOfTriesRemaining))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfTriesRemaining, true), gettype($numberOfTriesRemaining)), __LINE__);
        }
        $this->NumberOfTriesRemaining = $numberOfTriesRemaining;
        return $this;
    }
    /**
     * Get Actor value
     * @return string|null
     */
    public function getActor()
    {
        return $this->Actor;
    }
    /**
     * Set Actor value
     * @param string $actor
     * @return \IFT_IES\StructType\IFT_IESAuthenticationFailed
     */
    public function setActor($actor = null)
    {
        // validation for constraint: string
        if (!is_null($actor) && !is_string($actor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($actor, true), gettype($actor)), __LINE__);
        }
        $this->Actor = $actor;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \IFT_IES\StructType\IFT_IESAuthenticationFailed
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
