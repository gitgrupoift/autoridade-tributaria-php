<?php

namespace IFT_Art78\EnumType;

/**
 * This class stands for TipoEnquadramentoType EnumType
 * @package IFT_Art78
 * @subpackage Enumerations
 */
class IFT_Art78TipoEnquadramentoType
{
    /**
     * Constant for value 'M'
     * @return string 'M'
     */
    const VALUE_M = 'M';
    /**
     * Constant for value 'T'
     * @return string 'T'
     */
    const VALUE_T = 'T';
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
     * @uses self::VALUE_M
     * @uses self::VALUE_T
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_M,
            self::VALUE_T,
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
