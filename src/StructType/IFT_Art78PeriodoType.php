<?php

namespace IFT_Art78\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PeriodoType StructType
 * @package IFT_Art78
 * @subpackage Structs
 */
class IFT_Art78PeriodoType extends AbstractStructBase
{
    /**
     * The Ano
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: false
     * @var int
     */
    public $Ano;
    /**
     * The Mes
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: false
     * @var int
     */
    public $Mes;
    /**
     * The TipoEnquadramento
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: false
     * @var string
     */
    public $TipoEnquadramento;
    /**
     * Constructor method for PeriodoType
     * @uses IFT_Art78PeriodoType::setAno()
     * @uses IFT_Art78PeriodoType::setMes()
     * @uses IFT_Art78PeriodoType::setTipoEnquadramento()
     * @param int $ano
     * @param int $mes
     * @param string $tipoEnquadramento
     */
    public function __construct($ano = null, $mes = null, $tipoEnquadramento = null)
    {
        $this
            ->setAno($ano)
            ->setMes($mes)
            ->setTipoEnquadramento($tipoEnquadramento);
    }
    /**
     * Get Ano value
     * @return int
     */
    public function getAno()
    {
        return $this->Ano;
    }
    /**
     * Set Ano value
     * @param int $ano
     * @return \IFT_Art78\StructType\IFT_Art78PeriodoType
     */
    public function setAno($ano = null)
    {
        // validation for constraint: int
        if (!is_null($ano) && !(is_int($ano) || ctype_digit($ano))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ano, true), gettype($ano)), __LINE__);
        }
        $this->Ano = $ano;
        return $this;
    }
    /**
     * Get Mes value
     * @return int
     */
    public function getMes()
    {
        return $this->Mes;
    }
    /**
     * Set Mes value
     * @param int $mes
     * @return \IFT_Art78\StructType\IFT_Art78PeriodoType
     */
    public function setMes($mes = null)
    {
        // validation for constraint: int
        if (!is_null($mes) && !(is_int($mes) || ctype_digit($mes))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($mes, true), gettype($mes)), __LINE__);
        }
        $this->Mes = $mes;
        return $this;
    }
    /**
     * Get TipoEnquadramento value
     * @return string
     */
    public function getTipoEnquadramento()
    {
        return $this->TipoEnquadramento;
    }
    /**
     * Set TipoEnquadramento value
     * @uses \IFT_Art78\EnumType\IFT_Art78TipoEnquadramentoType::valueIsValid()
     * @uses \IFT_Art78\EnumType\IFT_Art78TipoEnquadramentoType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $tipoEnquadramento
     * @return \IFT_Art78\StructType\IFT_Art78PeriodoType
     */
    public function setTipoEnquadramento($tipoEnquadramento = null)
    {
        // validation for constraint: enumeration
        if (!\IFT_Art78\EnumType\IFT_Art78TipoEnquadramentoType::valueIsValid($tipoEnquadramento)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \IFT_Art78\EnumType\IFT_Art78TipoEnquadramentoType', is_array($tipoEnquadramento) ? implode(', ', $tipoEnquadramento) : var_export($tipoEnquadramento, true), implode(', ', \IFT_Art78\EnumType\IFT_Art78TipoEnquadramentoType::getValidValues())), __LINE__);
        }
        $this->TipoEnquadramento = $tipoEnquadramento;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \IFT_Art78\StructType\IFT_Art78PeriodoType
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
