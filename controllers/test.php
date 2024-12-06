<?php

require_once "../controllers/AdministradoresController.php";


$administrador = new Administrador();
$administrador->setNomeAdministrador("Gustavo Anthony");
$administrador->setEmailAdministrador("gasdts18542@gmail.com");
$administrador->setTelefoneAdministrador("34997239960");
$administrador->setSenhaAdministrador("pokemon");
$administrador->setSalario(400.0);
$administrador->setCargaHoraria(40);
$administrador->setDataCriacao();

var_dump($administrador);

$administradorController = new AdministradoresController();
$res = $administradorController->add($administrador);