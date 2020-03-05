<?php

namespace IFT_IVA\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Submeter ServiceType
 * @package IFT_IVA
 * @subpackage Services
 */
class IFT_IVASubmeter extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named submeterDeclaracao
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \IFT_IVA\StructType\IFT_IVASubmeterDeclaracaoPeriodicaIVARequest $request
     * @return \IFT_IVA\StructType\IFT_IVASubmeterDeclaracaoPeriodicaIVAResponse|bool
     */
    public function submeterDeclaracao(\IFT_IVA\StructType\IFT_IVASubmeterDeclaracaoPeriodicaIVARequest $request)
    {
        try {
            $this->setResult($this->getSoapClient()->submeterDeclaracao($request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \IFT_IVA\StructType\IFT_IVASubmeterDeclaracaoPeriodicaIVAResponse
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
