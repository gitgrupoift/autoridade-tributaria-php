<?php

namespace IFT_Art78\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Pedido StructType
 * @package IFT_Art78
 * @subpackage Structs
 */
class IFT_Art78Pedido extends AbstractStructBase
{
    /**
     * The NumeroFiscalCredor
     * Meta information extracted from the WSDL
     * - base: xs:integer
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: false
     * @var int
     */
    public $NumeroFiscalCredor;
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
     * The DataSubmissao
     * Meta information extracted from the WSDL
     * - base: xs:date
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: false
     * @var string
     */
    public $DataSubmissao;
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
     * The NumeroFiscalDevedor
     * Meta information extracted from the WSDL
     * - base: xs:integer
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: false
     * @var int
     */
    public $NumeroFiscalDevedor;
    /**
     * The EstadoPedido
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: false
     * @var string
     */
    public $EstadoPedido;
    /**
     * The DataEstado
     * Meta information extracted from the WSDL
     * - base: xs:date
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: false
     * @var string
     */
    public $DataEstado;
    /**
     * Constructor method for Pedido
     * @uses IFT_Art78Pedido::setNumeroFiscalCredor()
     * @uses IFT_Art78Pedido::setNumeroPedido()
     * @uses IFT_Art78Pedido::setDataSubmissao()
     * @uses IFT_Art78Pedido::setNumeroFiscalROC()
     * @uses IFT_Art78Pedido::setNumeroFiscalDevedor()
     * @uses IFT_Art78Pedido::setEstadoPedido()
     * @uses IFT_Art78Pedido::setDataEstado()
     * @param int $numeroFiscalCredor
     * @param int $numeroPedido
     * @param string $dataSubmissao
     * @param int $numeroFiscalROC
     * @param int $numeroFiscalDevedor
     * @param string $estadoPedido
     * @param string $dataEstado
     */
    public function __construct($numeroFiscalCredor = null, $numeroPedido = null, $dataSubmissao = null, $numeroFiscalROC = null, $numeroFiscalDevedor = null, $estadoPedido = null, $dataEstado = null)
    {
        $this
            ->setNumeroFiscalCredor($numeroFiscalCredor)
            ->setNumeroPedido($numeroPedido)
            ->setDataSubmissao($dataSubmissao)
            ->setNumeroFiscalROC($numeroFiscalROC)
            ->setNumeroFiscalDevedor($numeroFiscalDevedor)
            ->setEstadoPedido($estadoPedido)
            ->setDataEstado($dataEstado);
    }
    /**
     * Get NumeroFiscalCredor value
     * @return int
     */
    public function getNumeroFiscalCredor()
    {
        return $this->NumeroFiscalCredor;
    }
    /**
     * Set NumeroFiscalCredor value
     * @param int $numeroFiscalCredor
     * @return \IFT_Art78\StructType\IFT_Art78Pedido
     */
    public function setNumeroFiscalCredor($numeroFiscalCredor = null)
    {
        // validation for constraint: int
        if (!is_null($numeroFiscalCredor) && !(is_int($numeroFiscalCredor) || ctype_digit($numeroFiscalCredor))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numeroFiscalCredor, true), gettype($numeroFiscalCredor)), __LINE__);
        }
        $this->NumeroFiscalCredor = $numeroFiscalCredor;
        return $this;
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
     * @return \IFT_Art78\StructType\IFT_Art78Pedido
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
     * Get DataSubmissao value
     * @return string
     */
    public function getDataSubmissao()
    {
        return $this->DataSubmissao;
    }
    /**
     * Set DataSubmissao value
     * @param string $dataSubmissao
     * @return \IFT_Art78\StructType\IFT_Art78Pedido
     */
    public function setDataSubmissao($dataSubmissao = null)
    {
        // validation for constraint: string
        if (!is_null($dataSubmissao) && !is_string($dataSubmissao)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataSubmissao, true), gettype($dataSubmissao)), __LINE__);
        }
        $this->DataSubmissao = $dataSubmissao;
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
     * @return \IFT_Art78\StructType\IFT_Art78Pedido
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
     * Get NumeroFiscalDevedor value
     * @return int
     */
    public function getNumeroFiscalDevedor()
    {
        return $this->NumeroFiscalDevedor;
    }
    /**
     * Set NumeroFiscalDevedor value
     * @param int $numeroFiscalDevedor
     * @return \IFT_Art78\StructType\IFT_Art78Pedido
     */
    public function setNumeroFiscalDevedor($numeroFiscalDevedor = null)
    {
        // validation for constraint: int
        if (!is_null($numeroFiscalDevedor) && !(is_int($numeroFiscalDevedor) || ctype_digit($numeroFiscalDevedor))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numeroFiscalDevedor, true), gettype($numeroFiscalDevedor)), __LINE__);
        }
        $this->NumeroFiscalDevedor = $numeroFiscalDevedor;
        return $this;
    }
    /**
     * Get EstadoPedido value
     * @return string
     */
    public function getEstadoPedido()
    {
        return $this->EstadoPedido;
    }
    /**
     * Set EstadoPedido value
     * @param string $estadoPedido
     * @return \IFT_Art78\StructType\IFT_Art78Pedido
     */
    public function setEstadoPedido($estadoPedido = null)
    {
        // validation for constraint: string
        if (!is_null($estadoPedido) && !is_string($estadoPedido)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($estadoPedido, true), gettype($estadoPedido)), __LINE__);
        }
        $this->EstadoPedido = $estadoPedido;
        return $this;
    }
    /**
     * Get DataEstado value
     * @return string
     */
    public function getDataEstado()
    {
        return $this->DataEstado;
    }
    /**
     * Set DataEstado value
     * @param string $dataEstado
     * @return \IFT_Art78\StructType\IFT_Art78Pedido
     */
    public function setDataEstado($dataEstado = null)
    {
        // validation for constraint: string
        if (!is_null($dataEstado) && !is_string($dataEstado)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataEstado, true), gettype($dataEstado)), __LINE__);
        }
        $this->DataEstado = $dataEstado;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \IFT_Art78\StructType\IFT_Art78Pedido
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
