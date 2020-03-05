<?php

namespace IFT_Art78\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PesquisarPedidoCobrancaDuvidosaRequestType StructType
 * @package IFT_Art78
 * @subpackage Structs
 */
class IFT_Art78PesquisarPedidoCobrancaDuvidosaRequestType extends AbstractStructBase
{
    /**
     * The NumeroPedido
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: false
     * @var int
     */
    public $NumeroPedido;
    /**
     * Constructor method for PesquisarPedidoCobrancaDuvidosaRequestType
     * @uses IFT_Art78PesquisarPedidoCobrancaDuvidosaRequestType::setNumeroPedido()
     * @param int $numeroPedido
     */
    public function __construct($numeroPedido = null)
    {
        $this
            ->setNumeroPedido($numeroPedido);
    }
    /**
     * Get NumeroPedido value
     * @return int
     */
    public function getNumeroPedido()
    {
        return $this->NumeroPedido;
    }
    /**
     * Set NumeroPedido value
     * @param int $numeroPedido
     * @return \IFT_Art78\StructType\IFT_Art78PesquisarPedidoCobrancaDuvidosaRequestType
     */
    public function setNumeroPedido($numeroPedido = null)
    {
        // validation for constraint: int
        if (!is_null($numeroPedido) && !(is_int($numeroPedido) || ctype_digit($numeroPedido))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numeroPedido, true), gettype($numeroPedido)), __LINE__);
        }
        $this->NumeroPedido = $numeroPedido;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \IFT_Art78\StructType\IFT_Art78PesquisarPedidoCobrancaDuvidosaRequestType
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
