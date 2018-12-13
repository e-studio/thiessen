<?php

require_once "models/buscaModel.php";
require_once "models/gestorArticulos.php";

require_once "controllers/template.php";
require_once "controllers/buscaController.php";
require_once "controllers/gestorArticulos.php";

$template = new TemplateController();
$template -> template();