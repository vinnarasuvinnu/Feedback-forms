<?php

        $db = mysqli_connect('localhost','root','','Feedback');
        if($db === false){
          die("ERROR: Could not connect. " . mysqli_connect_error());
        }
?>