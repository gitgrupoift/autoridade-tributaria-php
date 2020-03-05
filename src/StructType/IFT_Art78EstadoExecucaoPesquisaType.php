<?php

namespace IFT_Art78\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EstadoExecucaoPesquisaType StructType
 * @package IFT_Art78
 * @subpackage Structs
 */
class IFT_Art78EstadoExecucaoPesquisaType extends AbstractStructBase
{
    /**
     * The CodigoEstado
     * Meta information extracted from the WSDL
     * - documentation: Codigo indicado do estado da execucao. Valores possiveis na gama reservada para códigos genéricos: 0 - Sucesso: Pedido submetido com sucesso; 1 – Preenchimento do header (nif do credor) inválido; 2 – Mensagens de validação
     * de parâmetros de entrada; 3 – O sub-utilizador não tem perfil para realizar pedidos de regularização de IVA por Web Service; 99 – Erro de sistema. Por favor volte a tentar mais tarde. | Código indicado do estado da execucao. Valores
     * possiveis na gama reservada para códigos genéricos: 0 - Sucesso: Pesquisa efetuada com sucesso; 1 – O número de pedido introduzido é inválido; 99 – Erro de sistema. Por favor volte a tentar mais tarde.
     * - base: xs:int
     * - maxInclusive: 999
     * - minInclusive: 000
     * @var int
     */
    public $CodigoEstado;
    /**
     * The DescricaoEstado
     * Meta information extracted from the WSDL
     * - documentation: Descrição do estado da execução. A utilização desta estrutura prevê que, nas situações de erro, seja indicado detalhadamente qual o motivo do erro no campo DescricaoEstado. Por exemplo, no caso do erro '001 - Erro: O número
     * de pedido introduzido é inválido' a descrição do erro deve indicar qual o nome do campo que falhou na validação.
     * @var string
     */
    public $DescricaoEstado;
    /**
     * Constructor method for EstadoExecucaoPesquisaType
     * @uses IFT_Art78EstadoExecucaoPesquisaType::setCodigoEstado()
     * @uses IFT_Art78EstadoExecucaoPesquisaType::setDescricaoEstado()
     * @param int $codigoEstado
     * @param string $descricaoEstado
     */
    public function __construct($codigoEstado = null, $descricaoEstado = null)
    {
        $this
            ->setCodigoEstado($codigoEstado)
            ->setDescricaoEstado($descricaoEstado);
    }
    /**
     * Get CodigoEstado value
     * @return int|null
     */
    public function getCodigoEstado()
    {
        return $this->CodigoEstado;
    }
    /**
     * Set CodigoEstado value
     * @param int $codigoEstado
     * @return \IFT_Art78\StructType\IFT_Art78EstadoExecucaoPesquisaType
     */
    public function setCodigoEstado($codigoEstado = null)
    {
        // validation for constraint: int
        if (!is_null($codigoEstado) && !(is_int($codigoEstado) || ctype_digit($codigoEstado))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($codigoEstado, true), gettype($codigoEstado)), __LINE__);
        }
        // validation for constraint: maxInclusive(999)
        if (!is_null($codigoEstado) && $codigoEstado > 999) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 999', var_export($codigoEstado, true)), __LINE__);
        }
        // validation for constraint: minInclusive(000)
        if (!is_null($codigoEstado) && $codigoEstado < 000) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 000', var_export($codigoEstado, true)), __LINE__);
        }
        $this->CodigoEstado = $codigoEstado;
        return $this;
    }
    /**
     * Get DescricaoEstado value
     * @return string|null
     */
    public function getDescricaoEstado()
    {
        return $this->DescricaoEstado;
    }
    /**
     * Set DescricaoEstado value
     * @param string $descricaoEstado
     * @return \IFT_Art78\StructType\IFT_Art78EstadoExecucaoPesquisaType
     */
    public function setDescricaoEstado($descricaoEstado = null)
    {
        // validation for constraint: string
        if (!is_null($descricaoEstado) && !is_string($descricaoEstado)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($descricaoEstado, true), gettype($descricaoEstado)), __LINE__);
        }
        $this->DescricaoEstado = $descricaoEstado;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \IFT_Art78\StructType\IFT_Art78EstadoExecucaoPesquisaType
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
