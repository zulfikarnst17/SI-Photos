<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Akademik UIN Sumatera Utara Medan</title>
    <link rel="stylesheet" href="<?php echo ASSET; ?>css/style.css">
</head>
<body>
    <main>
   
    <nav>
        <ul>
            <li>
                <a href="index.php"class="active">Dashboard</a> 
            </li>
            <li>
                <a href="index_album.php">ALBUM</a> 
            </li><li>
                <a href="index_category.php">CATEGORY</a> 
            </li><li>
                <a href="index_photos.php">PHOTOS</a> 
            </li><li>
                <a href="index_post.php">POST</a> 
            </li>
            <li>
                <a href="login_logout.php ">LOGOUT</a> 
            </li>
          
        </ul>
    </nav>
    <section>
    <?php  
    if (isset($_GET['page'])) {
            include $_GET['page'] . ".php";
        } else {
            include "main_dashboard.php ";
        }
        ?>
    </section>
    
    <footer>
        Copyright &copy; 2021 Zulfikar Shidiq
    </footer>
      
   
    </main>
</body>
</html>