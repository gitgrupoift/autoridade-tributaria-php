<?php

namespace IFT_Art78\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PesquisarPedidoCobrancaDuvidosaResponseType StructType
 * @package IFT_Art78
 * @subpackage Structs
 */
class IFT_Art78PesquisarPedidoCobrancaDuvidosaResponseType extends AbstractStructBase
{
    /**
     * The InformacaoPedido
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \IFT_Art78\StructType\IFT_Art78PedidoType
     */
    public $InformacaoPedido;
    /**
     * The ResultadoProcessamento
     * @var \IFT_Art78\StructType\IFT_Art78EstadoExecucaoPesquisaType
     */
    public $ResultadoProcessamento;
    /**
     * Constructor method for PesquisarPedidoCobrancaDuvidosaResponseType
     * @uses IFT_Art78PesquisarPedidoCobrancaDuvidosaResponseType::setInformacaoPedido()
     * @uses IFT_Art78PesquisarPedidoCobrancaDuvidosaResponseType::setResultadoProcessamento()
     * @param \IFT_Art78\StructType\IFT_Art78PedidoType $informacaoPedido
     * @param \IFT_Art78\StructType\IFT_Art78EstadoExecucaoPesquisaType $resultadoProcessamento
     */
    public function __construct(\IFT_Art78\StructType\IFT_Art78PedidoType $informacaoPedido = null, \IFT_Art78\StructType\IFT_Art78EstadoExecucaoPesquisaType $resultadoProcessamento = null)
    {
        $this
            ->setInformacaoPedido($informacaoPedido)
            ->setResultadoProcessamento($resultadoProcessamento);
    }
    /**
     * Get InformacaoPedido value
     * @return \IFT_Art78\StructType\IFT_Art78PedidoType|null
     */
    public function getInformacaoPedido()
    {
        return $this->InformacaoPedido;
    }
    /**
     * Set InformacaoPedido value
     * @param \IFT_Art78\StructType\IFT_Art78PedidoType $informacaoPedido
     * @return \IFT_Art78\StructType\IFT_Art78PesquisarPedidoCobrancaDuvidosaResponseType
     */
    public function setInformacaoPedido(\IFT_Art78\StructType\IFT_Art78PedidoType $informacaoPedido = null)
    {
        $this->InformacaoPedido = $informacaoPedido;
        return $this;
    }
    /**
     * Get ResultadoProcessamento value
     * @return \IFT_Art78\StructType\IFT_Art78EstadoExecucaoPesquisaType|null
     */
    public function getResultadoProcessamento()
    {
        return $this->ResultadoProcessamento;
    }
    /**
     * Set ResultadoProcessamento value
     * @param \IFT_Art78\StructType\IFT_Art78EstadoExecucaoPesquisaType $resultadoProcessamento
     * @return \IFT_Art78\StructType\IFT_Art78PesquisarPedidoCobrancaDuvidosaResponseType
     */
    public function setResultadoProcessamento(\IFT_Art78\StructType\IFT_Art78EstadoExecucaoPesquisaType $resultadoProcessamento = null)
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
     * @return \IFT_Art78\StructType\IFT_Art78PesquisarPedidoCobrancaDuvidosaResponseType
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
