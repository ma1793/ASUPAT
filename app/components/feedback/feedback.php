<!DOCTYPE html>
<html>
<head>
    
    <?php include '../../shared/web/header/header.php'; ?>
    <script src="feedback.js"></script>

</head>
<body id="home">
    
    <!-- Menu -->
    <?php include '../../shared/web/menu/menu.php'; ?>
    
    <div class="ui   vertical segment">
        <div class="ui very relaxed stackable page grid">
            <div class="row">
                <div class="column">
                    <div class="ui threaded minimal comments">
                        <h3 class="ui dividing header">FeedBack | Dejanos saber que piensas</h3>
                            <div class="comment">
                                <a class="avatar">
                                    <img src="../../../assets/images/avatar/small/matt.jpg">
                                </a>
                                <div class="content">
                                    <a class="author">Matt</a>s
                                    <div class="metadata">
                                        <span class="date">Today at 5:42PM</span>
                                    </div>
                                    <div class="text">
                                        Muy buena información!! Gracias
                                    </div>
                                    <div class="actions" onclick="reply('reply uno')">
                                        <a class="reply">Reply</a>
                                    </div>
                                    
                                    <div class="content" id="reply uno" style="display: none">
                                        <?php include '../../shared/web/form/replyform.php'; ?>
                                    </div>
                                    
                                </div>
                            </div>
                        <div class="comment">
                            <a class="avatar">
                                <img src="../../../assets/images/avatar/small/elliot.jpg">
                            </a>
                            <div class="content">
                                <a class="author">Elliot Fu</a>
                                <div class="metadata">
                                    <span class="date">Yesterday at 12:30AM</span>
                                </div>
                                <div class="text">
                                    <p>Esta página ha sido muy útil para mi investigación de secundaria acerca de castraciones
                                    además estoy esperando la próxima feria para castrar a mi perrito. Gracias sigan así­</p>
                                </div>
                                <div class="actions" onclick="reply('reply dos')">
                                        <a class="reply">Reply</a>
                                    </div>
                                    
                                    <div class="content" id="reply dos" style="display: none">
                                        <?php include '../../shared/web/form/replyform.php'; ?>
                                    </div>
                            </div>
                            <div class="comments">
                                <div class="comment">
                                    <a class="avatar">
                                        <img src="../../../assets/images/avatar/small/jenny.jpg">
                                    </a>
                                    <div class="content">
                                        <a class="author">Jenny Hess</a>
                                        <div class="metadata">
                                            <span class="date">Just now</span>
                                        </div>
                                        <div class="text">
                                            Mantente pendiente a la página y nuestro Facebook, pronto tendremos una feria,
                                            nos alegra haberte podido ayudar :)
                                        </div>
                                        <div class="actions" onclick="reply('reply dos uno')">
                                            <a class="reply">Reply</a>
                                        </div>

                                        <div class="content" id="reply dos uno" style="display: none">
                                            <?php include '../../shared/web/form/replyform.php'; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comment">
                            <a class="avatar">
                                <img src="../../../assets/images/avatar/small/joe.jpg">
                            </a>
                            <div class="content">
                                <a class="author">Joe Henderson</a>
                                <div class="metadata">
                                    <span class="date">5 days ago</span>
                                </div>
                                <div class="text">
                                    Sigan así ya era hora de que alguien calmara un poco la sobrepoblación de animales en la 
                                    zona, excelentte iniciativa!! Mucho apoyo
                                </div>
                                <div class="actions" onclick="reply('reply tres')">
                                    <a class="reply">Reply</a>
                                </div>

                                <div class="content" id="reply tres" style="display: none">
                                    <?php include '../../shared/web/form/replyform.php'; ?>
                                </div>
                            </div>
                        </div>
                        <h3 class="ui dividing header"> Comenta </h3>
                        <div class="content">
                            <?php include '../../shared/web/form/commentForm.php'; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <?php include '../../shared/web/footer/footer.php'; ?>
</body>
</html>

