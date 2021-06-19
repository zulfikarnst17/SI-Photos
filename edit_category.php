<link rel="stylesheet" href="assets/css/style.css">
<?php

require_once "app/category.php";

$id = $_GET['id'];

$played = new category();
$row = $category->edit($id);


?>

<form action="proses2.php" method="POST">
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
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>