<?php

namespace IFT_Faturas\EnumType;

/**
 * This class stands for InvoiceStatus EnumType
 * Meta information extracted from the WSDL
 * - documentation: N para Normal, A para Anulado
 * @package IFT_Faturas
 * @subpackage Enumerations
 */
class IFT_FaturasInvoiceStatus
{
    /**
     * Constant for value 'N'
     * @return string 'N'
     */
    const VALUE_N = 'N';
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
     * @uses self::VALUE_A
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_N,
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
