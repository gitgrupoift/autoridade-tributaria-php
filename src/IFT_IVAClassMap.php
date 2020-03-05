<?php

namespace IFT_IVA;

/**
 * Class which returns the class map definition
 * @package IFT_IVA
 */
class IFT_IVAClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'submeterDeclaracaoPeriodicaIVARequest' => '\\IFT_IVA\\StructType\\IFT_IVASubmeterDeclaracaoPeriodicaIVARequest',
            'submeterDeclaracaoPeriodicaIVAResponse' => '\\IFT_IVA\\StructType\\IFT_IVASubmeterDeclaracaoPeriodicaIVAResponse',
            'validarDeclaracaoPeriodicaIVARequest' => '\\IFT_IVA\\StructType\\IFT_IVAValidarDeclaracaoPeriodicaIVARequest',
            'validarDeclaracaoPeriodicaIVAResponse' => '\\IFT_IVA\\StructType\\IFT_IVAValidarDeclaracaoPeriodicaIVAResponse',
            'AutenticationException' => '\\IFT_IVA\\StructType\\IFT_IVAAutenticationException',
            'AuthenticationFailed' => '\\IFT_IVA\\StructType\\IFT_IVAAuthenticationFailed',
            'informacaoSubmissao' => '\\IFT_IVA\\StructType\\IFT_IVAInformacaoSubmissao',
            'contribuinte' => '\\IFT_IVA\\StructType\\IFT_IVAContribuinte',
            'informacaoAlertas' => '\\IFT_IVA\\StructType\\IFT_IVAInformacaoAlertas',
            'informacaoErros' => '\\IFT_IVA\\StructType\\IFT_IVAInformacaoErros',
            'informacaoErroOuAlerta' => '\\IFT_IVA\\StructType\\IFT_IVAInformacaoErroOuAlerta',
        );
    }
}
