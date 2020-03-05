<?php

namespace IFT_IES\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for submeterDeclaracaoIESResponse StructType
 * @package IFT_IES
 * @subpackage Structs
 */
class IFT_IESSubmeterDeclaracaoIESResponse extends AbstractStructBase
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
     * - base: xsd:string
     * - maxLength: 256
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $mensagem;
    /**
     * The dadosSubmissao
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \IFT_IES\StructType\IFT_IESInformacaoSubmissao
     */
    public $dadosSubmissao;
    /**
     * The erros
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \IFT_IES\StructType\IFT_IESInformacaoErros
     */
    public $erros;
    /**
     * Constructor method for submeterDeclaracaoIESResponse
     * @uses IFT_IESSubmeterDeclaracaoIESResponse::setCodigo()
     * @uses IFT_IESSubmeterDeclaracaoIESResponse::setMensagem()
     * @uses IFT_IESSubmeterDeclaracaoIESResponse::setDadosSubmissao()
     * @uses IFT_IESSubmeterDeclaracaoIESResponse::setErros()
     * @param int $codigo
     * @param string $mensagem
     * @param \IFT_IES\StructType\IFT_IESInformacaoSubmissao $dadosSubmissao
     * @param \IFT_IES\StructType\IFT_IESInformacaoErros $erros
     */
    public function __construct($codigo = null, $mensagem = null, \IFT_IES\StructType\IFT_IESInformacaoSubmissao $dadosSubmissao = null, \IFT_IES\StructType\IFT_IESInformacaoErros $erros = null)
    {
        $this
            ->setCodigo($codigo)
            ->setMensagem($mensagem)
            ->setDadosSubmissao($dadosSubmissao)
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
     * @return \IFT_IES\StructType\IFT_IESSubmeterDeclaracaoIESResponse
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
     * @return \IFT_IES\StructType\IFT_IESSubmeterDeclaracaoIESResponse
     */
    public function setMensagem($mensagem = null)
    {
        // validation for constraint: string
        if (!is_null($mensagem) && !is_string($mensagem)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mensagem, true), gettype($mensagem)), __LINE__);
        }
        // validation for constraint: maxLength(256)
        if (!is_null($mensagem) && mb_strlen($mensagem) > 256) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 256', mb_strlen($mensagem)), __LINE__);
        }
        $this->mensagem = $mensagem;
        return $this;
    }
    /**
     * Get dadosSubmissao value
     * @return \IFT_IES\StructType\IFT_IESInformacaoSubmissao|null
     */
    public function getDadosSubmissao()
    {
        return $this->dadosSubmissao;
    }
    /**
     * Set dadosSubmissao value
     * @param \IFT_IES\StructType\IFT_IESInformacaoSubmissao $dadosSubmissao
     * @return \IFT_IES\StructType\IFT_IESSubmeterDeclaracaoIESResponse
     */
    public function setDadosSubmissao(\IFT_IES\StructType\IFT_IESInformacaoSubmissao $dadosSubmissao = null)
    {
        $this->dadosSubmissao = $dadosSubmissao;
        return $this;
    }
    /**
     * Get erros value
     * @return \IFT_IES\StructType\IFT_IESInformacaoErros|null
     */
    public function getErros()
    {
        return $this->erros;
    }
    /**
     * Set erros value
     * @param \IFT_IES\StructType\IFT_IESInformacaoErros $erros
     * @return \IFT_IES\StructType\IFT_IESSubmeterDeclaracaoIESResponse
     */
    public function setErros(\IFT_IES\StructType\IFT_IESInformacaoErros $erros = null)
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
     * @return \IFT_IES\StructType\IFT_IESSubmeterDeclaracaoIESResponse
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
