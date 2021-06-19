<?php
        require_once "app/photos.php";

        $photos = new photos();

        if (isset($_POST['btn_proses'])) {
            $photos->input();
            header("location:index3.php");
        }
        
            if (isset($_POST['btn_update'])){
            $photos->update();
            header("location:index3.php");
            }
            
        
        ?>
        