<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include '../../shared/web/header/headerCMS.php'; ?>
        <script src="listaTablero.js"></script>

    </head>
    <body>
        <?php include '../../shared/web/menu/menuCMS.php'; ?>

        <div class="container-fluid">

            <div class="row-fluid">

                <?php include '../../shared/web/sidebar/sidebarCMS.php'; ?>

                <div class="span9">
                    <h1 class="page-title">Tablero de Adopciones</h1>
                    <div class="btn-toolbar">
                        <button onclick="javascript:location.href='../tableroAdopciones/editTablero.php'"  class="btn btn-primary" ><i class="icon-plus"></i> Nueva Adopción</button>
                        <div class="btn-group">
                        </div>
                    </div>
                    <div class="well">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Raza</th>
                                    <th>Ubicacion</th>
                                    <th>Telefono</th>
                                    <th>Edad</th>
                                    <th>Fecha</th>
                                    <th style="width: 26px;"></th>
                                </tr>
                            </thead>
                            <tbody id="ID_adopciones">
                                
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


