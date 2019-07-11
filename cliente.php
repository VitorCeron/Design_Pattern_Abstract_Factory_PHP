<?php
/**
 * Created by PhpStorm.
 * User: vitor
 * Date: 10/07/2019
 * Time: 21:12
 */

require_once('VeiculoFactory.php');

$veiculo = new VeiculoFactory();
//passar como parâmetro qual classe deverá ser criada
$veiculo->criarVeiculo("caminhao");