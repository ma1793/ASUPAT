<?php


require 'Slim/Slim.php';


$app = new Slim();
$app->contentType('text/html; charset=utf-8');


$app->get('/about', 'getAbout');
$app->get('/contacto', 'getContacto');

$app->get('/blog', 'getBlog');
$app->get('/blog/comentarios', 'getComentariosBlog');
$app->post('/blog/comentarios', 'addComentario');
$app->get('/proyectos', 'getProyectos');

/*cms*/
$app->get('/proyecto/:id', 'getProyectoById');
//$app->delete('/wines/:id',	'deleteWine');

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





/*Blog*/

function getBlog() {
	$sql = "SELECT * FROM blogs";
	try {
		$db = getConnection();
		$stmt = $db->query($sql);  
		$blog = $stmt->fetchObject();
		$db = null;
		echo json_encode($blog);
	} catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
}
function getComentariosBlog() {
	$sql = "SELECT * FROM comentarios";
	try {
		$db = getConnection();
		$stmt = $db->query($sql);  
		$comentarios = $stmt->fetchAll(PDO::FETCH_OBJ);
		$db = null;
                echo json_encode($comentarios);
	} catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
}

function addComentario() {
	$request = Slim::getInstance()->request();
	$comentario = json_decode($request->getBody());
	$sql = "INSERT INTO comentarios (valor, fecha) VALUES (:valor, :fecha)";
	try {
		$db = getConnection();
		$stmt = $db->prepare($sql);  
		$stmt->bindParam("valor", $comentario->valor);
		$stmt->bindParam("fecha", $comentario->fecha);
		$stmt->execute();
		$comentario->idComentario = $db->lastInsertId();
		$db = null;
		echo json_encode($comentario); 
	} catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
}
/*Proyectos*/
function getProyectos() {
	$sql = "SELECT * FROM proyectos";
	try {
		$db = getConnection();
		$stmt = $db->query($sql);  
		$proyectos = $stmt->fetchAll(PDO::FETCH_OBJ);
		$db = null;
                echo json_encode($proyectos);
	} catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
}

function getProyectoById($id) {
	$sql = "SELECT * FROM proyectos WHERE idProyecto=$id";
	try {
		$db = getConnection();
		$stmt = $db->query($sql);  
		$proyecto = $stmt->fetchObject(); 
		$db = null;
                echo json_encode($proyecto);
	} catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
}





function getConnection() {
        
        $dbhost = "localhost";
        $dbuser= "ma1793";
        $dbpass= "sistema";
	$dbname="jmontoya";
	$dbh = new PDO("mysql:host=$dbhost;dbname=$dbname;charset=utf8", $dbuser, $dbpass);	
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	return $dbh;
}

