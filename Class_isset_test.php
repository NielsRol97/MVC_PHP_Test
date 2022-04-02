<?php




class personData {

    private $username = "NielsR97";
    private $password = "Niels2102";

     public function data() {
         return $this->username  . " " . $this->password;
     }
}
?>

<html>
    <body>
        <?php
            $p = new personData;

            echo $p->data();
        ?>
    </body>
</html>