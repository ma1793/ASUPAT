<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include '../../shared/web/header/headerCMS.php'; ?>

    </head>
    <body>

        <?php include '../../shared/web/menu/menuCMS.php'; ?>

        <div class="container-fluid">

            <div class="row-fluid">
                <?php include '../../shared/web/sidebar/sidebarCMS.php'; ?>


                <div class="span9">
                    <h1 class="page-title">Editar Mascota en Adopción</h1>
                    <div class="btn-toolbar">
                        <button class="btn btn-primary"><i class="icon-save"></i> Actualizar</button>
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
                                    <label>Raza</label>
                                    <input type="text" value="" >
                                    
                                    <label>Informacíon</label>
                                    <input type="text" value="" >
                                    
                                    <label>Fecha</label>
                                    <input type="date" value="" >
                                </form>
                            </div>
                            <div class="tab-pane fade" id="profile">
                                <form id="tab2">       
                                    <input type="file">
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



