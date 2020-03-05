<?php

namespace IFT_Arrendamento;

/**
 * Class which returns the class map definition
 * @package IFT_Arrendamento
 */
class IFT_ArrendamentoClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'registarDadosContratoRequest' => '\\IFT_Arrendamento\\StructType\\IFT_ArrendamentoRegistarDadosContratoRequest',
            'imoveis' => '\\IFT_Arrendamento\\StructType\\IFT_ArrendamentoImoveis',
            'imovel' => '\\IFT_Arrendamento\\StructType\\IFT_ArrendamentoImovel',
            'locadores' => '\\IFT_Arrendamento\\StructType\\IFT_ArrendamentoLocadores',
            'locador' => '\\IFT_Arrendamento\\StructType\\IFT_ArrendamentoLocador',
            'locatarios' => '\\IFT_Arrendamento\\StructType\\IFT_ArrendamentoLocatarios',
            'locatario' => '\\IFT_Arrendamento\\StructType\\IFT_ArrendamentoLocatario',
            'locadoresPrevios' => '\\IFT_Arrendamento\\StructType\\IFT_ArrendamentoLocadoresPrevios',
            'locadorPrevio' => '\\IFT_Arrendamento\\StructType\\IFT_ArrendamentoLocadorPrevio',
            'registarDadosContratoResponse' => '\\IFT_Arrendamento\\StructType\\IFT_ArrendamentoRegistarDadosContratoResponse',
            'erros' => '\\IFT_Arrendamento\\StructType\\IFT_ArrendamentoErros',
            'erro' => '\\IFT_Arrendamento\\StructType\\IFT_ArrendamentoErro',
            'emitirReciboRequest' => '\\IFT_Arrendamento\\StructType\\IFT_ArrendamentoEmitirReciboRequest',
            'herdeiros' => '\\IFT_Arrendamento\\StructType\\IFT_ArrendamentoHerdeiros',
            'herdeiro' => '\\IFT_Arrendamento\\StructType\\IFT_ArrendamentoHerdeiro',
            'emitirReciboResponse' => '\\IFT_Arrendamento\\StructType\\IFT_ArrendamentoEmitirReciboResponse',
            'obterReciboRequest' => '\\IFT_Arrendamento\\StructType\\IFT_ArrendamentoObterReciboRequest',
            'obterReciboResponse' => '\\IFT_Arrendamento\\StructType\\IFT_ArrendamentoObterReciboResponse',
        );
    }
}
