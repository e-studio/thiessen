<?php


require_once "conexion.php";

class Datos extends Conexion{

	#REGISTRO DE USUARIOS
	#-------------------------------------
	public function registroUsuarioModel($datosModel, $tabla){

		#prepare() Prepara una sentencia SQL para ser ejecutada por el método PDOStatement::execute(). La sentencia SQL puede contener cero o más marcadores de parámetros con nombre (:name) o signos de interrogación (?) por los cuales los valores reales serán sustituidos cuando la sentencia sea ejecutada. Ayuda a prevenir inyecciones SQL eliminando la necesidad de entrecomillar manualmente los parámetros.

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (nombre, usuario, password, email, sistema, rol, activo) VALUES (:nombre,:usuario,:password,:email,:sistema,:rol,:activo)");

		#bindParam() Vincula una variable de PHP a un parámetro de sustitución con nombre o de signo de interrogación correspondiente de la sentencia SQL que fue usada para preparar la sentencia.

		$stmt->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":usuario", $datosModel["usuario"], PDO::PARAM_STR);
		$stmt->bindParam(":password", $datosModel["password"], PDO::PARAM_STR);
		$stmt->bindParam(":email", $datosModel["email"], PDO::PARAM_STR);
		$stmt->bindParam(":sistema", $datosModel["sistema"], PDO::PARAM_STR);
		$stmt->bindParam(":rol", $datosModel["rol"], PDO::PARAM_INT);
		$stmt->bindParam(":activo", $datosModel["activo"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "success";

		}

		else{

			return "error";

		}

		$stmt->close();

	}


	#-----------------------------------------------------------------------------------------------------------------------
	#ASIGNA LAS IMAGENES DE UNA PROPIEDAD PARA SER VISTAS EN GALERIA DE IMAGENES
	#-----------------------------------------------------------------------------------------------------------------------

	public function mdlSubeImagenes($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET fotos = :fotos WHERE id = :propiedad");

		$stmt->bindParam(":fotos", $datos["fotos"], PDO::PARAM_STR);
		$stmt->bindParam(":propiedad", $datos["propiedad"], PDO::PARAM_INT);

		if($stmt->execute()){

			return "ok";

		}

		else{

			return "error";

		}
		$stmt->close();

	}







	#LISTA USUARIOS
	#-------------------------------------

	public function mdlListaUsuarios($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT id, nombre, password, email, titulo, foto, telefono FROM $tabla");
		$stmt->execute();

		#fetchAll(): Obtiene todas las filas de un conjunto de resultados asociado al objeto PDOStatement.
		return $stmt->fetchAll();

		$stmt->close();

	}


	#LISTA PROPIEDADES
	#-------------------------------------

	public function mdlListaPropiedades($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY fechaRegistro DESC");
		$stmt->execute();

		#fetchAll(): Obtiene todas las filas de un conjunto de resultados asociado al objeto PDOStatement.
		return $stmt->fetchAll();

		$stmt->close();

	}


	# NUMERO DE PROPIEDADES
	#-------------------------------------

	public function mdlNoProps($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT COUNT(id) as No FROM $tabla");
		$stmt->execute();
		return $stmt->fetch();
		$stmt->close();

	}


	# NUMERO DE USUARIOS REGISTRADOS
	#-------------------------------------

	public function mdlNoUsers($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT COUNT(id) as No FROM $tabla");
		$stmt->execute();
		return $stmt->fetch();
		$stmt->close();

	}

	# LISTA DE VENDEDORES PARA REGISTRO DE PROPIEDAD
	#-------------------------------------

	public function mdlVendedores($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT id, nombre FROM $tabla");
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt->close();

	}




/*=============================================
	REGISTRO DE USUARIO
	=============================================*/

	static public function mdlIngresarUsuario($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, telefono, email, password, personal, titulo, perfil, foto, estado, ultimoLogin, fechaNac, sociales) VALUES (:nombre, :telefono, :email, :password, :personal, :titulo, :perfil, :foto, :estado, :ultimo_login, :fechaNac, :sociales)");

		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
		$stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
		$stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
		$stmt->bindParam(":personal", $datos["personal"], PDO::PARAM_STR);
		$stmt->bindParam(":titulo", $datos["titulo"], PDO::PARAM_STR);
		$stmt->bindParam(":perfil", $datos["perfil"], PDO::PARAM_STR);
		$stmt->bindParam(":foto", $datos["foto"], PDO::PARAM_STR);
		$stmt->bindParam(":estado", $datos["estado"], PDO::PARAM_STR);
		$stmt->bindParam(":ultimo_login", $datos["ultimo_login"], PDO::PARAM_STR);
		$stmt->bindParam(":fechaNac", $datos["fechaNac"], PDO::PARAM_STR);
		$stmt->bindParam(":sociales", $datos["sociales"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";

		}

		$stmt->close();

		$stmt = null;

	}

	/*=============================================
	REGISTRO DE PROPERTY
	=============================================*/

	static public function mdlIngresarProperty($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, telefono, email, password, personal, titulo, perfil, foto, estado, ultimoLogin, fechaNac, sociales) VALUES (:nombre, :telefono, :email, :password, :personal, :titulo, :perfil, :foto, :estado, :ultimo_login, :fechaNac, :sociales)");

		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
		$stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
		$stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
		$stmt->bindParam(":personal", $datos["personal"], PDO::PARAM_STR);
		$stmt->bindParam(":titulo", $datos["titulo"], PDO::PARAM_STR);
		$stmt->bindParam(":perfil", $datos["perfil"], PDO::PARAM_STR);
		$stmt->bindParam(":foto", $datos["foto"], PDO::PARAM_STR);
		$stmt->bindParam(":estado", $datos["estado"], PDO::PARAM_STR);
		$stmt->bindParam(":ultimo_login", $datos["ultimo_login"], PDO::PARAM_STR);
		$stmt->bindParam(":fechaNac", $datos["fechaNac"], PDO::PARAM_STR);
		$stmt->bindParam(":sociales", $datos["sociales"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";

		}

		$stmt->close();

		$stmt = null;

	}


	/*=============================================
	ACTUALIZA USUARIO
	=============================================*/

	static public function mdlActualizaUsuario($datos, $tabla){

		 $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre=:nombre, telefono=:telefono, email=:email, password=:password, personal=:personal, titulo=:titulo, perfil=:perfil, foto=:foto, estado=:estado, ultimoLogin=:ultimoLogin, fechaNac=:fechaNac, sociales=:sociales WHERE id=:id");

		$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
		$stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
		$stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
		$stmt->bindParam(":personal", $datos["personal"], PDO::PARAM_STR);
		$stmt->bindParam(":titulo", $datos["titulo"], PDO::PARAM_STR);
		$stmt->bindParam(":perfil", $datos["perfil"], PDO::PARAM_STR);
		$stmt->bindParam(":foto", $datos["foto"], PDO::PARAM_STR);
		$stmt->bindParam(":estado", $datos["estado"], PDO::PARAM_STR);
		$stmt->bindParam(":ultimoLogin", $datos["ultimoLogin"], PDO::PARAM_STR);
		$stmt->bindParam(":fechaNac", $datos["fechaNac"], PDO::PARAM_STR);
		$stmt->bindParam(":sociales", $datos["sociales"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";

		}

		$stmt->close();

		$stmt = null;

	}


	/*=============================================
	REGISTRO DE PROPIEDADES
	=============================================*/

	static public function mdlIngresarPropiedad($tabla, $datos){

		if ($datos["destacada"] == 1) {$dest = 1;}
		else {$dest=0;}

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (destacada, titulo, status, precio, categoria, areaTerreno, areaConstruccion, habitaciones, banos, direccion, ciudad, estado, CP, fotoPrincipal, detalles, condVenta, caracteristicas, vendedor) VALUES (:destacada, :nombre, :status, :precio, :categoria, :mtsTerreno, :mtsConstruccion, :habitaciones, :banos, :direccion, :ciudad, :estado, :CP, :foto, :detalles, :condiciones, :caract, :agenteID)");

		$stmt->bindParam(":destacada", $dest, PDO::PARAM_INT);
		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":status", $datos["status"], PDO::PARAM_STR);
		$stmt->bindParam(":precio", $datos["precio"], PDO::PARAM_STR);
		$stmt->bindParam(":categoria", $datos["categoria"], PDO::PARAM_STR);
		$stmt->bindParam(":mtsTerreno", $datos["mtsTerreno"], PDO::PARAM_STR);
		$stmt->bindParam(":mtsConstruccion", $datos["mtsConstruccion"], PDO::PARAM_STR);
		$stmt->bindParam(":habitaciones", $datos["habitaciones"], PDO::PARAM_STR);
		$stmt->bindParam(":banos", $datos["banos"], PDO::PARAM_STR);
		$stmt->bindParam(":direccion", $datos["direccion"], PDO::PARAM_STR);
		$stmt->bindParam(":ciudad", $datos["ciudad"], PDO::PARAM_STR);
		$stmt->bindParam(":estado", $datos["estado"], PDO::PARAM_STR);
		$stmt->bindParam(":CP", $datos["CP"], PDO::PARAM_INT);

		$stmt->bindParam(":foto", $datos["foto"], PDO::PARAM_STR);

		$stmt->bindParam(":detalles", $datos["detalles"], PDO::PARAM_STR);
		$stmt->bindParam(":condiciones", $datos["condiciones"], PDO::PARAM_STR);
		$stmt->bindParam(":caract", $datos["caract"], PDO::PARAM_STR);
		$stmt->bindParam(":agenteID", $datos["agenteID"], PDO::PARAM_INT);



		if($stmt->execute()){

			return "ok";

		}else{

			return "error";

		}

		$stmt->close();

		$stmt = null;

	}


	/*=============================================
	ACTUALIZA PROPIEDADES
	=============================================*/

	static public function mdlActualizarPropiedad($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET destacada=:destacada, titulo=:nombre, status=:status, precio=:precio, categoria=:categoria, areaTerreno=:mtsTerreno, areaConstruccion=:mtsConstruccion, habitaciones=:habitaciones, banos=:banos, direccion=:direccion, ciudad=:ciudad, estado=:estado, CP=:CP, fotoPrincipal=:fotoPrincipal, detalles=:detalles, condVenta=:condiciones, caracteristicas=:caract, vendedor=:agenteID WHERE id = :id");

		$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
		$stmt->bindParam(":destacada", $datos["destacada"], PDO::PARAM_INT);
		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":status", $datos["status"], PDO::PARAM_STR);
		$stmt->bindParam(":precio", $datos["precio"], PDO::PARAM_STR);
		$stmt->bindParam(":categoria", $datos["categoria"], PDO::PARAM_STR);
		$stmt->bindParam(":mtsTerreno", $datos["mtsTerreno"], PDO::PARAM_STR);
		$stmt->bindParam(":mtsConstruccion", $datos["mtsConstruccion"], PDO::PARAM_STR);
		$stmt->bindParam(":habitaciones", $datos["habitaciones"], PDO::PARAM_STR);
		$stmt->bindParam(":banos", $datos["banos"], PDO::PARAM_STR);
		$stmt->bindParam(":direccion", $datos["direccion"], PDO::PARAM_STR);
		$stmt->bindParam(":ciudad", $datos["ciudad"], PDO::PARAM_STR);
		$stmt->bindParam(":estado", $datos["estado"], PDO::PARAM_STR);
		$stmt->bindParam(":CP", $datos["CP"], PDO::PARAM_STR);
		$stmt->bindParam(":fotoPrincipal", $datos["fotoPrincipal"], PDO::PARAM_STR);
		$stmt->bindParam(":detalles", $datos["detalles"], PDO::PARAM_STR);
		$stmt->bindParam(":condiciones", $datos["condiciones"], PDO::PARAM_STR);
		$stmt->bindParam(":caract", $datos["caract"], PDO::PARAM_STR);
		$stmt->bindParam(":agenteID", $datos["agenteID"], PDO::PARAM_INT);


		if($stmt->execute()){

			return "ok";

		}else{

			return "error";

		}

		$stmt->close();

		$stmt = null;

	}


	#BORRAR USUARIO
	#-------------------------------------
	public function mdlBorrarEmpleado($datosModel,$tabla){
		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");
		$stmt -> bindPARAM(":id",$datosModel, PDO::PARAM_INT);
		if ($stmt->execute()){
			return "success";
		} else {
			return "error";
		}
		$stmt -> close();
	}


	#BORRAR PROPIEDAD
	#-------------------------------------
	public function mdlBorrarPropiedad($datosModel,$tabla){
		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");
		$stmt -> bindPARAM(":id",$datosModel, PDO::PARAM_INT);
		if ($stmt->execute()){
			return "success";
		} else {
			return "error";
		}
		$stmt -> close();
	}


	#BUSCA UN USUARIO
	#-------------------------------------

	public function mdlBuscaEmpleado($usuario, $tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id = :id");

		$stmt->bindParam(":id", $usuario, PDO::PARAM_INT);

		$stmt -> execute();
		return $stmt -> fetch();

		$stmt->close();
	}


	#BUSCA UNA PROPIEDAD
	#-------------------------------------

	public function mdlBuscaPropiedad($usuario, $tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id = :id");

		$stmt->bindParam(":id", $usuario, PDO::PARAM_INT);

		$stmt -> execute();
		return $stmt -> fetch();

		$stmt->close();
	}


	#BUSCA UN USUARIO POR MAIL
	#-------------------------------------

	public function mdlBuscaEmpleadoMail($usuario, $tabla){

		$stmt = Conexion::conectar()->prepare("SELECT nombre, password FROM $tabla WHERE email = :email");

		$stmt->bindParam(":email", $usuario, PDO::PARAM_STR);

		$stmt -> execute();
		return $stmt -> fetch();

		$stmt->close();
	}



}