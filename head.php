<?php
    $offline = false;
    if ($offline == true) {
        $bootstrap_css = "bootstrap-3.3.5-dist/css/bootstrap.min.css";
        $bootstrap_js = "bootstrap-3.3.5-dist/js/bootstrap.min.js";
        $jquery = "scripts/jquery-1.11.1.min.js";
        $bootstrap_image_css = "Bootstrap-Image-Gallery-3.1.3/css/bootstrap-image-gallery.min.css";
        $bootstrap_image_js = "Bootstrap-Image-Gallery-3.1.3/js/bootstrap-image-gallery.min.js";
        $blueimp_css = "scripts/blueimp-gallery.min.css";
        $blueimp_jquery_js = "scripts/jquery.blueimp-gallery.min.js";
        
    } else {
        $bootstrap_css = "http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css";
        $bootstrap_js = "http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js";
        $jquery = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js";
        $bootstrap_image_css = "Bootstrap-Image-Gallery-3.1.3/css/bootstrap-image-gallery.min.css"; //!!
        $bootstrap_image_js = "Bootstrap-Image-Gallery-3.1.3/js/bootstrap-image-gallery.min.js"; //!!
        $blueimp_css = "http://blueimp.github.io/Gallery/css/blueimp-gallery.min.css";
        $blueimp_jquery_js = "http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js";
    }

?>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>G+S</title>

<link rel="stylesheet" href="<?=$bootstrap_css;?>">    
<link rel="stylesheet" href="<?=$bootstrap_image_css;?>">
<link rel="stylesheet" href="<?=$blueimp_css;?>">
<link rel="stylesheet" href="style.css">

<script src="<?=$jquery;?>"></script>
<script src="<?=$bootstrap_js;?>"></script>


