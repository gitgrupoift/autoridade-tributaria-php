<?php

namespace IFT_IVA\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for informacaoErroOuAlerta StructType
 * @package IFT_IVA
 * @subpackage Structs
 */
class IFT_IVAInformacaoErroOuAlerta extends AbstractStructBase
{
    /**
     * The mensagem
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 256
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
     * - maxLength: 10
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $quadro;
    /**
     * The codigo
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 10
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $codigo;
    /**
     * Constructor method for informacaoErroOuAlerta
     * @uses IFT_IVAInformacaoErroOuAlerta::setMensagem()
     * @uses IFT_IVAInformacaoErroOuAlerta::setAnexo()
     * @uses IFT_IVAInformacaoErroOuAlerta::setQuadro()
     * @uses IFT_IVAInformacaoErroOuAlerta::setCodigo()
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
     * @return \IFT_IVA\StructType\IFT_IVAInformacaoErroOuAlerta
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
     * @return \IFT_IVA\StructType\IFT_IVAInformacaoErroOuAlerta
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
     * @return \IFT_IVA\StructType\IFT_IVAInformacaoErroOuAlerta
     */
    public function setQuadro($quadro = null)
    {
        // validation for constraint: string
        if (!is_null($quadro) && !is_string($quadro)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($quadro, true), gettype($quadro)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($quadro) && mb_strlen($quadro) > 10) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen($quadro)), __LINE__);
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
     * @return \IFT_IVA\StructType\IFT_IVAInformacaoErroOuAlerta
     */
    public function setCodigo($codigo = null)
    {
        // validation for constraint: string
        if (!is_null($codigo) && !is_string($codigo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codigo, true), gettype($codigo)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($codigo) && mb_strlen($codigo) > 10) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen($codigo)), __LINE__);
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
     * @return \IFT_IVA\StructType\IFT_IVAInformacaoErroOuAlerta
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
