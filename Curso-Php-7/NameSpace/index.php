<?php

require_once ("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Paulo Tiago");
$cad->setEmail("tiago2008.1@hotmail.com");
$cad->setSenha("123456");

$cad->registrarVenda();





