<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> G&S reiseblogg</title>
        
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"> </script>
        <!--<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>-->
        
        <link rel="stylesheet" href="http://blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
        <link rel="stylesheet" href="Bootstrap-Image-Gallery-3.1.3/css/bootstrap-image-gallery.min.css">
    
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
        
        <h1 id="Header"> Gallery </h1>
        
        <ul id="navmenu">
              <li>
                <a href="index.html"> Home </a>
              </li>
              <li>
                <a href="gallery.php"> Gallery </a>
              </li>
              <li>
                <a href="travelitinerary.html"> Itinerary </a>
              </li>
        </ul>
        
        <div class="container">
        <?php
            $mappe = "bilder/arabia";
            $bilder = scandir($mappe);
        ?>
        
            <?php foreach ($bilder as $bilde): ?>
                <? if ($bilde == "." || $bilde == "..") continue;?>
                
                <div class="col-sm-3">
                <a href="<?= $mappe."/".$bilde; ?>" class="thumbnail" data-gallery data-description="hei">
                <div class="galleryphoto" style="background-image: url('<?= $mappe."/".$bilde; ?>');"></div>
                </a>
                </div>           
                
            <?php endforeach ?>
            
        
        
        </div>
     
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
        <!--<script src="Bootstrap-Image-Gallery-3.1.3/js/bootstrap-image-gallery.min.js"></script>        -->
        
    </body>
            
</html>