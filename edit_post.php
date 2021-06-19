<link rel="stylesheet" href="assets/css/style.css">
<?php

require_once "app/artist.php";

$id = $_GET['id'];

$musik = new post();
$row = $post->edit($id);


?>

<form action="prosesa.php"  method="POST">
<h2>INPUT KATEGORI</h2>

    <table>
    <tr>
            <td>ID</td>
            <td><input type="text" name="id" value="<?php echo $row['id']; ?>"></td>
        </tr>
        <tr>
            <td>Date</td>
            <td><input type="date" name="date"></td>
        </tr>
        <tr>
            <td>Slug</td>
            <td><input type="text" name="slug"></td>
        </tr>
        <tr>
            <td>Title</td>
            <td><input type="text" name="title"></td>
        </tr>
        <tr>
            <td>Text</td>
            <td><input type="text" name="text"></td>
        </tr>
        <tr>
            <td>Category ID</td>
            <td><input type="text" name="id"></td>
        </tr>
        
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
    </form>