<?php

require_once "4dm1n/models/conexion.php";

class buscaModels{

	public function buscaPropiedadesRecientes($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE destacada = 1 ORDER BY fechaRegistro DESC");

		$stmt->execute();

		return $stmt->fetchAll();

		$stmt->close();

	}


	public function buscaPropiedades($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY destacada DESC, fechaRegistro DESC");

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

	public function buscaDetalleAgente($agente, $tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id=:agente");

		$stmt->bindParam(":agente", $agente, PDO::PARAM_INT);

		$stmt->execute();

		return $stmt->fetch();

		$stmt->close();

	}


	public function buscaDetallePropiedad($propiedad, $tabla){

		$stmt = Conexion::conectar()->prepare("SELECT P.id, P.titulo, P.status, P.precio, P.categoria, P.areaTerreno, P.areaConstruccion, P.habitaciones, P.banos, P.direccion, P.ciudad, P.estado, P.latitud, P.longitud, P.fotoPrincipal, P.fotos, P.detalles, P.caracteristicas, P.vendedor, P.fechaRegistro, U.id as idAgente, U.nombre, U.telefono, U.email, U.password, U.personal, U.titulo as puesto, U.perfil, U.foto, U.estado as activo, U.ultimoLogin, U.fechaNac, U.sociales  FROM $tabla as P, usuarios as U WHERE P.id=$propiedad AND U.id = P.vendedor");

		$stmt->bindParam(":propiedad", $propiedad, PDO::PARAM_INT);

		$stmt->execute();

		return $stmt->fetch();

		$stmt->close();

	}



}