<!DOCTYPE html>
<html>
    <head>
        <?php include '../../shared/web/header/header.php'; ?>
        <script src="homeAsu.js"></script>
    </head>
    <body id="home">
        <?php include '../../shared/web/menu/menu.php'; ?>
        <div class="ui vertical segment">
            <div class="ui very relaxed stackable page grid">
                <div class="row">
                    <div class="column">
                        <h1 class="center aligned ui header">
                            ¿Qué es es ASUPAT?
                        </h1>
                    </div>
                </div>
                <div class="row">
                    <div class="ten wide column">
                        <h2 class="ui header">Asociación Unidos por los Animales Turrialba</h2>
                        <p>Somos una asociación sin fines de lucro conformado por un grupo de personas, que trabajamos voluntariamente por el bienestar animal, realizando campañas de castración en Turrialba y alrededores, como un intento por reducir la sobrepoblación de animales en nuestras calles.</p>
                        <div class="ui blue button">Más sobre ASUPAT</div>
                    </div>
                    <div class="six wide column">
                        <img class="ui small image" src="../../../assets/images/tDiceNo.jpg">
                    </div>
                </div>
            </div>
        </div>
        <div class="ui vertical orange inverted feature segment">
            <div class="ui centered page grid">
                <div class="fourteen wide column">
                    <div class="ui three column center aligned stackable divided grid">
                        <div class="column">
                            <div class="ui inverted icon header">
                                <i class="student blue icon"></i>
                                Educación
                            </div>
                            <p>Explora el interés de ASUPAT por generar una cultura que proteje a los animales.</p>
                            <p>
                                <a class="ui button" href="..\educacion\educacion.php">
                                    Explorar
                                </a>
                            </p>
                        </div>
                        <div class="column">
                            <div class="ui inverted icon header">
                                <i class="child blue icon"></i>
                                Voluntariado
                            </div>
                            <p>Descubre como puedes apoyar a ASUPAT. Y aprobar tu TCU.</p>
                            <p>
                                <a class="ui white right labeled icon button" href="..\voluntarios\voluntarios.php">
                                    Descubrir
                                    <i class="right chevron icon"></i>
                                </a>
                            </p>
                        </div>
                        <div class="column">
                            <div class="ui inverted icon header">
                                <i class="file image outline blue icon"></i>
                                Galería
                            </div>
                            <p>Mira fotos de eventos de ASUPAT y algunas de sus historias.
                            <p>
                                <a class="ui button" href="..\galeria\galeria.php">
                                    Visitar
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="ui vertical segment">
            <div class="ui stackable center aligned page grid">
                <div class="row">
                    <div class="column">
                        <h1 class="ui header">
                            Encuentranos
                        </h1>
                        <div class="ui horizontal divider"><i class="heart icon"></i></div>
                    </div>
                </div>
                <div class="two column logo row">
                    <div class="column">
                        <div class="ui shape" onclick="javascript:location.href='https://www.facebook.com/pages/Unidos-por-los-animales-Turrialba/108537129198963?fref=ts'">
                            <div class="sides">
                                <div class="side">
                                    <i  class="huge facebook icon"></i>
                                </div>
                                <div class="active side">
                                    <i class="huge facebook square icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                   
                    <div class="column">
                        <div class="ui shape">
                            <div class="sides">
                                <div class="side">
                                    <i class="huge youtube icon"></i>
                                </div>
                                <div class="active side">
                                    <i class="huge youtube square icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

        
        <?php include '../../shared/web/footer/footer.php'; ?>

    </body>
</html>
