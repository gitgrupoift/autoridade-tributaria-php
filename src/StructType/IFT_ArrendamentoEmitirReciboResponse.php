<?php

namespace IFT_Arrendamento\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for emitirReciboResponse StructType
 * @package IFT_Arrendamento
 * @subpackage Structs
 */
class IFT_ArrendamentoEmitirReciboResponse extends AbstractStructBase
{
    /**
     * The codigo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $codigo;
    /**
     * The mensagem
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $mensagem;
    /**
     * The numeroRecibo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $numeroRecibo;
    /**
     * The erros
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \IFT_Arrendamento\StructType\IFT_ArrendamentoErros
     */
    public $erros;
    /**
     * Constructor method for emitirReciboResponse
     * @uses IFT_ArrendamentoEmitirReciboResponse::setCodigo()
     * @uses IFT_ArrendamentoEmitirReciboResponse::setMensagem()
     * @uses IFT_ArrendamentoEmitirReciboResponse::setNumeroRecibo()
     * @uses IFT_ArrendamentoEmitirReciboResponse::setErros()
     * @param int $codigo
     * @param string $mensagem
     * @param int $numeroRecibo
     * @param \IFT_Arrendamento\StructType\IFT_ArrendamentoErros $erros
     */
    public function __construct($codigo = null, $mensagem = null, $numeroRecibo = null, \IFT_Arrendamento\StructType\IFT_ArrendamentoErros $erros = null)
    {
        $this
            ->setCodigo($codigo)
            ->setMensagem($mensagem)
            ->setNumeroRecibo($numeroRecibo)
            ->setErros($erros);
    }
    /**
     * Get codigo value
     * @return int
     */
    public function getCodigo()
    {
        return $this->codigo;
    }
    /**
     * Set codigo value
     * @param int $codigo
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoEmitirReciboResponse
     */
    public function setCodigo($codigo = null)
    {
        // validation for constraint: int
        if (!is_null($codigo) && !(is_int($codigo) || ctype_digit($codigo))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($codigo, true), gettype($codigo)), __LINE__);
        }
        $this->codigo = $codigo;
        return $this;
    }
    /**
     * Get mensagem value
     * @return string|null
     */
    public function getMensagem()
    {
        return $this->mensagem;
    }
    /**
     * Set mensagem value
     * @param string $mensagem
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoEmitirReciboResponse
     */
    public function setMensagem($mensagem = null)
    {
        // validation for constraint: string
        if (!is_null($mensagem) && !is_string($mensagem)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mensagem, true), gettype($mensagem)), __LINE__);
        }
        $this->mensagem = $mensagem;
        return $this;
    }
    /**
     * Get numeroRecibo value
     * @return int|null
     */
    public function getNumeroRecibo()
    {
        return $this->numeroRecibo;
    }
    /**
     * Set numeroRecibo value
     * @param int $numeroRecibo
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoEmitirReciboResponse
     */
    public function setNumeroRecibo($numeroRecibo = null)
    {
        // validation for constraint: int
        if (!is_null($numeroRecibo) && !(is_int($numeroRecibo) || ctype_digit($numeroRecibo))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numeroRecibo, true), gettype($numeroRecibo)), __LINE__);
        }
        $this->numeroRecibo = $numeroRecibo;
        return $this;
    }
    /**
     * Get erros value
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoErros|null
     */
    public function getErros()
    {
        return $this->erros;
    }
    /**
     * Set erros value
     * @param \IFT_Arrendamento\StructType\IFT_ArrendamentoErros $erros
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoEmitirReciboResponse
     */
    public function setErros(\IFT_Arrendamento\StructType\IFT_ArrendamentoErros $erros = null)
    {
        $this->erros = $erros;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoEmitirReciboResponse
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
