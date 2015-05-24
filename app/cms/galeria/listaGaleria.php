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
                    <h1 class="page-title">Galería</h1>
                    <div class="btn-toolbar">
                        <button class="btn btn-primary" ><i class="icon-plus"></i> Nueva Foto</button>

                        <div class="btn-group">
                        </div>
                    </div>
                    <div class="well">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Descripción</th>
                                    <th>Categoría</th>
                                    <th>Fecha</th>
                                    <th style="width: 26px;"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Actividad Mensual</td>
                                    <td>Eventos</td>
                                    <td>11-12-2015</td>
                                    <td>
                                        <a href="editGaleria.php"><i class="icon-pencil"></i></a>
                                        <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="pagination">
                        <ul>
                            <li><a href="#">Prev</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">Next</a></li>
                        </ul>
                    </div>

                    <?php include '../../shared/web/modal/modalCMS.php'; ?>
                </div>
            </div>
        </div>
        <?php include '../../shared/web/footer/footerCMS.php'; ?>

    </body>
</html>


