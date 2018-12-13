<?php

require_once "4dm1n/models/conexion.php";

class buscaModels{

	public function buscaPropiedades($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY fechaRegistro DESC");

		$stmt->execute();

		return $stmt->fetchAll();

		$stmt->close();

	}

	public function buscaAgentes($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

		$stmt->execute();

		return $stmt->fetchAll();

		$stmt->close();

	}

}