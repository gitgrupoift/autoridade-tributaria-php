<?php

namespace IFT_Arrendamento\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for registarDadosContratoRequest StructType
 * @package IFT_Arrendamento
 * @subpackage Structs
 */
class IFT_ArrendamentoRegistarDadosContratoRequest extends AbstractStructBase
{
    /**
     * The nifDeclarante
     * Meta information extracted from the WSDL
     * - base: xs:int
     * - maxOccurs: 1
     * - minOccurs: 1
     * - pattern: \d{9}
     * @var int
     */
    public $nifDeclarante;
    /**
     * The referencia
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 40
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $referencia;
    /**
     * The tipo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $tipo;
    /**
     * The finalidade
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $finalidade;
    /**
     * The dataInicio
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $dataInicio;
    /**
     * The imoveis
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \IFT_Arrendamento\StructType\IFT_ArrendamentoImoveis
     */
    public $imoveis;
    /**
     * The locadores
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \IFT_Arrendamento\StructType\IFT_ArrendamentoLocadores
     */
    public $locadores;
    /**
     * The locatarios
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \IFT_Arrendamento\StructType\IFT_ArrendamentoLocatarios
     */
    public $locatarios;
    /**
     * The valorRenda
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $valorRenda;
    /**
     * The periodoRenda
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $periodoRenda;
    /**
     * The dataTermo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $dataTermo;
    /**
     * The renovavel
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $renovavel;
    /**
     * The valorDespesas
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $valorDespesas;
    /**
     * The valorRendaMaxima
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $valorRendaMaxima;
    /**
     * The locadoresPrevios
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \IFT_Arrendamento\StructType\IFT_ArrendamentoLocadoresPrevios
     */
    public $locadoresPrevios;
    /**
     * The observacoes
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 3000
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $observacoes;
    /**
     * The nifAutorizado
     * Meta information extracted from the WSDL
     * - base: xs:int
     * - maxOccurs: 1
     * - minOccurs: 0
     * - pattern: \d{9}
     * @var int
     */
    public $nifAutorizado;
    /**
     * Constructor method for registarDadosContratoRequest
     * @uses IFT_ArrendamentoRegistarDadosContratoRequest::setNifDeclarante()
     * @uses IFT_ArrendamentoRegistarDadosContratoRequest::setReferencia()
     * @uses IFT_ArrendamentoRegistarDadosContratoRequest::setTipo()
     * @uses IFT_ArrendamentoRegistarDadosContratoRequest::setFinalidade()
     * @uses IFT_ArrendamentoRegistarDadosContratoRequest::setDataInicio()
     * @uses IFT_ArrendamentoRegistarDadosContratoRequest::setImoveis()
     * @uses IFT_ArrendamentoRegistarDadosContratoRequest::setLocadores()
     * @uses IFT_ArrendamentoRegistarDadosContratoRequest::setLocatarios()
     * @uses IFT_ArrendamentoRegistarDadosContratoRequest::setValorRenda()
     * @uses IFT_ArrendamentoRegistarDadosContratoRequest::setPeriodoRenda()
     * @uses IFT_ArrendamentoRegistarDadosContratoRequest::setDataTermo()
     * @uses IFT_ArrendamentoRegistarDadosContratoRequest::setRenovavel()
     * @uses IFT_ArrendamentoRegistarDadosContratoRequest::setValorDespesas()
     * @uses IFT_ArrendamentoRegistarDadosContratoRequest::setValorRendaMaxima()
     * @uses IFT_ArrendamentoRegistarDadosContratoRequest::setLocadoresPrevios()
     * @uses IFT_ArrendamentoRegistarDadosContratoRequest::setObservacoes()
     * @uses IFT_ArrendamentoRegistarDadosContratoRequest::setNifAutorizado()
     * @param int $nifDeclarante
     * @param string $referencia
     * @param string $tipo
     * @param string $finalidade
     * @param string $dataInicio
     * @param \IFT_Arrendamento\StructType\IFT_ArrendamentoImoveis $imoveis
     * @param \IFT_Arrendamento\StructType\IFT_ArrendamentoLocadores $locadores
     * @param \IFT_Arrendamento\StructType\IFT_ArrendamentoLocatarios $locatarios
     * @param float $valorRenda
     * @param string $periodoRenda
     * @param string $dataTermo
     * @param bool $renovavel
     * @param float $valorDespesas
     * @param float $valorRendaMaxima
     * @param \IFT_Arrendamento\StructType\IFT_ArrendamentoLocadoresPrevios $locadoresPrevios
     * @param string $observacoes
     * @param int $nifAutorizado
     */
    public function __construct($nifDeclarante = null, $referencia = null, $tipo = null, $finalidade = null, $dataInicio = null, \IFT_Arrendamento\StructType\IFT_ArrendamentoImoveis $imoveis = null, \IFT_Arrendamento\StructType\IFT_ArrendamentoLocadores $locadores = null, \IFT_Arrendamento\StructType\IFT_ArrendamentoLocatarios $locatarios = null, $valorRenda = null, $periodoRenda = null, $dataTermo = null, $renovavel = null, $valorDespesas = null, $valorRendaMaxima = null, \IFT_Arrendamento\StructType\IFT_ArrendamentoLocadoresPrevios $locadoresPrevios = null, $observacoes = null, $nifAutorizado = null)
    {
        $this
            ->setNifDeclarante($nifDeclarante)
            ->setReferencia($referencia)
            ->setTipo($tipo)
            ->setFinalidade($finalidade)
            ->setDataInicio($dataInicio)
            ->setImoveis($imoveis)
            ->setLocadores($locadores)
            ->setLocatarios($locatarios)
            ->setValorRenda($valorRenda)
            ->setPeriodoRenda($periodoRenda)
            ->setDataTermo($dataTermo)
            ->setRenovavel($renovavel)
            ->setValorDespesas($valorDespesas)
            ->setValorRendaMaxima($valorRendaMaxima)
            ->setLocadoresPrevios($locadoresPrevios)
            ->setObservacoes($observacoes)
            ->setNifAutorizado($nifAutorizado);
    }
    /**
     * Get nifDeclarante value
     * @return int
     */
    public function getNifDeclarante()
    {
        return $this->nifDeclarante;
    }
    /**
     * Set nifDeclarante value
     * @param int $nifDeclarante
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoRegistarDadosContratoRequest
     */
    public function setNifDeclarante($nifDeclarante = null)
    {
        // validation for constraint: int
        if (!is_null($nifDeclarante) && !(is_int($nifDeclarante) || ctype_digit($nifDeclarante))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($nifDeclarante, true), gettype($nifDeclarante)), __LINE__);
        }
        // validation for constraint: pattern(\d{9})
        if (!is_null($nifDeclarante) && !preg_match('/\\d{9}/', $nifDeclarante)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression \d{9}', var_export($nifDeclarante, true)), __LINE__);
        }
        $this->nifDeclarante = $nifDeclarante;
        return $this;
    }
    /**
     * Get referencia value
     * @return string
     */
    public function getReferencia()
    {
        return $this->referencia;
    }
    /**
     * Set referencia value
     * @param string $referencia
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoRegistarDadosContratoRequest
     */
    public function setReferencia($referencia = null)
    {
        // validation for constraint: string
        if (!is_null($referencia) && !is_string($referencia)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referencia, true), gettype($referencia)), __LINE__);
        }
        // validation for constraint: maxLength(40)
        if (!is_null($referencia) && mb_strlen($referencia) > 40) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 40', mb_strlen($referencia)), __LINE__);
        }
        $this->referencia = $referencia;
        return $this;
    }
    /**
     * Get tipo value
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }
    /**
     * Set tipo value
     * @uses \IFT_Arrendamento\EnumType\IFT_ArrendamentoTipo::valueIsValid()
     * @uses \IFT_Arrendamento\EnumType\IFT_ArrendamentoTipo::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $tipo
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoRegistarDadosContratoRequest
     */
    public function setTipo($tipo = null)
    {
        // validation for constraint: enumeration
        if (!\IFT_Arrendamento\EnumType\IFT_ArrendamentoTipo::valueIsValid($tipo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \IFT_Arrendamento\EnumType\IFT_ArrendamentoTipo', is_array($tipo) ? implode(', ', $tipo) : var_export($tipo, true), implode(', ', \IFT_Arrendamento\EnumType\IFT_ArrendamentoTipo::getValidValues())), __LINE__);
        }
        $this->tipo = $tipo;
        return $this;
    }
    /**
     * Get finalidade value
     * @return string
     */
    public function getFinalidade()
    {
        return $this->finalidade;
    }
    /**
     * Set finalidade value
     * @uses \IFT_Arrendamento\EnumType\IFT_ArrendamentoFinalidade::valueIsValid()
     * @uses \IFT_Arrendamento\EnumType\IFT_ArrendamentoFinalidade::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $finalidade
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoRegistarDadosContratoRequest
     */
    public function setFinalidade($finalidade = null)
    {
        // validation for constraint: enumeration
        if (!\IFT_Arrendamento\EnumType\IFT_ArrendamentoFinalidade::valueIsValid($finalidade)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \IFT_Arrendamento\EnumType\IFT_ArrendamentoFinalidade', is_array($finalidade) ? implode(', ', $finalidade) : var_export($finalidade, true), implode(', ', \IFT_Arrendamento\EnumType\IFT_ArrendamentoFinalidade::getValidValues())), __LINE__);
        }
        $this->finalidade = $finalidade;
        return $this;
    }
    /**
     * Get dataInicio value
     * @return string
     */
    public function getDataInicio()
    {
        return $this->dataInicio;
    }
    /**
     * Set dataInicio value
     * @param string $dataInicio
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoRegistarDadosContratoRequest
     */
    public function setDataInicio($dataInicio = null)
    {
        // validation for constraint: string
        if (!is_null($dataInicio) && !is_string($dataInicio)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataInicio, true), gettype($dataInicio)), __LINE__);
        }
        $this->dataInicio = $dataInicio;
        return $this;
    }
    /**
     * Get imoveis value
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoImoveis
     */
    public function getImoveis()
    {
        return $this->imoveis;
    }
    /**
     * Set imoveis value
     * @param \IFT_Arrendamento\StructType\IFT_ArrendamentoImoveis $imoveis
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoRegistarDadosContratoRequest
     */
    public function setImoveis(\IFT_Arrendamento\StructType\IFT_ArrendamentoImoveis $imoveis = null)
    {
        $this->imoveis = $imoveis;
        return $this;
    }
    /**
     * Get locadores value
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoLocadores
     */
    public function getLocadores()
    {
        return $this->locadores;
    }
    /**
     * Set locadores value
     * @param \IFT_Arrendamento\StructType\IFT_ArrendamentoLocadores $locadores
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoRegistarDadosContratoRequest
     */
    public function setLocadores(\IFT_Arrendamento\StructType\IFT_ArrendamentoLocadores $locadores = null)
    {
        $this->locadores = $locadores;
        return $this;
    }
    /**
     * Get locatarios value
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoLocatarios
     */
    public function getLocatarios()
    {
        return $this->locatarios;
    }
    /**
     * Set locatarios value
     * @param \IFT_Arrendamento\StructType\IFT_ArrendamentoLocatarios $locatarios
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoRegistarDadosContratoRequest
     */
    public function setLocatarios(\IFT_Arrendamento\StructType\IFT_ArrendamentoLocatarios $locatarios = null)
    {
        $this->locatarios = $locatarios;
        return $this;
    }
    /**
     * Get valorRenda value
     * @return float
     */
    public function getValorRenda()
    {
        return $this->valorRenda;
    }
    /**
     * Set valorRenda value
     * @param float $valorRenda
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoRegistarDadosContratoRequest
     */
    public function setValorRenda($valorRenda = null)
    {
        // validation for constraint: float
        if (!is_null($valorRenda) && !(is_float($valorRenda) || is_numeric($valorRenda))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($valorRenda, true), gettype($valorRenda)), __LINE__);
        }
        $this->valorRenda = $valorRenda;
        return $this;
    }
    /**
     * Get periodoRenda value
     * @return string
     */
    public function getPeriodoRenda()
    {
        return $this->periodoRenda;
    }
    /**
     * Set periodoRenda value
     * @uses \IFT_Arrendamento\EnumType\IFT_ArrendamentoPeriodoRenda::valueIsValid()
     * @uses \IFT_Arrendamento\EnumType\IFT_ArrendamentoPeriodoRenda::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $periodoRenda
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoRegistarDadosContratoRequest
     */
    public function setPeriodoRenda($periodoRenda = null)
    {
        // validation for constraint: enumeration
        if (!\IFT_Arrendamento\EnumType\IFT_ArrendamentoPeriodoRenda::valueIsValid($periodoRenda)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \IFT_Arrendamento\EnumType\IFT_ArrendamentoPeriodoRenda', is_array($periodoRenda) ? implode(', ', $periodoRenda) : var_export($periodoRenda, true), implode(', ', \IFT_Arrendamento\EnumType\IFT_ArrendamentoPeriodoRenda::getValidValues())), __LINE__);
        }
        $this->periodoRenda = $periodoRenda;
        return $this;
    }
    /**
     * Get dataTermo value
     * @return string|null
     */
    public function getDataTermo()
    {
        return $this->dataTermo;
    }
    /**
     * Set dataTermo value
     * @param string $dataTermo
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoRegistarDadosContratoRequest
     */
    public function setDataTermo($dataTermo = null)
    {
        // validation for constraint: string
        if (!is_null($dataTermo) && !is_string($dataTermo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataTermo, true), gettype($dataTermo)), __LINE__);
        }
        $this->dataTermo = $dataTermo;
        return $this;
    }
    /**
     * Get renovavel value
     * @return bool|null
     */
    public function getRenovavel()
    {
        return $this->renovavel;
    }
    /**
     * Set renovavel value
     * @param bool $renovavel
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoRegistarDadosContratoRequest
     */
    public function setRenovavel($renovavel = null)
    {
        // validation for constraint: boolean
        if (!is_null($renovavel) && !is_bool($renovavel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($renovavel, true), gettype($renovavel)), __LINE__);
        }
        $this->renovavel = $renovavel;
        return $this;
    }
    /**
     * Get valorDespesas value
     * @return float|null
     */
    public function getValorDespesas()
    {
        return $this->valorDespesas;
    }
    /**
     * Set valorDespesas value
     * @param float $valorDespesas
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoRegistarDadosContratoRequest
     */
    public function setValorDespesas($valorDespesas = null)
    {
        // validation for constraint: float
        if (!is_null($valorDespesas) && !(is_float($valorDespesas) || is_numeric($valorDespesas))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($valorDespesas, true), gettype($valorDespesas)), __LINE__);
        }
        $this->valorDespesas = $valorDespesas;
        return $this;
    }
    /**
     * Get valorRendaMaxima value
     * @return float|null
     */
    public function getValorRendaMaxima()
    {
        return $this->valorRendaMaxima;
    }
    /**
     * Set valorRendaMaxima value
     * @param float $valorRendaMaxima
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoRegistarDadosContratoRequest
     */
    public function setValorRendaMaxima($valorRendaMaxima = null)
    {
        // validation for constraint: float
        if (!is_null($valorRendaMaxima) && !(is_float($valorRendaMaxima) || is_numeric($valorRendaMaxima))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($valorRendaMaxima, true), gettype($valorRendaMaxima)), __LINE__);
        }
        $this->valorRendaMaxima = $valorRendaMaxima;
        return $this;
    }
    /**
     * Get locadoresPrevios value
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoLocadoresPrevios|null
     */
    public function getLocadoresPrevios()
    {
        return $this->locadoresPrevios;
    }
    /**
     * Set locadoresPrevios value
     * @param \IFT_Arrendamento\StructType\IFT_ArrendamentoLocadoresPrevios $locadoresPrevios
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoRegistarDadosContratoRequest
     */
    public function setLocadoresPrevios(\IFT_Arrendamento\StructType\IFT_ArrendamentoLocadoresPrevios $locadoresPrevios = null)
    {
        $this->locadoresPrevios = $locadoresPrevios;
        return $this;
    }
    /**
     * Get observacoes value
     * @return string|null
     */
    public function getObservacoes()
    {
        return $this->observacoes;
    }
    /**
     * Set observacoes value
     * @param string $observacoes
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoRegistarDadosContratoRequest
     */
    public function setObservacoes($observacoes = null)
    {
        // validation for constraint: string
        if (!is_null($observacoes) && !is_string($observacoes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($observacoes, true), gettype($observacoes)), __LINE__);
        }
        // validation for constraint: maxLength(3000)
        if (!is_null($observacoes) && mb_strlen($observacoes) > 3000) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 3000', mb_strlen($observacoes)), __LINE__);
        }
        $this->observacoes = $observacoes;
        return $this;
    }
    /**
     * Get nifAutorizado value
     * @return int|null
     */
    public function getNifAutorizado()
    {
        return $this->nifAutorizado;
    }
    /**
     * Set nifAutorizado value
     * @param int $nifAutorizado
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoRegistarDadosContratoRequest
     */
    public function setNifAutorizado($nifAutorizado = null)
    {
        // validation for constraint: int
        if (!is_null($nifAutorizado) && !(is_int($nifAutorizado) || ctype_digit($nifAutorizado))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($nifAutorizado, true), gettype($nifAutorizado)), __LINE__);
        }
        // validation for constraint: pattern(\d{9})
        if (!is_null($nifAutorizado) && !preg_match('/\\d{9}/', $nifAutorizado)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression \d{9}', var_export($nifAutorizado, true)), __LINE__);
        }
        $this->nifAutorizado = $nifAutorizado;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoRegistarDadosContratoRequest
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
