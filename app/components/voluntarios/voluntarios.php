<!DOCTYPE html>
<html>
    <head>

        <?php include '../../shared/web/header/header.php'; ?>
        <script src="voluntarios.js"></script>

    </head>
    <body id="home">

        <!-- Menu -->
        <?php include '../../shared/web/menu/menu.php'; ?>

        <div class="ui orange inverted vertical segment">
            <div class="ui very relaxed stackable page grid">
                <div class="row">
                    <div class="column">
                        <h1 class="center aligned ui header inverted">
                            ¿Qué es es ASUPAT?
                        </h1>
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                        <div class="ui items">
                            <div class="item">
                                <div class="image">
                                    <img src="../../../assets/images/wireframe/elliot.jpg">
                                </div>
                                <div class="content">
                                    <a class="header">VOLUNTARIADO PRESENCIAL - VETERINARIA/O, AUXILIAR O TECNICO DE VETERINARIA</a>
                                    <div class="meta">
                                        <span>Descripcion</span>
                                    </div>
                                    <div class="description">
                                        <p>Necesitamos urgentemente de una persona que ayude nuestra veterinaria con las curas, que viva cerca de Tarragona, que venga a echarnos una mano en el día y preferiblemente de forma continuada (dos, tres o mas veces por semana). ¿Quienes somos?
                                            El Hogar ProVegan es una organización sin ánimo de lucro que rescata y recupera animales víctimas de la explotación, educa en el veganismo y lucha por los Derechos Animales y contra el especismo.
                                        </p>
                                    </div>
                                    <div class="ui right floated primary button uno" onclick="mostrarPerfil('perfil uno')">
                                        Me Interesa
                                        <i class="resize vertical icon"></i>
                                    </div>

                                    <h4 class="ui horizontal header divider">
                                        <i class="resize vertical icon"></i>
                                    </h4>
                                    <div class="content" id="perfil uno" style="display: none">
                                        <div class="meta">
                                            <span>Perfil</span>
                                        </div>
                                        <div class="description">
                                            <p>Necesitamos una/un veterinaria/o, o tecnica/o o auxiliar de veterinaria, que nos ayude con las tareas diarias del santuario, que viva por la zona (Tarragona, Marçà) y esté dispuestos a trabajar duro, de forma responsable y comprometida.
                                                Conscientes de que en un Santuario siempre hay movimiento, surgen nuevas situaciones y hay que adaptarse.
                                            </p>
                                        </div>
                                        <?php include '../../shared/web/form/form.php'; ?>
                                    </div>
                                </div>
                            </div>
                          
                            <div class="item">
                                <div class="image">
                                    <img src="../../../assets/images/wireframe/elliot.jpg">
                                </div>
                                <div class="content">
                                    <a class="header">VOLUNTARIADO PRESENCIAL - CUIDADOR DE ANIMALES</a>
                                    <div class="meta">
                                        <span>Descripcion</span>
                                    </div>
                                    <div class="description">
                                        <p>Necesitamos urgentemente de un cuidador de animales, que viva cerca de Tarragona, que venga a echarnos una mano en el día y preferiblemente de forma continuada (dos, tres o mas veces por semana). ¿Quienes somos?
                                            El Hogar ProVegan es una organización sin ánimo de lucro que rescata y recupera animales víctimas de la explotación, educa en el veganismo y lucha por los Derechos Animales y contra el especismo.
                                            El Hogar ProVegan desarrolla, así mismo, una importante labor social divulgativa y de concienciación, llevando a cabo acciones educativas, dirigidas a niños y adultos, que promueven los valores de respeto, justicia e igualdad, haciéndolos extensivos a todos los individuos sin distinción de especie. Para ello, nos servimos de instrumentos específicos diseñados para este fin como son las charlas en centros educativos u ocupacionales, las campañas a pie de calle o la edición de material didáctico propio.
                                        </p>
                                    </div>
                                    <div class="ui right floated primary button" onclick="mostrarPerfil('perfil dos')">
                                        Me Interesa
                                        <i class="resize vertical icon"></i>
                                    </div>



                                    <div class="content" id="perfil dos" style="display: none">
                                        <div class="meta">
                                            <span>Perfil</span>
                                        </div>
                                        <div class="description">
                                            <p>Necesitamos un cuidador de animales, que nos ayude con las tareas diarias del santuario, que viva por la zona (Tarragona, Marçà) y esté dispuestos a trabajar duro, de forma responsable y comprometida.
                                                Conscientes de que en un Santuario siempre hay movimiento, surgen nuevas situaciones y hay que adaptarse.
                                            </p>
                                            <?php include '../../shared/web/form/form.php'; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>




        </div>
        
        
        
        <div class="ui vertical segment">
            <div class="ui very relaxed stackable page grid">
                <div class="row">
                    <div class="column">
                        <h1 class="center aligned ui header">
                            Volutarios Actuales
                        </h1>
                    </div>
                </div>
                <div class="row">
                    <div class="ui column centered grid">
                        <div class="three column centered row">
                            <div class="column">
                                <div class="ui orange cards">
                                    <div class="card">
                                        <a class="image">
                                            <img src="../../../assets/images/wireframe/elliot.jpg">
                                        </a>
                                        <div class="content">
                                            <a class="header">Elliot Fu</a>
                                            <div class="meta">
                                                <a>Friends</a>
                                            </div>
                                            <div class="description">
                                                Elliot Fu is a film-maker from New York.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="ui orange cards">
                                    <div class="card">
                                        <a class="image">
                                            <img src="../../../assets/images/wireframe/elliot.jpg">
                                        </a>
                                        <div class="content">
                                            <a class="header">Elliot Fu</a>
                                            <div class="meta">
                                                <a>Friends</a>
                                            </div>
                                            <div class="description">
                                                Elliot Fu is a film-maker from New York.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="ui orange cards">
                                    <div class="card">
                                        <a class="image">
                                            <img src="../../../assets/images/wireframe/elliot.jpg">
                                        </a>
                                        <div class="content">
                                            <a class="header">Elliot Fu</a>
                                            <div class="meta">
                                                <a>Friends</a>
                                            </div>
                                            <div class="description">
                                                Elliot Fu is a film-maker from New York.
                                            </div>
                                        </div>
                                    </div>
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
