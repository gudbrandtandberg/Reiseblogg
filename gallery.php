<?php
    if (isset($_GET["album"])){
        $mappe = "bilder/".$_GET["album"];
    } else {
        $mappe = "bilder/";
    }
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("head.php"); ?>
    <link rel="stylesheet" href="gallerystyle.css">
</head>

<body>
    
    <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-use-bootstrap-modal="false">   
        <!-- The container for the modal slides -->
        <div class="slides"></div>
        <!-- Controls for the borderless lightbox -->
        <h3 class="title"></h3>
        <a class="prev">‹</a>
        <a class="next">›</a>
        <a class="close">×</a>
        <a class="play-pause"></a>
        <ol class="indicator"></ol>
        <!-- The modal dialog, which will be used to wrap the lightbox content -->
        <div class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" aria-hidden="true">&times;</button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body next"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left prev">
                            <i class="glyphicon glyphicon-chevron-left"></i>
                            Previous
                        </button>
                        <button type="button" class="btn btn-primary next">
                            Next
                            <i class="glyphicon glyphicon-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
    <h1 id="header"> Gallery </h1>
    
    <?php include("navmeny.php"); ?>
    
    <div class="container">
        <?php
            //$bilder skal være sortert! funker sånn ca...
            //$bilder = scandir($mappe);
            
            $bilder = array();
            $it = new DirectoryIterator($mappe);
            $it->rewind();
            while ($it->valid()) { 
                $bilder[$it->getFilename()] = $it->getCTime(); 
                $it->next();
            }
        
            arsort($bilder);
            $bilder = array_keys($bilder);  
            
        ?>
        
        <?php if ($mappe == "bilder/") : ?>
        
             <?php foreach ($bilder as $albumnavn): ?>
                <?php if ($albumnavn[0] == "." || $albumnavn == "diverse" || $albumnavn == "matblogg" || $albumnavn == "balikultur") continue;?>
                
                <?php
                    $bildene = scandir($mappe.$albumnavn);
                    $coverbilde = $bildene[5];
                ?>
                
                <div class="col-sm-3" >
                    <a href="gallery.php?album=<?=$albumnavn;?>" class="thumbnail">
                        <div class="galleryphoto mainmenu" style="background-image: url('<?= $mappe.$albumnavn."/".$coverbilde; ?>');">
                            <span class="albumnavn"> <?=$albumnavn;?> </span>
                        </div>
                    </a>
                </div>
                
            <?php endforeach ?>
        
        <?php else: ?>
        
            <?php foreach ($bilder as $albumnavn): ?>
                <?php if ($albumnavn[0] == ".") continue;?>
                
                <div class="col-sm-3">
                    <a href="<?= $mappe."/".$albumnavn; ?>" class="thumbnail" data-gallery>
                        <div class="galleryphoto" style="background-image: url('<?= $mappe."/".$albumnavn; ?>');"></div>
                    </a>
                </div>           
                
            <?php endforeach ?>
        <?php endif; ?>
    </div>
 
    <script src="<?=$blueimp_jquery_js;?>"></script>
    <script src="<?=$bootstrap_image_js;?>"></script>
</body>   
</html>
