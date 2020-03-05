<?php

namespace IFT_IES\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dadosPagamento StructType
 * @package IFT_IES
 * @subpackage Structs
 */
class IFT_IESDadosPagamento extends AbstractStructBase
{
    /**
     * The entidade
     * Meta information extracted from the WSDL
     * - base: xsd:long
     * - maxOccurs: 1
     * - minOccurs: 1
     * - totalDigits: 5
     * @var int
     */
    public $entidade;
    /**
     * The referencia
     * Meta information extracted from the WSDL
     * - base: xsd:long
     * - maxOccurs: 1
     * - minOccurs: 1
     * - totalDigits: 9
     * @var int
     */
    public $referencia;
    /**
     * The importancia
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $importancia;
    /**
     * Constructor method for dadosPagamento
     * @uses IFT_IESDadosPagamento::setEntidade()
     * @uses IFT_IESDadosPagamento::setReferencia()
     * @uses IFT_IESDadosPagamento::setImportancia()
     * @param int $entidade
     * @param int $referencia
     * @param int $importancia
     */
    public function __construct($entidade = null, $referencia = null, $importancia = null)
    {
        $this
            ->setEntidade($entidade)
            ->setReferencia($referencia)
            ->setImportancia($importancia);
    }
    /**
     * Get entidade value
     * @return int
     */
    public function getEntidade()
    {
        return $this->entidade;
    }
    /**
     * Set entidade value
     * @param int $entidade
     * @return \IFT_IES\StructType\IFT_IESDadosPagamento
     */
    public function setEntidade($entidade = null)
    {
        // validation for constraint: int
        if (!is_null($entidade) && !(is_int($entidade) || ctype_digit($entidade))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($entidade, true), gettype($entidade)), __LINE__);
        }
        // validation for constraint: totalDigits(5)
        if (!is_null($entidade) && mb_strlen(preg_replace('/(\D)/', '', $entidade)) > 5) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 5 digits, "%d" given', var_export($entidade, true), mb_strlen(preg_replace('/(\D)/', '', $entidade))), __LINE__);
        }
        $this->entidade = $entidade;
        return $this;
    }
    /**
     * Get referencia value
     * @return int
     */
    public function getReferencia()
    {
        return $this->referencia;
    }
    /**
     * Set referencia value
     * @param int $referencia
     * @return \IFT_IES\StructType\IFT_IESDadosPagamento
     */
    public function setReferencia($referencia = null)
    {
        // validation for constraint: int
        if (!is_null($referencia) && !(is_int($referencia) || ctype_digit($referencia))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($referencia, true), gettype($referencia)), __LINE__);
        }
        // validation for constraint: totalDigits(9)
        if (!is_null($referencia) && mb_strlen(preg_replace('/(\D)/', '', $referencia)) > 9) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 9 digits, "%d" given', var_export($referencia, true), mb_strlen(preg_replace('/(\D)/', '', $referencia))), __LINE__);
        }
        $this->referencia = $referencia;
        return $this;
    }
    /**
     * Get importancia value
     * @return int
     */
    public function getImportancia()
    {
        return $this->importancia;
    }
    /**
     * Set importancia value
     * @param int $importancia
     * @return \IFT_IES\StructType\IFT_IESDadosPagamento
     */
    public function setImportancia($importancia = null)
    {
        // validation for constraint: int
        if (!is_null($importancia) && !(is_int($importancia) || ctype_digit($importancia))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($importancia, true), gettype($importancia)), __LINE__);
        }
        $this->importancia = $importancia;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \IFT_IES\StructType\IFT_IESDadosPagamento
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
