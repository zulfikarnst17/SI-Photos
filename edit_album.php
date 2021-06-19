<link rel="stylesheet" href="assets/css/style.css">
<?php

require_once "app/album.php";

$id = $_GET['id'];

$album = new album();
$row = $album->edit($id);


?>

<form action="proses1.php" method="POST">
    <h2>INPUT DATA</h2>

    <table>
        <tr>
            <td>ID</td>
            <td><input type="text" name="id" value="<?php echo $row['id']; ?>"></td>
        </tr>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Text</td>
            <td><input type="text" name="text"></td>
        </tr>
        <tr>    
            <td>Photo Id</td>
            <td><input type="text" name="photo_id"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>