<?php
    if (isset($_GET["album"])){
        $albumvalgt = true;
        $album = $_GET["album"];
        $bildeinfo = json_decode(file_get_contents("bildelister/".$album."bilder.json"));
    } else {
        $albumvalgt = false;
        $albums = Array("bali" => "IMG_2675.jpg", "thailand" => "gate.jpg", "arabia" => "IMG_8045.JPG");
    }
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include("head.php"); ?>
        <link rel="stylesheet" href="css/gallerystyle.css">
    </head>
    
    <body>
        
        <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">   
            <!-- The container for the modal slides -->
            <div class="slides"></div>
            <!-- Controls for the borderless lightbox -->
            <h3 class="title"></h3>
            <a class="prev">‹</a>
            <a class="next">›</a>
            <a class="close">×</a>
            <a class="play-pause"></a>
            <ol class="indicator"></ol>
        </div>
        
        <h1 id="header"> Gallery </h1>
        
        <?php include("navmeny.php"); ?>

        <div class="container">
            
            <?php if (!$albumvalgt) : ?>
                <?php foreach ($albums as $albumnavn => $coverbilde): ?>
                    
                    <div class="col-sm-3" >
                        <a href="gallery.php?album=<?=$albumnavn;?>" class="thumbnail">
                            <div class="galleryphoto mainmenu" style="background-image: url('<?= "bilder/".$albumnavn."/".$coverbilde; ?>');">
                                <span class="albumnavn"> <?=$albumnavn;?> </span>
                            </div>
                        </a>
                    </div>
                    
                <?php endforeach ?>
            
            <?php else: //skal vise frem bildene i $albumnavn ?> 
                <?php foreach ($bildeinfo as $bildenavn => $bildetittel): ?>
                    
                    <div class="col-sm-3">
                        <a href="<?= "bilder/".$album."/".$bildenavn; ?>" class="thumbnail" data-gallery title="<?=$bildetittel;?>">
                            <div class="galleryphoto" style="background-image: url('<?= "bilder/".$album."/".$bildenavn; ?>');"></div>
                        </a>
                    </div>           
                    
                <?php endforeach ?>
            <?php endif; ?>
        </div>
        
        <script src="<?=$blueimp_js;?>"></script>
        <script src="<?=$blueimp_jquery_js;?>"></script>
    </body>   
</html>