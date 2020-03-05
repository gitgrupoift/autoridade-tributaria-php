<?php

namespace IFT_Art78\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SubmeterPedidoCobrancaDuvidosaResponseType StructType
 * @package IFT_Art78
 * @subpackage Structs
 */
class IFT_Art78SubmeterPedidoCobrancaDuvidosaResponseType extends AbstractStructBase
{
    /**
     * The NumPedido
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $NumPedido;
    /**
     * The ResultadoProcessamento
     * @var \IFT_Art78\StructType\IFT_Art78EstadoExecucaoType
     */
    public $ResultadoProcessamento;
    /**
     * Constructor method for SubmeterPedidoCobrancaDuvidosaResponseType
     * @uses IFT_Art78SubmeterPedidoCobrancaDuvidosaResponseType::setNumPedido()
     * @uses IFT_Art78SubmeterPedidoCobrancaDuvidosaResponseType::setResultadoProcessamento()
     * @param int $numPedido
     * @param \IFT_Art78\StructType\IFT_Art78EstadoExecucaoType $resultadoProcessamento
     */
    public function __construct($numPedido = null, \IFT_Art78\StructType\IFT_Art78EstadoExecucaoType $resultadoProcessamento = null)
    {
        $this
            ->setNumPedido($numPedido)
            ->setResultadoProcessamento($resultadoProcessamento);
    }
    /**
     * Get NumPedido value
     * @return int|null
     */
    public function getNumPedido()
    {
        return $this->NumPedido;
    }
    /**
     * Set NumPedido value
     * @param int $numPedido
     * @return \IFT_Art78\StructType\IFT_Art78SubmeterPedidoCobrancaDuvidosaResponseType
     */
    public function setNumPedido($numPedido = null)
    {
        // validation for constraint: int
        if (!is_null($numPedido) && !(is_int($numPedido) || ctype_digit($numPedido))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numPedido, true), gettype($numPedido)), __LINE__);
        }
        $this->NumPedido = $numPedido;
        return $this;
    }
    /**
     * Get ResultadoProcessamento value
     * @return \IFT_Art78\StructType\IFT_Art78EstadoExecucaoType|null
     */
    public function getResultadoProcessamento()
    {
        return $this->ResultadoProcessamento;
    }
    /**
     * Set ResultadoProcessamento value
     * @param \IFT_Art78\StructType\IFT_Art78EstadoExecucaoType $resultadoProcessamento
     * @return \IFT_Art78\StructType\IFT_Art78SubmeterPedidoCobrancaDuvidosaResponseType
     */
    public function setResultadoProcessamento(\IFT_Art78\StructType\IFT_Art78EstadoExecucaoType $resultadoProcessamento = null)
    {
        $this->ResultadoProcessamento = $resultadoProcessamento;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \IFT_Art78\StructType\IFT_Art78SubmeterPedidoCobrancaDuvidosaResponseType
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
