<?php

namespace IFT_IES\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Validar ServiceType
 * @package IFT_IES
 * @subpackage Services
 */
class IFT_IESValidar extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named validarDeclaracao
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \IFT_IES\StructType\IFT_IESValidarDeclaracaoIESRequest $parameters
     * @return \IFT_IES\StructType\IFT_IESValidarDeclaracaoIESResponse|bool
     */
    public function validarDeclaracao(\IFT_IES\StructType\IFT_IESValidarDeclaracaoIESRequest $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->validarDeclaracao($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \IFT_IES\StructType\IFT_IESValidarDeclaracaoIESResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
