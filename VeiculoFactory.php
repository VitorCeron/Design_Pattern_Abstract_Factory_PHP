<?php
/**
 * Created by PhpStorm.
 * User: vitor
 * Date: 10/07/2019
 * Time: 21:05
 */

require_once('InterfaceFactoryVeiculo.php');
require_once('CarroFactory.php');
require_once('CaminhaoFactory.php');
require_once('MotoFactory.php');

//essa classe conterá a lógica que vai decidir qual objeto criar de acordo com o parâmetro $veiculo
class VeiculoFactory implements InterfaceFactoryVeiculo
{

    public function criarVeiculo($veiculo)
    {
        if( $veiculo ) {
            if( $veiculo == "carro" ) {
                new CarroFactory();
            } else if ( $veiculo == "caminhao" ) {
                new CaminhaoFactory();
            } else if ( $veiculo == "moto" ) {
                new MotoFactory();
            } else {
                writeln('nao encontrado');
            }
        }
    }

}