<?php

namespace IFT_Faturas\EnumType;

/**
 * This class stands for InvoiceType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Restrição: Tipos de Documento (FT - Fatura, NC-Nota de Crédito, ND - Nota de Débito, FS - Fatura Simplificada, FR - Fatura-recibo, DC - Documento de Conferência)
 * @package IFT_Faturas
 * @subpackage Enumerations
 */
class IFT_FaturasInvoiceType
{
    /**
     * Constant for value 'FT'
     * @return string 'FT'
     */
    const VALUE_FT = 'FT';
    /**
     * Constant for value 'NC'
     * @return string 'NC'
     */
    const VALUE_NC = 'NC';
    /**
     * Constant for value 'ND'
     * @return string 'ND'
     */
    const VALUE_ND = 'ND';
    /**
     * Constant for value 'FS'
     * @return string 'FS'
     */
    const VALUE_FS = 'FS';
    /**
     * Constant for value 'FR'
     * @return string 'FR'
     */
    const VALUE_FR = 'FR';
    /**
     * Constant for value 'DC'
     * @return string 'DC'
     */
    const VALUE_DC = 'DC';
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
     * @uses self::VALUE_FT
     * @uses self::VALUE_NC
     * @uses self::VALUE_ND
     * @uses self::VALUE_FS
     * @uses self::VALUE_FR
     * @uses self::VALUE_DC
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_FT,
            self::VALUE_NC,
            self::VALUE_ND,
            self::VALUE_FS,
            self::VALUE_FR,
            self::VALUE_DC,
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
