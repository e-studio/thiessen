<?php

require_once "4dm1n/models/conexion.php";

class buscaModels{

	public function buscaPropiedadesRecientes($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT P.id, P.destacada, P.titulo, P.status, P.precio, P.categoria, P.areaTerreno, P.areaConstruccion, P.habitaciones, P.banos, P.direccion, P.ciudad, P.estado, P.latitud, P.longitud, P.fotoPrincipal, P.fotos, P.detalles, P.caracteristicas, P.vendedor, P.fechaRegistro, U.id as idAgente, U.nombre, U.telefono, U.email, U.password, U.personal, U.titulo as puesto, U.perfil, U.foto, U.estado as activo, U.ultimoLogin, U.fechaNac, U.sociales  FROM $tabla as P, usuarios as U WHERE U.id = P.vendedor AND destacada = 1");

		$stmt->bindParam(":propiedad", $propiedad, PDO::PARAM_INT);

		$stmt->execute();

		return $stmt->fetchAll();

		$stmt->close();

		/*$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE destacada = 1 ORDER BY fechaRegistro DESC");

		$stmt->execute();

		return $stmt->fetchAll();

		$stmt->close();*/

	}


	public function buscaPropiedades($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY destacada DESC, fechaRegistro DESC");

		$stmt->execute();

		return $stmt->fetchAll();

		$stmt->close();

	}

	public function busquedaEspecifica($tabla, $datos){

	/*	$where="";
		if ( $datos["recamaras"] != "Recamaras"){
			$where += "AND habitaciones = :recamaras";
		}
		if ( $datos["banos"] != "Baños"){
			$where += "AND habitaciones = :banos";
		}*/
//status = :statud AND categoria = :tipo AND estado = :estado $where
		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE (precio BETWEEN :min AND :max) AND (status = :status) ORDER BY destacada DESC, fechaRegistro DESC");


		 $stmt->bindParam(":status", $datos["status"], PDO::PARAM_STR);
		// $stmt->bindParam(":tipo", $datos["tipo"], PDO::PARAM_STR);
		// $stmt->bindParam(":recamaras", $datos["recamaras"], PDO::PARAM_STR);
		// $stmt->bindParam(":banos", $datos["banos"], PDO::PARAM_STR);
		// $stmt->bindParam(":estado", $datos["estado"], PDO::PARAM_STR);
		$stmt->bindParam(":min", $datos["min"], PDO::PARAM_STR);
		$stmt->bindParam(":max", $datos["max"], PDO::PARAM_STR);

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

	public function buscaPropiedadesDetalle($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT P.id, P.destacada, P.titulo, P.status, P.precio, P.categoria, P.areaTerreno, P.areaConstruccion, P.habitaciones, P.banos, P.direccion, P.ciudad, P.estado, P.latitud, P.longitud, P.fotoPrincipal, P.fotos, P.detalles, P.caracteristicas, P.vendedor, P.fechaRegistro, U.id as idAgente, U.nombre, U.telefono, U.email, U.password, U.personal, U.titulo as puesto, U.perfil, U.foto, U.estado as activo, U.ultimoLogin, U.fechaNac, U.sociales  FROM $tabla as P, usuarios as U WHERE U.id = P.vendedor");

		$stmt->bindParam(":propiedad", $propiedad, PDO::PARAM_INT);

		$stmt->execute();

		return $stmt->fetchAll();

		$stmt->close();

	}






}