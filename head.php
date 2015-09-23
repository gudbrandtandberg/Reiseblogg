<?php
    $offline = true;
    if ($offline == true) {
        $bootstrap_css = "css/bootstrap.min.css";
        $bootstrap_js = "js/bootstrap.min.js";
        $jquery = "js/jquery-1.11.1.min.js";
        $blueimp_css = "css/blueimp-gallery.min.css";
        $blueimp_jquery_js = "js/jquery.blueimp-gallery.js";
        $blueimp_js = "js/blueimp-gallery.js";
        
    } else {
        $bootstrap_css = "http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css";
        $bootstrap_js = "http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js";
        $jquery = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js";
        $blueimp_css = "http://blueimp.github.io/Gallery/css/blueimp-gallery.min.css";
        $blueimp_jquery_js = "http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js";
    }

?>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>G+S</title>

<link rel="stylesheet" href="<?=$bootstrap_css;?>">
<link rel="stylesheet" href="<?=$blueimp_css;?>">
<link rel="stylesheet" href="css/style.css">

<script src="<?=$jquery;?>"></script>
<script src="<?=$bootstrap_js;?>"></script>


