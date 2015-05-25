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
                    <h1 class="page-title">Editar Información de Contacto</h1>
                    <div class="btn-toolbar">
                        <button class="btn btn-primary"><i class="icon-save"></i> Actualizar</button>
                        
                    </div>
                    <div class="well">
                        
                        <form id="tab">          
                                    <label>Nombre</label>
                                    <input type="text" value="" >
                                    
                                    <label>Lozalización</label>
                                    <input type="text" value="" >
                                    
                                    <label>Correo Electrónico</label>
                                    <input type="text" value="" >
                                    
                                    <label>Teléfono</label>
                                    <input type="text" value="" >
                        </form>

                    </div>

                    <?php include '../../shared/web/modal/modalCMS.php'; ?>

                </div>
            </div>
            <?php include '../../shared/web/footer/footerCMS.php'; ?>


    </body>
</html>



