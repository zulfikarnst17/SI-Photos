<link rel="stylesheet" href="assets/css/style.css">
<?php

require_once "app/played.php";

$played = new category();
$rows = $played->tampil();

if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    $played->hapus($id);
    header("location:index2.php");
}

?>
<a href="index.php" class="active">dashboard</a> |
<a href="index_album.php">Album</a> |
<a href="index_category.php">Category</a> |
<a href="index_photos.php">Photos</a> |
<a href="index_post.php">Post</a> |
<br>
<a href="input_category.php">Tambah Category</a> |

<table border="1">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Text</td>
        <td>EDIT</td>
        <td>HAPUS</td>
    </tr>


    <?php foreach ($rows as $row) { ?>

        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['text']; ?></td>
            <td><a href="edit_category.php?id=<?php echo $row['id']; ?>">Edit</a></td>
            <td><a href="index_category.php?hapus=<?php echo $row['id']; ?>">Hapus</a></td>
        </tr>

    <?php } ?>
</table>