<?php

namespace IFT_IVA\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for informacaoSubmissao StructType
 * @package IFT_IVA
 * @subpackage Structs
 */
class IFT_IVAInformacaoSubmissao extends AbstractStructBase
{
    /**
     * The data
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $data;
    /**
     * The ano
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $ano;
    /**
     * The periodo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $periodo;
    /**
     * The idDeclaracao
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $idDeclaracao;
    /**
     * The contribuinte
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \IFT_IVA\StructType\IFT_IVAContribuinte[]
     */
    public $contribuinte;
    /**
     * Constructor method for informacaoSubmissao
     * @uses IFT_IVAInformacaoSubmissao::setData()
     * @uses IFT_IVAInformacaoSubmissao::setAno()
     * @uses IFT_IVAInformacaoSubmissao::setPeriodo()
     * @uses IFT_IVAInformacaoSubmissao::setIdDeclaracao()
     * @uses IFT_IVAInformacaoSubmissao::setContribuinte()
     * @param string $data
     * @param int $ano
     * @param string $periodo
     * @param int $idDeclaracao
     * @param \IFT_IVA\StructType\IFT_IVAContribuinte[] $contribuinte
     */
    public function __construct($data = null, $ano = null, $periodo = null, $idDeclaracao = null, array $contribuinte = array())
    {
        $this
            ->setData($data)
            ->setAno($ano)
            ->setPeriodo($periodo)
            ->setIdDeclaracao($idDeclaracao)
            ->setContribuinte($contribuinte);
    }
    /**
     * Get data value
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }
    /**
     * Set data value
     * @param string $data
     * @return \IFT_IVA\StructType\IFT_IVAInformacaoSubmissao
     */
    public function setData($data = null)
    {
        // validation for constraint: string
        if (!is_null($data) && !is_string($data)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($data, true), gettype($data)), __LINE__);
        }
        $this->data = $data;
        return $this;
    }
    /**
     * Get ano value
     * @return int
     */
    public function getAno()
    {
        return $this->ano;
    }
    /**
     * Set ano value
     * @param int $ano
     * @return \IFT_IVA\StructType\IFT_IVAInformacaoSubmissao
     */
    public function setAno($ano = null)
    {
        // validation for constraint: int
        if (!is_null($ano) && !(is_int($ano) || ctype_digit($ano))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ano, true), gettype($ano)), __LINE__);
        }
        $this->ano = $ano;
        return $this;
    }
    /**
     * Get periodo value
     * @return string
     */
    public function getPeriodo()
    {
        return $this->periodo;
    }
    /**
     * Set periodo value
     * @param string $periodo
     * @return \IFT_IVA\StructType\IFT_IVAInformacaoSubmissao
     */
    public function setPeriodo($periodo = null)
    {
        // validation for constraint: string
        if (!is_null($periodo) && !is_string($periodo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($periodo, true), gettype($periodo)), __LINE__);
        }
        $this->periodo = $periodo;
        return $this;
    }
    /**
     * Get idDeclaracao value
     * @return int
     */
    public function getIdDeclaracao()
    {
        return $this->idDeclaracao;
    }
    /**
     * Set idDeclaracao value
     * @param int $idDeclaracao
     * @return \IFT_IVA\StructType\IFT_IVAInformacaoSubmissao
     */
    public function setIdDeclaracao($idDeclaracao = null)
    {
        // validation for constraint: int
        if (!is_null($idDeclaracao) && !(is_int($idDeclaracao) || ctype_digit($idDeclaracao))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idDeclaracao, true), gettype($idDeclaracao)), __LINE__);
        }
        $this->idDeclaracao = $idDeclaracao;
        return $this;
    }
    /**
     * Get contribuinte value
     * @return \IFT_IVA\StructType\IFT_IVAContribuinte[]
     */
    public function getContribuinte()
    {
        return $this->contribuinte;
    }
    /**
     * This method is responsible for validating the values passed to the setContribuinte method
     * This method is willingly generated in order to preserve the one-line inline validation within the setContribuinte method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateContribuinteForArrayConstraintsFromSetContribuinte(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $informacaoSubmissaoContribuinteItem) {
            // validation for constraint: itemType
            if (!$informacaoSubmissaoContribuinteItem instanceof \IFT_IVA\StructType\IFT_IVAContribuinte) {
                $invalidValues[] = is_object($informacaoSubmissaoContribuinteItem) ? get_class($informacaoSubmissaoContribuinteItem) : sprintf('%s(%s)', gettype($informacaoSubmissaoContribuinteItem), var_export($informacaoSubmissaoContribuinteItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The contribuinte property can only contain items of type \IFT_IVA\StructType\IFT_IVAContribuinte, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set contribuinte value
     * @throws \InvalidArgumentException
     * @param \IFT_IVA\StructType\IFT_IVAContribuinte[] $contribuinte
     * @return \IFT_IVA\StructType\IFT_IVAInformacaoSubmissao
     */
    public function setContribuinte(array $contribuinte = array())
    {
        // validation for constraint: array
        if ('' !== ($contribuinteArrayErrorMessage = self::validateContribuinteForArrayConstraintsFromSetContribuinte($contribuinte))) {
            throw new \InvalidArgumentException($contribuinteArrayErrorMessage, __LINE__);
        }
        $this->contribuinte = $contribuinte;
        return $this;
    }
    /**
     * Add item to contribuinte value
     * @throws \InvalidArgumentException
     * @param \IFT_IVA\StructType\IFT_IVAContribuinte $item
     * @return \IFT_IVA\StructType\IFT_IVAInformacaoSubmissao
     */
    public function addToContribuinte(\IFT_IVA\StructType\IFT_IVAContribuinte $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \IFT_IVA\StructType\IFT_IVAContribuinte) {
            throw new \InvalidArgumentException(sprintf('The contribuinte property can only contain items of type \IFT_IVA\StructType\IFT_IVAContribuinte, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->contribuinte[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \IFT_IVA\StructType\IFT_IVAInformacaoSubmissao
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
