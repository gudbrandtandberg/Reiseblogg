<?php

    if (isset($_POST["send"])){

        $mailinglist = json_decode(file_get_contents("mailinglist.json"));
        
        $tittel = $_POST["tittel"];
        $subject = 'New blog-post from Sarah and Gudbrand - '.$tittel;
        $message = "Check it out at gudbrandogsarah.no!";
        $headers = "From: gudbrandduff@gmail.com\r\n";
        
        foreach ($mailinglist as $mail){
            mail($mail, $subject, $message, $headers);
            echo "sender mail til ".$mail."<br>";
        }

    }
?>

<form method="post">
    <input type="text" name="tittel">
    <input type="submit" value="send" name="send">
</form>