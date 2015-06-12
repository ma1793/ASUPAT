<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include '../../shared/web/header/headerCMS.php';
        function endsWith($haystack, $needle) {
    // search forward starting from end minus needle length characters
    return $needle === "" || (($temp = strlen($haystack) - strlen($needle)) >= 0 && strpos($haystack, $needle, $temp) !== FALSE);
    
    }
    
    function borrar($trget){
            unlink($trget);
        }?>

    </head>
    <body>
        
        <script>
		var arr1 = [];
		function show_AddFile() {
                    document.getElementById('addArchivo').style.display = 'inline';
			 
		}
		function hide_AddCurso() {
                    document.getElementById('addCurso').style.display = 'none';
		}
		function evalCod() {
			 
			 document.getElementById('addCurso').style.display = 'none';
		}
	</script>

        <?php include '../../shared/web/menu/menuCMS.php'; ?>

        <div class="container-fluid">

            <div class="row-fluid">
                <?php include '../../shared/web/sidebar/sidebarCMS.php'; ?>
                <div class="span9">
                    <h1 class="page-title">Editar Archivos Educación</h1>
                    <div class="btn-toolbar">
                        <button onclick="show_AddFile()" class="btn btn-primary"><i class="icon-save"></i> Agregar</button>
                        <button class="btn btn-primary"><i class="icon-save"></i> Actualizar</button>

                        
                    </div>
                    <div class="well">
                        <div id="addArchivo" style="display: none;">
                            <form action="upload.php" method="post" enctype="multipart/form-data">
                                El titulo de la entrada es el nombre del archivo. <br>
                                Seleccione el archivo:
                                <input type="file" name="fileToUpload" id="fileToUpload">
                                <input type="submit" value="Upload File" name="submit">
                            </form>
                        </div>
                        <?php
                            $dir    = "../../components/educacion/";
                            $files1 = scandir($dir);
                            foreach($files1 as $directory){
                                if($directory=='.' or $directory=='..' ){
                                }else{
                                    if(endsWith($directory, '.pdf')){
                                        echo '<h2>'.$directory .'</h2>';
                                        echo "<a href=\"delete.php?target=".$dir.$directory."\"><i class=\"icon-remove\"></i> Eliminar</a>";
                                        echo "<a href=\"".$dir.$directory."\"><i class=\"icon-eye-open\"></i> Ver</a>";
                                    }
                                }
                            } 
                        ?>
                     

                    </div>

                    <?php include '../../shared/web/modal/modalCMS.php'; ?>

                </div>
            </div>
            <?php include '../../shared/web/footer/footerCMS.php'; ?>


    </body>
</html>



