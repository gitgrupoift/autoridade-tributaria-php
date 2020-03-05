<?php

namespace IFT_IES\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Submeter ServiceType
 * @package IFT_IES
 * @subpackage Services
 */
class IFT_IESSubmeter extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named submeterDeclaracao
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \IFT_IES\StructType\IFT_IESSubmeterDeclaracaoIESRequest $parameters
     * @return \IFT_IES\StructType\IFT_IESSubmeterDeclaracaoIESResponse|bool
     */
    public function submeterDeclaracao(\IFT_IES\StructType\IFT_IESSubmeterDeclaracaoIESRequest $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->submeterDeclaracao($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \IFT_IES\StructType\IFT_IESSubmeterDeclaracaoIESResponse
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
