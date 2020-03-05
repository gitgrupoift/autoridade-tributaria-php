<?php

namespace IFT_IES\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for informacaoErro StructType
 * @package IFT_IES
 * @subpackage Structs
 */
class IFT_IESInformacaoErro extends AbstractStructBase
{
    /**
     * The mensagem
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $mensagem;
    /**
     * The anexo
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 10
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $anexo;
    /**
     * The quadro
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 40
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $quadro;
    /**
     * The codigo
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 20
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $codigo;
    /**
     * Constructor method for informacaoErro
     * @uses IFT_IESInformacaoErro::setMensagem()
     * @uses IFT_IESInformacaoErro::setAnexo()
     * @uses IFT_IESInformacaoErro::setQuadro()
     * @uses IFT_IESInformacaoErro::setCodigo()
     * @param string $mensagem
     * @param string $anexo
     * @param string $quadro
     * @param string $codigo
     */
    public function __construct($mensagem = null, $anexo = null, $quadro = null, $codigo = null)
    {
        $this
            ->setMensagem($mensagem)
            ->setAnexo($anexo)
            ->setQuadro($quadro)
            ->setCodigo($codigo);
    }
    /**
     * Get mensagem value
     * @return string
     */
    public function getMensagem()
    {
        return $this->mensagem;
    }
    /**
     * Set mensagem value
     * @param string $mensagem
     * @return \IFT_IES\StructType\IFT_IESInformacaoErro
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
     * Get anexo value
     * @return string|null
     */
    public function getAnexo()
    {
        return $this->anexo;
    }
    /**
     * Set anexo value
     * @param string $anexo
     * @return \IFT_IES\StructType\IFT_IESInformacaoErro
     */
    public function setAnexo($anexo = null)
    {
        // validation for constraint: string
        if (!is_null($anexo) && !is_string($anexo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($anexo, true), gettype($anexo)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($anexo) && mb_strlen($anexo) > 10) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen($anexo)), __LINE__);
        }
        $this->anexo = $anexo;
        return $this;
    }
    /**
     * Get quadro value
     * @return string|null
     */
    public function getQuadro()
    {
        return $this->quadro;
    }
    /**
     * Set quadro value
     * @param string $quadro
     * @return \IFT_IES\StructType\IFT_IESInformacaoErro
     */
    public function setQuadro($quadro = null)
    {
        // validation for constraint: string
        if (!is_null($quadro) && !is_string($quadro)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($quadro, true), gettype($quadro)), __LINE__);
        }
        // validation for constraint: maxLength(40)
        if (!is_null($quadro) && mb_strlen($quadro) > 40) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 40', mb_strlen($quadro)), __LINE__);
        }
        $this->quadro = $quadro;
        return $this;
    }
    /**
     * Get codigo value
     * @return string|null
     */
    public function getCodigo()
    {
        return $this->codigo;
    }
    /**
     * Set codigo value
     * @param string $codigo
     * @return \IFT_IES\StructType\IFT_IESInformacaoErro
     */
    public function setCodigo($codigo = null)
    {
        // validation for constraint: string
        if (!is_null($codigo) && !is_string($codigo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codigo, true), gettype($codigo)), __LINE__);
        }
        // validation for constraint: maxLength(20)
        if (!is_null($codigo) && mb_strlen($codigo) > 20) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 20', mb_strlen($codigo)), __LINE__);
        }
        $this->codigo = $codigo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \IFT_IES\StructType\IFT_IESInformacaoErro
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
