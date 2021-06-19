<link rel="stylesheet" href="assets/css/style.css">
<form action="proses3.php" method="POST">
    <h2>INPUT KATEGORI</h2>
    <a href="index.php" class="active">dashboard</a> |
    <a href="index_album.php">Album</a> |
    <a href="index_category.php">Category</a> |
    <a href="index_photos.php">Photos</a> |
    <a href="index_post.php">Post</a> |

    <br>
    <a href="input3.php">Tambah Photos</a> |

    <table>
        <tr>
            <td>ID</td>
            <td><input type="text" name="id"></td>
        </tr>
        <tr>
            <td>DATE</td>
            <td><input type="text" name="date"></td>
        </tr>
        <tr>
            <td>TITLE</td>
            <td><input type="text" name="title"></td>
        </tr>
        <tr>
            <td>TEXT</td>
            <td><input type="text" name="text"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_proses" value="SIMPAN"></td>
        </tr>
    </table>
</form>