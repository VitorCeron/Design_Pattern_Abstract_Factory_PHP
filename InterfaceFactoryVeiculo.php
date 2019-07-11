<?php
/**
 * Created by PhpStorm.
 * User: vitor
 * Date: 10/07/2019
 * Time: 21:31
 */

//essa classe serve como um modelo para a classe de fábrica, quais variáveis e métodos ela precisa implementar
interface InterfaceFactoryVeiculo
{
    function criarVeiculo($veiculo);
}