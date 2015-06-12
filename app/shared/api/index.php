<?php


require 'Slim/Slim.php';


$app = new Slim();
$app->contentType('text/html; charset=utf-8');


$app->get('/about', 'getAbout');
$app->put('/about', 'updateAbout');
$app->get('/contacto', 'getContacto');
$app->put('/contacto', 'updateContacto');
$app->get('/adopciones', 'getAdopciones');
$app->get('/adopcion/:id', 'getAdopcion');
$app->put('/adopcion/:id', 'updateAdopcion');
$app->delete('/adopcion/:id', 'deleteAdopcion');
$app->post('/adopcion', 'addAdopcion');

$app->get('/galeria', 'getGaleria');
$app->get('/imagen/:id', 'getImagen');
$app->put('/imagen/:id', 'updateImagen');
$app->delete('/imagen/:id', 'deleteImagen');
$app->post('/imagen', 'addImagen');


$app->run();




/*About*/
function getAbout() {
	$sql = "SELECT * FROM about";
	try {
		$db = getConnection();
		$stmt = $db->query($sql);  
		$about = $stmt->fetchObject();
		$db = null;
		echo json_encode($about);
	} catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
}
function updateAbout() {
	$request = Slim::getInstance()->request();
	$body = $request->getBody();
	$about= json_decode($body);
	$sql = "UPDATE about SET definicion=:definicion, fundacion=:fundacion, mision=:mision, vision=:vision,imageLinkDefinicion=:imageLinkDefinicion, imageLinkMision=:imageLinkMision,imageLinkVision=:imageLinkVision WHERE 1";
	try {
		$db = getConnection();
		$stmt = $db->prepare($sql);  
		$stmt->bindParam("definicion", $about->definicion);
		$stmt->bindParam("fundacion", $about->fundacion);
		$stmt->bindParam("mision", $about->mision);
		$stmt->bindParam("vision", $about->vision);
		$stmt->bindParam("imageLinkDefinicion", $about->imageLinkDefinicion);
                $stmt->bindParam("imageLinkMision", $about->imageLinkMision);
                $stmt->bindParam("imageLinkVision", $about->imageLinkVision);
                
                
		$stmt->execute();
		$db = null;
		echo json_encode($about); 
	} catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
}
/*Contacto*/
function getContacto() {
	$sql = "SELECT * FROM contacto";
	try {
		$db = getConnection();
		$stmt = $db->query($sql);  
		$contacto = $stmt->fetchObject();
		$db = null;
		echo json_encode($contacto);
	} catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
}
function updateContacto() {
	$request = Slim::getInstance()->request();
	$body = $request->getBody();
	$contacto= json_decode($body);
	$sql = "UPDATE contacto SET nombre=:nombre, telefono=:telefono, email=:email, ubicacion=:ubicacion, facebookLink=:facebookLink WHERE 1";
	try {
		$db = getConnection();
		$stmt = $db->prepare($sql);  
		$stmt->bindParam("nombre", $contacto->nombre);
		$stmt->bindParam("telefono", $contacto->telefono);
		$stmt->bindParam("email", $contacto->email);
		$stmt->bindParam("ubicacion", $contacto->ubicacion);
		$stmt->bindParam("facebookLink", $contacto->facebookLink);
		$stmt->execute();
		$db = null;
		echo json_encode($contacto); 
	} catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
}


/*Tablero Adopciones*/
function getAdopciones() {
	$sql = "SELECT * FROM adopciones";
	try {
		$db = getConnection();
		$stmt = $db->query($sql);  
		$adopciones = $stmt->fetchAll(PDO::FETCH_OBJ);
		$db = null;
		echo json_encode($adopciones);
	} catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
}

function getAdopcion($id) {
    $sql = "SELECT * FROM adopciones WHERE idAdopcion=$id";
    try {
        $db = getConnection();
        $stmt = $db->query($sql);
        $adopcion = $stmt->fetchObject();
        $db = null;
        echo json_encode($adopcion);
    } catch (PDOException $e) {
        echo '{"error":{"text":' . $e->getMessage() . '}}';
    }
}
function updateAdopcion($id) {
	$request = Slim::getInstance()->request();
	$body = $request->getBody();
	$adopcion= json_decode($body);
	$sql = "UPDATE adopciones SET nombre=:nombre, raza=:raza, ubicacion=:ubicacion, telefono=:telefono, edad=:edad, comentario=:comentario, fecha=:fecha, imageLink=:imageLink WHERE idAdopcion=:id";
	try {
		$db = getConnection();
		$stmt = $db->prepare($sql);
		$stmt->bindParam("nombre", $adopcion->nombre);
		$stmt->bindParam("raza", $adopcion->raza);
		$stmt->bindParam("ubicacion", $adopcion->ubicacion);
		$stmt->bindParam("telefono", $adopcion->telefono);
		$stmt->bindParam("edad", $adopcion->edad);
		$stmt->bindParam("comentario", $adopcion->comentario);
		$stmt->bindParam("fecha", $adopcion->fecha);
		$stmt->bindParam("imageLink", $adopcion->imageLink);
                $stmt->bindParam("id", $id);          
		$stmt->execute();
		$db = null;
		echo json_encode($adopcion); 
	} catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
}
function addAdopcion() {
	$request = Slim::getInstance()->request();
	$body = $request->getBody();
	$adopcion= json_decode($body);
	$sql = "INSERT INTO adopciones  (nombre, raza, ubicacion, telefono, edad, comentario ,fecha, imageLink) VALUES (:nombre, :raza, :ubicacion, :telefono, :edad, :comentario, :fecha, :imageLink)";
	try {
		$db = getConnection();
		$stmt = $db->prepare($sql);
		$stmt->bindParam("nombre", $adopcion->nombre);
		$stmt->bindParam("raza", $adopcion->raza);
		$stmt->bindParam("ubicacion", $adopcion->ubicacion);
		$stmt->bindParam("telefono", $adopcion->telefono);
		$stmt->bindParam("edad", $adopcion->edad);
		$stmt->bindParam("comentario", $adopcion->comentario);
		$stmt->bindParam("fecha", $adopcion->fecha);
		$stmt->bindParam("imageLink", $adopcion->imageLink);
		$stmt->execute();
		$db = null;
		echo json_encode($adopcion); 
	} catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
}
function deleteAdopcion($id) {
	$sql = "DELETE FROM adopciones WHERE idAdopcion=:id";
	try {
		$db = getConnection();
		$stmt = $db->prepare($sql);  
		$stmt->bindParam("id", $id);
		$stmt->execute();
		$db = null;
	} catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
}

/*Galeria*/
function getGaleria() {
	$sql = "SELECT * FROM galeria";
	try {
		$db = getConnection();
		$stmt = $db->query($sql);  
		$galeria = $stmt->fetchAll(PDO::FETCH_OBJ);
		$db = null;
		echo json_encode($galeria);
	} catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
}



function getImagen($id) {
    $sql = "SELECT * FROM galeria WHERE idImagen=$id";
    try {
        $db = getConnection();
        $stmt = $db->query($sql);
        $imagen = $stmt->fetchObject();
        $db = null;
        echo json_encode($imagen);
    } catch (PDOException $e) {
        echo '{"error":{"text":' . $e->getMessage() . '}}';
    }
}
function updateImagen($id) {
	$request = Slim::getInstance()->request();
	$body = $request->getBody();
	$imagen= json_decode($body);
	$sql = "UPDATE galeria SET descripcion=:descripcion, categoria=:categoria, imgURL=:imgURL WHERE idImagen=:id";
	try {
		$db = getConnection();
		$stmt = $db->prepare($sql);
		$stmt->bindParam("descripcion", $imagen->descripcion);
		$stmt->bindParam("categoria", $imagen->categoria);
		$stmt->bindParam("imgURL", $imagen->imgURL);
                $stmt->bindParam("id", $id);          
		$stmt->execute();
		$db = null;
		echo json_encode($imagen); 
	} catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
}
function addImagen() {
	$request = Slim::getInstance()->request();
	$body = $request->getBody();
	$imagen= json_decode($body);
	$sql = "INSERT INTO galeria  (descripcion, categoria, imgURL) VALUES (:descripcion, :categoria, :imgURL)";
	try {
		$db = getConnection();
		$stmt = $db->prepare($sql);
		$stmt->bindParam("descripcion", $imagen->descripcion);
		$stmt->bindParam("categoria", $imagen->categoria);
		$stmt->bindParam("imgURL", $imagen->imgURL);
		$stmt->execute();
		$db = null;
		echo json_encode($imagen); 
	} catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
}
function deleteImagen($id) {
	$sql = "DELETE FROM galeria WHERE idImagen=:id";
	try {
		$db = getConnection();
		$stmt = $db->prepare($sql);  
		$stmt->bindParam("id", $id);
		$stmt->execute();
		$db = null;
	} catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
}

/****** Conexion DB *******/

function getConnection() {
        
        $dbhost = "localhost";
        $dbuser= "ma1793";
        $dbpass= "sistema";
	$dbname="jmontoya";
	$dbh = new PDO("mysql:host=$dbhost;dbname=$dbname;charset=utf8", $dbuser, $dbpass);	
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	return $dbh;
}

