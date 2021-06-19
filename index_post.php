<link rel="stylesheet" href="assets/css/style.css">
<?php

require_once "app/artist.php";

$musik = new post();
$rows = $musik->tampil();

if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    $musik->hapus($id);
    header("location:indexa.php");
}

?>
<a href="index.php" class="active">dashboard</a> |
<a href="index_album.php">Album</a> |
<a href="index_category.php">Category</a> |
<a href="index_photos.php">Photos</a> |
<a href="index_post.php">Post</a> |
<br>
<a href="input_post.php">Tambah Post</a> |

<table border="1">
    <tr>
        <td>ID</td>
        <td>Date</td>
        <td>SLUG</td>
        <td>Title</td>
        <td>Text</td>
        <td>CATEGORY ID</td>
        <td>EDIT</td>
        <td>HAPUS</td>
    </tr>



    <?php foreach ($rows as $row) { ?>

        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['date']; ?></td>
            <td><?php echo $row['slug']; ?></td>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['text']; ?></td>
            <td><?php echo $row['cat_id']; ?></td>
            <td><a href="edit_post.php?id=<?php echo $row['id']; ?>">Edit</a></td>
            <td><a href="index_post.php?hapus=<?php echo $row['id']; ?>">Hapus</a></td>
        </tr>

    <?php } ?>
</table>