<!DOCTYPE html>
<html>
    <head>
        <?php include '../../shared/web/header/header.php'; ?>
        <script src="mision_vision.js"></script>
       
    </head>
    <body id="home">
        <?php include '../../shared/web/menu/menu.php'; ?>
        

      <div class="ui orange inverted vertical segment">
            <div class="ui very relaxed stackable page grid">
                <div class="row">
                    <div class="column">
                        <h1 class="center aligned ui header inverted">
                            Misión
                        </h1>
                    </div>
                </div>
                <div class="row">
                    <div class="ten wide column">
                        <div class="ui huge label">
                            <p style="text-align: justify;" id="ID_about_mision"></p>
                        </div>
                    </div>
                    <div class="six wide column">
                        <img class="ui Large circular image" id="ID_about_misionImage" src="">
                    </div>
                </div>
            </div>
        </div>
        
        <div class="ui vertical segment">
            <div class="ui very relaxed stackable page grid">
                <div class="row">
                    <div class="column">
                        <h1 class="center aligned ui header">
                            Visión
                        </h1>
                    </div>
                </div>
                <div class="row">
                    <div class="ten wide column">
                        <div class="ui orange huge label">
                            <p style="text-align: justify;" id="ID_about_vision"></p>
                        </div>
                    </div>
                    <div class="six wide column">
                        <img class="ui Large circular image" id="ID_about_visionImage" src="">
                    </div>
                </div>
            </div>
        </div>



        <?php include '../../shared/web/footer/footer.php'; ?>

    </body>
</html>
