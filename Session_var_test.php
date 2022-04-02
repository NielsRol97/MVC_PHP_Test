<?php

    session_start();

        $_SESSION['username'] = "NielsR97";
        $_SESSION['password'] = "Niels2102";

        echo "</br>";

        if(isset($_SESSION['username']) =="NielsR97" && isset($_SESSION['password']) == "Niels2102") {
            echo "True, correct data";
        }
        else {
            echo "False, incorrect data";
        }
        
        session_destroy();
?>
