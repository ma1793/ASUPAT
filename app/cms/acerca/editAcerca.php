<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include '../../shared/web/header/headerCMS.php'; ?>
        <script src="editAcerca.js"></script>
    </head>
    <body>
        <?php include '../../shared/web/menu/menuCMS.php'; ?>
        <div class="container-fluid">
            <div class="row-fluid">
                <?php include '../../shared/web/sidebar/sidebarCMS.php'; ?>
                <div class="span9">
                    <h1 class="page-title">Editar Información de Acerca de</h1>
                    <div class="btn-toolbar">
                        <button class="btn btn-primary" onclick="updateAbout()"><i class="icon-save"></i> Actualizar</button>
                        
                    </div>
                    <div class="well">
                        
                        <form id="tab">          
                                    <label>Definición</label>
                                    <textarea id="ID_about_definicion" rows="3" style="width: 75%; ">
                                    </textarea>
                                    
                                    <label>Fundación</label>
                                    <textarea id="ID_about_fundacion" rows="3" style="width: 75%;">
                                    </textarea>
                                    
                                    <label>Misión</label>
                                    <textarea id="ID_about_mision" rows="3" style="width: 75%;">
                                    </textarea>
                                    
                                    <label>Visión</label>
                                    <textarea id="ID_about_vision" rows="3" style="width: 75%;">
                                    </textarea>
                                    
                                    <label>Link URL Definición</label>
                                    <input type="text" id="ID_about_imageLinkDefinicion" style="width: 75%;">
                                    
                                    <label>Link URL Misión</label>
                                    <input type="text" id="ID_about_imageLinkMision" style="width: 75%;">
                                    
                                    <label>Link URL Visión</label>
                                    <input type="text" id="ID_about_imageLinkVision" style="width: 75%;">
                        

                    </div>

                    <?php include '../../shared/web/modal/modalCMS.php'; ?>

                </div>
            </div>
            <?php include '../../shared/web/footer/footerCMS.php'; ?>


    </body>
</html>



