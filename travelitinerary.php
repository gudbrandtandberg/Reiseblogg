<?php
    //beregner prosentvis tid forløpt
    $drotid = strtotime("8/12/2015");
    $dratid = strtotime("6/1/2016");
    $total_tid = $dratid - $drotid;
    $now = time();
    $ferdig_tid = $now - $drotid;
    $progress = $ferdig_tid/$total_tid * 100;
?>

<!DOCTYPE html>
<html>

    <head>
        <?php include("head.php"); ?>
        <link rel="stylesheet" href="css/mapstyle.css">
    </head>
    
    <body>
        
        <h1 id="header"> Travel Itinerary </h1>
        
        <?php include("navmeny.php"); ?>
        
        <div class="row">
            <table class="progresstable">
                    <tr>
                        <td class="date left-date">
                            <span class="aug">August 2015</span>
                        </td>
                    
                        <td style="width:<?php printf("%.1f", $progress);?>%">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="<?php printf("%.1f", $progress);?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php printf("%.1f", $progress);?>%;">
                                  <?php printf("%.1f", $progress);?>%
                                </div>
                            </div>
                        </td>
                    
                        <td class="date">
                            <span class="jun">June 2016</span>
                        </td>
                    </tr>
            </table>
        </div>
        
        
        <div id="map">
            <div id='travellerspoint-map770196_780867' class='map'>
                <script src='http://www.travellerspoint.com/badges/badge_membermap.cfm?user=Gudbrand&tripid=780867&amp;badgeid=travellerspoint-map770196_780867&amp;height=600&amp;width=1100'></script>
            </div>
        </div>

    </body>
    
</html>