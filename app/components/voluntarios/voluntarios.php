<!DOCTYPE html>
<html>
<head>
    <title>ASUPAT | Voluntarios</title>
    
    <?php include '../../shared/web/header/header.php'; ?>
    <script src="voluntarios.js"></script>

</head>
<body id="home">
    
    <!-- Menu -->
    <?php include '../../shared/web/menu/menu.php'; ?>
    
    <div class="ui piled segment">
        <h4 class="ui horizontal header divider">
            <i class="loading circular black doctor icon"></i>
            Actuales voluntarios
        </h4>
        <div class="ui red cards">
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
            <div class="card">
                <a class="image">
                    <img src="../../../assets/images/wireframe/helen.jpg">
                </a>
                <div class="content">
                    <a class="header">Helen Troy</a>
                    <div class="meta">
                        <a>Friends</a>
                    </div>
                    <div class="description">
                        Helen Troy is an archivist living in New York, who enjoys cooking, fine art, and gardening.
                    </div>
                </div>
            </div>
            <div class="card">
                <a class="image">
                    <img src="../../../assets/images/wireframe/jenny.jpg">
                </a>
                <div class="content">
                    <a class="header">Jenny Hess</a>
                    <div class="meta">
                        <a>Friends</a>
                    </div>
                    <div class="description">
                        Jenny is a student studying Media Management at the New School.
                    </div>
                </div>
            </div>
            <div class="card">
                <a class="image">
                    <img src="../../../assets/images/wireframe/stevie.jpg">
                </a>
                <div class="content">
                    <a class="header">Jenny Hess</a>
                    <div class="meta">
                        <a>Friends</a>
                    </div>
                    <div class="description">
                        Jenny is a student studying Media Management at the New School.
                    </div>
                </div>
            </div>
        <div class="card">
            <a class="image">
              <img src="../../../assets/images/wireframe/veronika.jpg">
            </a>
            <div class="content">
                <a class="header">Jenny Hess</a>
                <div class="meta">
                    <a>Friends</a>
                </div>
                <div class="description">
                    Jenny is a student studying Media Management at the New School.
                </div>
            </div>
        </div>
        <div class="card">
            <a class="image">
              <img src="../../../assets/images/wireframe/steve.jpg">
            </a>
            <div class="content">
                <a class="header">Jenny Hess</a>
                <div class="meta">
                    <a>Friends</a>
                </div>
                <div class="description">
                    Jenny is a student studying Media Management at the New School.
                </div>
            </div>
        </div>
    </div>
    </div>
    
    <div class="ui blue form segment">
        <h4 class="ui horizontal header divider">
            <i class="loading circular black users icon"></i>
            Formulario de ingreso
        </h4>
        <form class="ui blue inverted form segment">
            <p>Let's go ahead and get you signed up.</p>
            <div class="two fields">
                <div class="field">
                    <label>Nombre</label>
                    <input placeholder="Nombre" name="first-name" type="text">
                </div>
                <div class="field">
                    <label>Apellidos</label>
                    <input placeholder="Apellidos" name="last-name" type="text">
                </div>
            </div>
            <div class="two fields">
                <div class="inline field">
                    <label>Edad</label>
                    <div class="inline field">
                        <input type="text" name="first-name" placeholder="Edad">
                    </div>
                </div>
                <div class="field">
                    <label>Genero</label>
                    <div class="ui fluid selection dropdown">
                        <input type="hidden" name="gender">
                        <div class="default text">Genero</div>
                        <i class="dropdown icon"></i>
                        <div class="menu">
                            <div class="item" data-value="male">Masculino</div>
                            <div class="item" data-value="female">Femenino</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="inline fields">
                <div class="field">
                    <label>Telefono/Celular</label>
                    <input type="text" placeholder="(xxx)">
                </div>
                <div class="field">
                    <input type="text" placeholder="xxxx">
                </div>
                <div class="field">
                    <input type="text" placeholder="xxxx">
                </div>
            </div>
            <div class="field">
                <label>Biografía</label>
                <textarea></textarea>
             </div>
            <div class="ui inverted black submit button">Submit</div>
        </form>
    </div>
	
   <?php include '../../shared/web/footer/footer.php';?>
</body>
</html>
