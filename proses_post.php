<?php
        require_once "app/post.php";

        $post = new post();

        if (isset($_POST['btn_proses'])) {
            $post->input();
            header("location:index.php");
        }
        
            if (isset($_POST['btn_update'])){
            $post->update();
            header("location:index.php");
            }
            
        
        ?>
        