<?php

namespace IFT_Art78\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Pesquisar ServiceType
 * @package IFT_Art78
 * @subpackage Services
 */
class IFT_Art78Pesquisar extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named PesquisarPedidoCobrancaDuvidosa
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \IFT_Art78\StructType\IFT_Art78PesquisarPedidoCobrancaDuvidosaRequestType $pesquisarPedidoCobrancaDuvidosaRequest
     * @return \IFT_Art78\StructType\IFT_Art78PesquisarPedidoCobrancaDuvidosaResponseType|bool
     */
    public function PesquisarPedidoCobrancaDuvidosa(\IFT_Art78\StructType\IFT_Art78PesquisarPedidoCobrancaDuvidosaRequestType $pesquisarPedidoCobrancaDuvidosaRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->PesquisarPedidoCobrancaDuvidosa($pesquisarPedidoCobrancaDuvidosaRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \IFT_Art78\StructType\IFT_Art78PesquisarPedidoCobrancaDuvidosaResponseType
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
