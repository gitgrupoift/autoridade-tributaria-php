<?php

namespace IFT_Art78;

/**
 * Class which returns the class map definition
 * @package IFT_Art78
 */
class IFT_Art78ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'SubmeterPedidoCobrancaDuvidosaRequestType' => '\\IFT_Art78\\StructType\\IFT_Art78SubmeterPedidoCobrancaDuvidosaRequestType',
            'SubmeterPedidoCobrancaDuvidosaResponseType' => '\\IFT_Art78\\StructType\\IFT_Art78SubmeterPedidoCobrancaDuvidosaResponseType',
            'PesquisarPedidoCobrancaDuvidosaRequestType' => '\\IFT_Art78\\StructType\\IFT_Art78PesquisarPedidoCobrancaDuvidosaRequestType',
            'PesquisarPedidoCobrancaDuvidosaResponseType' => '\\IFT_Art78\\StructType\\IFT_Art78PesquisarPedidoCobrancaDuvidosaResponseType',
            'DadosPedidoType' => '\\IFT_Art78\\StructType\\IFT_Art78DadosPedidoType',
            'PedidoType' => '\\IFT_Art78\\StructType\\IFT_Art78PedidoType',
            'Pedido' => '\\IFT_Art78\\StructType\\IFT_Art78Pedido',
            'DetalhePedidoType' => '\\IFT_Art78\\StructType\\IFT_Art78DetalhePedidoType',
            'FaturasType' => '\\IFT_Art78\\StructType\\IFT_Art78FaturasType',
            'FaturaType' => '\\IFT_Art78\\StructType\\IFT_Art78FaturaType',
            'PeriodoType' => '\\IFT_Art78\\StructType\\IFT_Art78PeriodoType',
            'EstadoExecucaoType' => '\\IFT_Art78\\StructType\\IFT_Art78EstadoExecucaoType',
            'EstadoExecucaoPesquisaType' => '\\IFT_Art78\\StructType\\IFT_Art78EstadoExecucaoPesquisaType',
        );
    }
}
