<?php

namespace IFT_IES;

/**
 * Class which returns the class map definition
 * @package IFT_IES
 */
class IFT_IESClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'submeterDeclaracaoIESRequest' => '\\IFT_IES\\StructType\\IFT_IESSubmeterDeclaracaoIESRequest',
            'submeterDeclaracaoIESResponse' => '\\IFT_IES\\StructType\\IFT_IESSubmeterDeclaracaoIESResponse',
            'validarDeclaracaoIESRequest' => '\\IFT_IES\\StructType\\IFT_IESValidarDeclaracaoIESRequest',
            'validarDeclaracaoIESResponse' => '\\IFT_IES\\StructType\\IFT_IESValidarDeclaracaoIESResponse',
            'AutenticationException' => '\\IFT_IES\\StructType\\IFT_IESAutenticationException',
            'AuthenticationFailed' => '\\IFT_IES\\StructType\\IFT_IESAuthenticationFailed',
            'informacaoSubmissao' => '\\IFT_IES\\StructType\\IFT_IESInformacaoSubmissao',
            'contribuinte' => '\\IFT_IES\\StructType\\IFT_IESContribuinte',
            'dadosPagamento' => '\\IFT_IES\\StructType\\IFT_IESDadosPagamento',
            'informacaoErros' => '\\IFT_IES\\StructType\\IFT_IESInformacaoErros',
            'informacaoErro' => '\\IFT_IES\\StructType\\IFT_IESInformacaoErro',
        );
    }
}
