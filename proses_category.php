<?php
        require_once "app/category.php";

        $category = new category ();

        if (isset($_POST['btn_proses'])) {
            $category->input();
            header("location:index_category.php");
        }
        
            if (isset($_POST['btn_update'])){
            $category->update();
            header("location:index_category.php");
            }
            
        
        ?>
        