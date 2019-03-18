<?php

        $db = mysqli_connect('localhost','vinu','','Feedback');
        if($db === false){
          die("ERROR: Could not connect. " . mysqli_connect_error());
        }
?>