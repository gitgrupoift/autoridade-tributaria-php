<?php

namespace IFT_DocTransportes\EnumType;

/**
 * This class stands for MovementType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Restrição:Tipos de Documento (GR-Guia de remessa, GT-Guia de transporte, GA-Guia de movimentação de ativos próprios,GC-Guia de consignação, GD-Guia ou nota de devolução afetuada pelo cliente.
 * @package IFT_DocTransportes
 * @subpackage Enumerations
 */
class IFT_DocTransportesMovementType
{
    /**
     * Constant for value 'GR'
     * @return string 'GR'
     */
    const VALUE_GR = 'GR';
    /**
     * Constant for value 'GT'
     * @return string 'GT'
     */
    const VALUE_GT = 'GT';
    /**
     * Constant for value 'GA'
     * @return string 'GA'
     */
    const VALUE_GA = 'GA';
    /**
     * Constant for value 'GC'
     * @return string 'GC'
     */
    const VALUE_GC = 'GC';
    /**
     * Constant for value 'GD'
     * @return string 'GD'
     */
    const VALUE_GD = 'GD';
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
     * @uses self::VALUE_GR
     * @uses self::VALUE_GT
     * @uses self::VALUE_GA
     * @uses self::VALUE_GC
     * @uses self::VALUE_GD
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_GR,
            self::VALUE_GT,
            self::VALUE_GA,
            self::VALUE_GC,
            self::VALUE_GD,
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
