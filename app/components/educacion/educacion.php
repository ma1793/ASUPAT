
<!DOCTYPE html>
<html>
<head>
    
    <?php include '../../shared/web/header/header.php';
    function endsWith($haystack, $needle) {
    // search forward starting from end minus needle length characters
    return $needle === "" || (($temp = strlen($haystack) - strlen($needle)) >= 0 && strpos($haystack, $needle, $temp) !== FALSE);
    
    }
    ?>
    <script src="educacion.js"></script>
</head>
<body id="home">
    <!-- Menu -->
    <?php include '../../shared/web/menu/menu.php'; ?>
    
    <div class="ui segment" id="example1" style="width: 100%;">
      
        
        <div class="ui orange inverted piled segment fluid">
            <div class="ui very relaxed stackable page grid">
                <div class="row">
                    <div class="column">
                        <h1 class="center aligned  inverted ui header">
                             Conozca el mundo de los perros
                        </h1>
                    </div>
                </div>
            </div>
            <div id="content">
                <?php
                    $dir    = "../../components/educacion/";
                    $files1 = scandir($dir);
                    foreach($files1 as $directory){
                        if($directory=='.' or $directory=='..' ){
                            
                        }else{
                            if(endsWith($directory, '.pdf')){
                                echo '<h4 class="ui horizontal header divider">';
                                echo '<i class="circular book icon"></i>';
                                echo substr($directory, 0, strlen($directory)-4);
                                echo '</h4>';
                                echo "<embed src=\"".$directory."\"#toolbar=0\" width=\"100%\" height=\"600px\">";
                            }
                        }
                    } 
                ?>
            </div>  
        </div>
    </div>
    
    
     <?php include '../../shared/web/footer/footer.php'; ?>
</body>
</html>

