<?php

namespace IFT_Art78\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PedidoType StructType
 * @package IFT_Art78
 * @subpackage Structs
 */
class IFT_Art78PedidoType extends AbstractStructBase
{
    /**
     * The Pedido
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: false
     * @var \IFT_Art78\StructType\IFT_Art78Pedido
     */
    public $Pedido;
    /**
     * The DetalhePedido
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: false
     * @var \IFT_Art78\StructType\IFT_Art78DetalhePedidoType
     */
    public $DetalhePedido;
    /**
     * The Faturas
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \IFT_Art78\StructType\IFT_Art78FaturasType
     */
    public $Faturas;
    /**
     * Constructor method for PedidoType
     * @uses IFT_Art78PedidoType::setPedido()
     * @uses IFT_Art78PedidoType::setDetalhePedido()
     * @uses IFT_Art78PedidoType::setFaturas()
     * @param \IFT_Art78\StructType\IFT_Art78Pedido $pedido
     * @param \IFT_Art78\StructType\IFT_Art78DetalhePedidoType $detalhePedido
     * @param \IFT_Art78\StructType\IFT_Art78FaturasType $faturas
     */
    public function __construct(\IFT_Art78\StructType\IFT_Art78Pedido $pedido = null, \IFT_Art78\StructType\IFT_Art78DetalhePedidoType $detalhePedido = null, \IFT_Art78\StructType\IFT_Art78FaturasType $faturas = null)
    {
        $this
            ->setPedido($pedido)
            ->setDetalhePedido($detalhePedido)
            ->setFaturas($faturas);
    }
    /**
     * Get Pedido value
     * @return \IFT_Art78\StructType\IFT_Art78Pedido
     */
    public function getPedido()
    {
        return $this->Pedido;
    }
    /**
     * Set Pedido value
     * @param \IFT_Art78\StructType\IFT_Art78Pedido $pedido
     * @return \IFT_Art78\StructType\IFT_Art78PedidoType
     */
    public function setPedido(\IFT_Art78\StructType\IFT_Art78Pedido $pedido = null)
    {
        $this->Pedido = $pedido;
        return $this;
    }
    /**
     * Get DetalhePedido value
     * @return \IFT_Art78\StructType\IFT_Art78DetalhePedidoType
     */
    public function getDetalhePedido()
    {
        return $this->DetalhePedido;
    }
    /**
     * Set DetalhePedido value
     * @param \IFT_Art78\StructType\IFT_Art78DetalhePedidoType $detalhePedido
     * @return \IFT_Art78\StructType\IFT_Art78PedidoType
     */
    public function setDetalhePedido(\IFT_Art78\StructType\IFT_Art78DetalhePedidoType $detalhePedido = null)
    {
        $this->DetalhePedido = $detalhePedido;
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
     * @return \IFT_Art78\StructType\IFT_Art78PedidoType
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
     * @return \IFT_Art78\StructType\IFT_Art78PedidoType
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
