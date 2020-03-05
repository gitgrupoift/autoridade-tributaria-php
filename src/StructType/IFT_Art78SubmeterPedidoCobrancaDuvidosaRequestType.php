<?php

namespace IFT_Art78\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SubmeterPedidoCobrancaDuvidosaRequestType StructType
 * @package IFT_Art78
 * @subpackage Structs
 */
class IFT_Art78SubmeterPedidoCobrancaDuvidosaRequestType extends AbstractStructBase
{
    /**
     * The DadosPedido
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: false
     * @var \IFT_Art78\StructType\IFT_Art78DadosPedidoType
     */
    public $DadosPedido;
    /**
     * The Faturas
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: false
     * @var \IFT_Art78\StructType\IFT_Art78FaturasType
     */
    public $Faturas;
    /**
     * Constructor method for SubmeterPedidoCobrancaDuvidosaRequestType
     * @uses IFT_Art78SubmeterPedidoCobrancaDuvidosaRequestType::setDadosPedido()
     * @uses IFT_Art78SubmeterPedidoCobrancaDuvidosaRequestType::setFaturas()
     * @param \IFT_Art78\StructType\IFT_Art78DadosPedidoType $dadosPedido
     * @param \IFT_Art78\StructType\IFT_Art78FaturasType $faturas
     */
    public function __construct(\IFT_Art78\StructType\IFT_Art78DadosPedidoType $dadosPedido = null, \IFT_Art78\StructType\IFT_Art78FaturasType $faturas = null)
    {
        $this
            ->setDadosPedido($dadosPedido)
            ->setFaturas($faturas);
    }
    /**
     * Get DadosPedido value
     * @return \IFT_Art78\StructType\IFT_Art78DadosPedidoType
     */
    public function getDadosPedido()
    {
        return $this->DadosPedido;
    }
    /**
     * Set DadosPedido value
     * @param \IFT_Art78\StructType\IFT_Art78DadosPedidoType $dadosPedido
     * @return \IFT_Art78\StructType\IFT_Art78SubmeterPedidoCobrancaDuvidosaRequestType
     */
    public function setDadosPedido(\IFT_Art78\StructType\IFT_Art78DadosPedidoType $dadosPedido = null)
    {
        $this->DadosPedido = $dadosPedido;
        return $this;
    }
    /**
     * Get Faturas value
     * @return \IFT_Art78\StructType\IFT_Art78FaturasType
     */
    public function getFaturas()
    {
        return $this->Faturas;
    }
    /**
     * Set Faturas value
     * @param \IFT_Art78\StructType\IFT_Art78FaturasType $faturas
     * @return \IFT_Art78\StructType\IFT_Art78SubmeterPedidoCobrancaDuvidosaRequestType
     */
    public function setFaturas(\IFT_Art78\StructType\IFT_Art78FaturasType $faturas = null)
    {
        $this->Faturas = $faturas;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \IFT_Art78\StructType\IFT_Art78SubmeterPedidoCobrancaDuvidosaRequestType
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
