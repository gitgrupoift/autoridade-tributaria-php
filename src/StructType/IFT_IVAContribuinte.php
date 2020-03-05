<?php

namespace IFT_IVA\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for contribuinte StructType
 * @package IFT_IVA
 * @subpackage Structs
 */
class IFT_IVAContribuinte extends AbstractStructBase
{
    /**
     * The actor
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 40
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $actor;
    /**
     * The nif
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $nif;
    /**
     * Constructor method for contribuinte
     * @uses IFT_IVAContribuinte::setActor()
     * @uses IFT_IVAContribuinte::setNif()
     * @param string $actor
     * @param int $nif
     */
    public function __construct($actor = null, $nif = null)
    {
        $this
            ->setActor($actor)
            ->setNif($nif);
    }
    /**
     * Get actor value
     * @return string
     */
    public function getActor()
    {
        return $this->actor;
    }
    /**
     * Set actor value
     * @param string $actor
     * @return \IFT_IVA\StructType\IFT_IVAContribuinte
     */
    public function setActor($actor = null)
    {
        // validation for constraint: string
        if (!is_null($actor) && !is_string($actor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($actor, true), gettype($actor)), __LINE__);
        }
        // validation for constraint: maxLength(40)
        if (!is_null($actor) && mb_strlen($actor) > 40) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 40', mb_strlen($actor)), __LINE__);
        }
        $this->actor = $actor;
        return $this;
    }
    /**
     * Get nif value
     * @return int
     */
    public function getNif()
    {
        return $this->nif;
    }
    /**
     * Set nif value
     * @param int $nif
     * @return \IFT_IVA\StructType\IFT_IVAContribuinte
     */
    public function setNif($nif = null)
    {
        // validation for constraint: int
        if (!is_null($nif) && !(is_int($nif) || ctype_digit($nif))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($nif, true), gettype($nif)), __LINE__);
        }
        $this->nif = $nif;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \IFT_IVA\StructType\IFT_IVAContribuinte
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
