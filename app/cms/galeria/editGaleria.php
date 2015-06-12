<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include '../../shared/web/header/headerCMS.php'; ?>
        <script src="editGaleria.js"></script>
    </head>
    <body>

        <?php include '../../shared/web/menu/menuCMS.php'; ?>

        <div class="container-fluid">

            <div class="row-fluid">
                <?php include '../../shared/web/sidebar/sidebarCMS.php'; ?>


                <div class="span9">
                    <h1 class="page-title">Editar Imagen</h1>
                    <div class="btn-toolbar">
                        <button  onclick="updateImagen()" class="btn btn-primary"><i class="icon-save" ></i> Actualizar</button>
                        <button  onclick="addImagen()" class="btn btn-primary"><i class="icon-save" ></i> Guardar</button>
                        <a href="#myModal" data-toggle="modal" class="btn">Eliminar</a>
                        <div class="btn-group">
                        </div>
                    </div>
                    <div class="well">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#home" data-toggle="tab">Información de la Imagen</a></li>
                            <li><a href="#profile" data-toggle="tab">Archivo Fotografía</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane active in" id="home">
                                <form id="tab">          
                                    <label>Descripcion Imagen</label>
                                    <input type="text" id="ID_imagen_descripcion" style="width: 30%;" >
                                    
                                    <label>Categoria</label>
                                    <input type="number" id="ID_imagen_categoria" style="width: 5%;">
                                  
                                </form>
                            </div>
                            <div class="tab-pane fade" id="profile">
                                <form id="tab2"> 
                                    <label>Link Imagen</label>
                                    <input type="text" value="" id="ID_imagen_imgURL" style="width: 75%;">
                                </form>
                            </div>
                        </div>

                    </div>

                    <?php include '../../shared/web/modal/modalCMS.php'; ?>

                </div>
            </div>
            <?php include '../../shared/web/footer/footerCMS.php'; ?>


    </body>
</html>



