<?php

namespace IFT_DocTransportes\EnumType;

/**
 * This class stands for MovementStatus EnumType
 * Meta information extracted from the WSDL
 * - documentation: N para Normal, T para Por conta de terceiros, A para Documento anulado
 * @package IFT_DocTransportes
 * @subpackage Enumerations
 */
class IFT_DocTransportesMovementStatus
{
    /**
     * Constant for value 'N'
     * @return string 'N'
     */
    const VALUE_N = 'N';
    /**
     * Constant for value 'T'
     * @return string 'T'
     */
    const VALUE_T = 'T';
    /**
     * Constant for value 'A'
     * @return string 'A'
     */
    const VALUE_A = 'A';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_N
     * @uses self::VALUE_T
     * @uses self::VALUE_A
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_N,
            self::VALUE_T,
            self::VALUE_A,
        );
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
