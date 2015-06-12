<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include '../../shared/web/header/headerCMS.php'; ?>
        <script src="editContacto.js"></script>
    </head>
    <body>
        <?php include '../../shared/web/menu/menuCMS.php'; ?>
        <div class="container-fluid">
            <div class="row-fluid">
                <?php include '../../shared/web/sidebar/sidebarCMS.php'; ?>
                <div class="span9">
                    <h1 class="page-title">Editar Información de Contacto</h1>
                    <div class="btn-toolbar">
                        <button class="btn btn-primary" onclick="updateContacto()"><i class="icon-save"></i> Actualizar</button>
                        
                    </div>
                    <div class="well">
                        
                        <form id="tab">          
                                    <label>Nombre</label>
                                    <input type="text" id="ID_contacto_nombre" style="width: 75%;">
                                    
                                    <label>Ubicación</label>
                                    <input type="text" id="ID_contacto_ubicacion" style="width: 75%;">
                                    
                                    <label>Correo Electrónico</label>
                                    <input type="text" id="ID_contacto_email" style="width: 75%;">
                                    
                                    <label>Teléfono</label>
                                    <input type="text" id="ID_contacto_telefono">
                                    
                                    <label>Facebook</label>
                                    <input type="text" id="ID_contacto_facebookLink" style="width: 75%;">
                        </form>

                    </div>

                    <?php include '../../shared/web/modal/modalCMS.php'; ?>

                </div>
            </div>
            <?php include '../../shared/web/footer/footerCMS.php'; ?>


    </body>
</html>



