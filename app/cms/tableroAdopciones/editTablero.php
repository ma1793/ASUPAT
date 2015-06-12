<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include '../../shared/web/header/headerCMS.php'; ?>
        <script src="editTablero.js"></script>
    </head>
    <body>

        <?php include '../../shared/web/menu/menuCMS.php'; ?>

        <div class="container-fluid">

            <div class="row-fluid">
                <?php include '../../shared/web/sidebar/sidebarCMS.php'; ?>


                <div class="span9">
                    <h1 class="page-title">Editar Mascota en Adopción</h1>
                    <div class="btn-toolbar">
                        <button  onclick="updateAdopcion()" class="btn btn-primary"><i class="icon-save" ></i> Actualizar</button>
                        <button  onclick="addAdopcion()" class="btn btn-primary"><i class="icon-save" ></i> Guardar</button>
                        <a href="#myModal" data-toggle="modal" class="btn">Eliminar</a>
                        <div class="btn-group">
                        </div>
                    </div>
                    <div class="well">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#home" data-toggle="tab">Información de la Mascota</a></li>
                            <li><a href="#profile" data-toggle="tab">Archivo Fotografía</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane active in" id="home">
                                <form id="tab">          
                                    <label>Nombre</label>
                                    <input type="text" id="ID_adopcion_nombre" >
                                    
                                    <label>Raza</label>
                                    <input type="text" id="ID_adopcion_raza" >
                                    
                                    <label>Ubicacion</label>
                                    <input type="text" id="ID_adopcion_ubicacion">
                                    
                                    <label>Telefono</label>
                                    <input type="text" id="ID_adopcion_telefono" >
                                    
                                    <label>Edad</label>
                                    <input type="text" id="ID_adopcion_edad" >
                                    
                                    <label>Fecha</label>
                                    <input type="date" id="ID_adopcion_fecha" >
                                    
                                    <label>Comentario</label>
                                    <textarea id="ID_adopcion_comentario" rows="3" style="width: 75%;">
                                    </textarea>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="profile">
                                <form id="tab2"> 
                                    <label>Link Imagen</label>
                                    <input type="text" value="" id="ID_adopcion_imageLink" style="width: 75%;">
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



