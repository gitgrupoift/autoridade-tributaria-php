<?php

namespace IFT_IVA\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Validar ServiceType
 * @package IFT_IVA
 * @subpackage Services
 */
class IFT_IVAValidar extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named validarDeclaracao
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \IFT_IVA\StructType\IFT_IVAValidarDeclaracaoPeriodicaIVARequest $request
     * @return \IFT_IVA\StructType\IFT_IVAValidarDeclaracaoPeriodicaIVAResponse|bool
     */
    public function validarDeclaracao(\IFT_IVA\StructType\IFT_IVAValidarDeclaracaoPeriodicaIVARequest $request)
    {
        try {
            $this->setResult($this->getSoapClient()->validarDeclaracao($request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \IFT_IVA\StructType\IFT_IVAValidarDeclaracaoPeriodicaIVAResponse
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
