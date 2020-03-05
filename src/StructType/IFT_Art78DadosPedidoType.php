<?php

namespace IFT_Art78\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DadosPedidoType StructType
 * @package IFT_Art78
 * @subpackage Structs
 */
class IFT_Art78DadosPedidoType extends AbstractStructBase
{
    /**
     * The NumeroFiscalAdquirente
     * Meta information extracted from the WSDL
     * - base: xs:integer
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: false
     * @var int
     */
    public $NumeroFiscalAdquirente;
    /**
     * The NumeroFiscalEmitenteFat
     * Meta information extracted from the WSDL
     * - base: xs:integer
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: false
     * @var int
     */
    public $NumeroFiscalEmitenteFat;
    /**
     * The NumeroFiscalROC
     * Meta information extracted from the WSDL
     * - base: xs:integer
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: false
     * @var int
     */
    public $NumeroFiscalROC;
    /**
     * Constructor method for DadosPedidoType
     * @uses IFT_Art78DadosPedidoType::setNumeroFiscalAdquirente()
     * @uses IFT_Art78DadosPedidoType::setNumeroFiscalEmitenteFat()
     * @uses IFT_Art78DadosPedidoType::setNumeroFiscalROC()
     * @param int $numeroFiscalAdquirente
     * @param int $numeroFiscalEmitenteFat
     * @param int $numeroFiscalROC
     */
    public function __construct($numeroFiscalAdquirente = null, $numeroFiscalEmitenteFat = null, $numeroFiscalROC = null)
    {
        $this
            ->setNumeroFiscalAdquirente($numeroFiscalAdquirente)
            ->setNumeroFiscalEmitenteFat($numeroFiscalEmitenteFat)
            ->setNumeroFiscalROC($numeroFiscalROC);
    }
    /**
     * Get NumeroFiscalAdquirente value
     * @return int
     */
    public function getNumeroFiscalAdquirente()
    {
        return $this->NumeroFiscalAdquirente;
    }
    /**
     * Set NumeroFiscalAdquirente value
     * @param int $numeroFiscalAdquirente
     * @return \IFT_Art78\StructType\IFT_Art78DadosPedidoType
     */
    public function setNumeroFiscalAdquirente($numeroFiscalAdquirente = null)
    {
        // validation for constraint: int
        if (!is_null($numeroFiscalAdquirente) && !(is_int($numeroFiscalAdquirente) || ctype_digit($numeroFiscalAdquirente))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numeroFiscalAdquirente, true), gettype($numeroFiscalAdquirente)), __LINE__);
        }
        $this->NumeroFiscalAdquirente = $numeroFiscalAdquirente;
        return $this;
    }
    /**
     * Get NumeroFiscalEmitenteFat value
     * @return int
     */
    public function getNumeroFiscalEmitenteFat()
    {
        return $this->NumeroFiscalEmitenteFat;
    }
    /**
     * Set NumeroFiscalEmitenteFat value
     * @param int $numeroFiscalEmitenteFat
     * @return \IFT_Art78\StructType\IFT_Art78DadosPedidoType
     */
    public function setNumeroFiscalEmitenteFat($numeroFiscalEmitenteFat = null)
    {
        // validation for constraint: int
        if (!is_null($numeroFiscalEmitenteFat) && !(is_int($numeroFiscalEmitenteFat) || ctype_digit($numeroFiscalEmitenteFat))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numeroFiscalEmitenteFat, true), gettype($numeroFiscalEmitenteFat)), __LINE__);
        }
        $this->NumeroFiscalEmitenteFat = $numeroFiscalEmitenteFat;
        return $this;
    }
    /**
     * Get NumeroFiscalROC value
     * @return int
     */
    public function getNumeroFiscalROC()
    {
        return $this->NumeroFiscalROC;
    }
    /**
     * Set NumeroFiscalROC value
     * @param int $numeroFiscalROC
     * @return \IFT_Art78\StructType\IFT_Art78DadosPedidoType
     */
    public function setNumeroFiscalROC($numeroFiscalROC = null)
    {
        // validation for constraint: int
        if (!is_null($numeroFiscalROC) && !(is_int($numeroFiscalROC) || ctype_digit($numeroFiscalROC))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numeroFiscalROC, true), gettype($numeroFiscalROC)), __LINE__);
        }
        $this->NumeroFiscalROC = $numeroFiscalROC;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \IFT_Art78\StructType\IFT_Art78DadosPedidoType
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
