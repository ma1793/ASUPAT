
<!DOCTYPE html>
<html>
<head>
    <title>ASUPAT | Educacion</title>
    
    <?php include '../../shared/web/header/header.php'; ?>
    <script src="tienda.js"></script>
</head>
<body id="home">
    <!-- Menu -->
    <?php include '../../shared/web/menu/menu.php'; ?>
    
    <div class="ui top attached tabular menu">
        <a class="active item" data-tab="first">Agendas</a>
        <a class="item" data-tab="second">Planificadores</a>
        <a class="item" data-tab="third">Calendarios</a>
    </div>
    
    <div class="ui bottom attached active tab segment" data-tab="first">
        <div class="ui items">
            
            <div class="item">
                <div class="ui small image">
                    <img src="agenda.jpg">
                </div>
                <div class="content">
                    <div class="header">Arrowhead Valley Camp</div>
                    <div class="meta">
                        <span class="price">$1200</span>
                        <span class="stay">1 Month</span>
                    </div>
                    <div class="description">
                        <p> Doctor of Philosophy (PhD)
                            Master of Arts (MA), thesis-based
                            Master of Science (MSc), thesis-based
                            Please note that specializations are determined by the Supervisory Committee in 
                            consultation with the Director of the Interdisciplinary Graduate Program. 
                            Students are encouraged to select specializations as early as possible, preferably 
                            before beginning their programs of study. 
                        </p>
                    </div>
                    <div class="ui right floated primary button uno" onclick="mostrarForm('form uno agenda')">
                        Comprar
                        <i class="resize vertical icon"></i>
                    </div>
                    
                    <div class="description" id="form uno agenda" style="display: none">
                        <?php include '../../shared/web/form/form.php'; ?>
                    </div>
                </div>
                
            </div>
            
            <h4 class="ui horizontal header divider">
                <i class="circular shop icon"></i>
            </h4>
            
            <div class="item">
                <div class="ui small image">
                    <img src="agenda.jpg">
                </div>
                <div class="content">
                    <div class="header">Arrowhead Valley Camp</div>
                    <div class="meta">
                        <span class="price">$1200</span>
                        <span class="stay">1 Month</span>
                    </div>
                    <div class="description">
                        <p> Doctor of Philosophy (PhD)
                            Master of Arts (MA), thesis-based
                            Master of Science (MSc), thesis-based
                            Please note that specializations are determined by the Supervisory Committee in 
                            consultation with the Director of the Interdisciplinary Graduate Program. 
                            Students are encouraged to select specializations as early as possible, preferably 
                            before beginning their programs of study. 
                        </p>
                    </div>
                    <div class="ui right floated primary button uno" onclick="mostrarForm('form dos agenda')">
                        Comprar
                        <i class="resize vertical icon"></i>
                    </div>
                    
                    <div class="description" id="form dos agenda" style="display: none">
                        <?php include '../../shared/web/form/form.php'; ?>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    
    <div class="ui bottom attached tab segment" data-tab="second">
        
        <div class="ui items">
            
            <div class="item">
                <div class="ui small image">
                    <img src="planificador.jpg">
                </div>
                <div class="content">
                    <div class="header">Arrowhead Valley Camp</div>
                    <div class="meta">
                        <span class="price">$1200</span>
                        <span class="stay">1 Month</span>
                    </div>
                    <div class="description">
                        <p> Doctor of Philosophy (PhD)
                            Master of Arts (MA), thesis-based
                            Master of Science (MSc), thesis-based
                            Please note that specializations are determined by the Supervisory Committee in 
                            consultation with the Director of the Interdisciplinary Graduate Program. 
                            Students are encouraged to select specializations as early as possible, preferably 
                            before beginning their programs of study. 
                        </p>
                    </div>
                    <div class="ui right floated primary button uno" onclick="mostrarForm('form uno planificador')">
                        Comprar
                        <i class="resize vertical icon"></i>
                    </div>
                    
                    <div class="description" id="form uno planificador" style="display: none">
                        <?php include '../../shared/web/form/form.php'; ?>
                    </div>
                </div>
            </div>
            
            <h4 class="ui horizontal header divider">
                <i class="circular shop icon"></i>
            </h4>
            
            <div class="item">
                <div class="ui small image">
                    <img src="planificador.jpg">
                </div>
                <div class="content">
                    <div class="header">Arrowhead Valley Camp</div>
                    <div class="meta">
                        <span class="price">$1200</span>
                        <span class="stay">1 Month</span>
                    </div>
                    <div class="description">
                        <p> Doctor of Philosophy (PhD)
                            Master of Arts (MA), thesis-based
                            Master of Science (MSc), thesis-based
                            Please note that specializations are determined by the Supervisory Committee in 
                            consultation with the Director of the Interdisciplinary Graduate Program. 
                            Students are encouraged to select specializations as early as possible, preferably 
                            before beginning their programs of study. 
                        </p>
                    </div>
                    <div class="ui right floated primary button uno" onclick="mostrarForm('form dos planificador')">
                        Comprar
                        <i class="resize vertical icon"></i>
                    </div>
                    
                    <div class="description" id="form dos planificador" style="display: none">
                        <?php include '../../shared/web/form/form.php'; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ui bottom attached tab segment" data-tab="third">
        
        <div class="ui items">
            
            <div class="item">
                <div class="ui small image">
                    <img src="calendario.jpg">
                </div>
                <div class="content">
                    <div class="header">Arrowhead Valley Camp</div>
                    <div class="meta">
                        <span class="price">$1200</span>
                        <span class="stay">1 Month</span>
                    </div>
                    <div class="description">
                        <p> Doctor of Philosophy (PhD)
                            Master of Arts (MA), thesis-based
                            Master of Science (MSc), thesis-based
                            Please note that specializations are determined by the Supervisory Committee in 
                            consultation with the Director of the Interdisciplinary Graduate Program. 
                            Students are encouraged to select specializations as early as possible, preferably 
                            before beginning their programs of study. 
                        </p>
                    </div>
                    <div class="ui right floated primary button uno" onclick="mostrarForm('form uno calendario')">
                        Comprar
                        <i class="resize vertical icon"></i>
                    </div>
                    
                    <div class="description" id="form uno calendario" style="display: none">
                        <?php include '../../shared/web/form/form.php'; ?>
                    </div>
                </div>
            </div>
            
            <h4 class="ui horizontal header divider">
                <i class="circular shop icon"></i>
            </h4>
            
            <div class="item">
                <div class="ui small image">
                    <img src="calendario.jpg">
                </div>
                <div class="content">
                    <div class="header">Arrowhead Valley Camp</div>
                    <div class="meta">
                        <span class="price">$1200</span>
                        <span class="stay">1 Month</span>
                    </div>
                    <div class="ui right floated primary button uno" onclick="mostrarForm('form dos calendario')">
                        Comprar
                        <i class="resize vertical icon"></i>
                    </div>
                    
                    <div class="description" id="form dos calendario" style="display: none">
                        <?php include '../../shared/web/form/form.php'; ?>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    
    
     <?php include '../../shared/web/footer/footer.php'; ?>
</body>
</html>

