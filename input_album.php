<form action="proses1.php" method="POST">
    <h2>INPUT ALBUM</h2>
    <a href="index.php" class="active">dashboard</a> |
    <a href="index_album.php">Album</a> |
    <a href="index_category.php">Category</a> |
    <a href="index_photos.php">Photos</a> |
    <a href="index_post.php">Post</a> |



    <br>
    <a href="input_album.php">Tambah Album</a> |

        <table>
            <tr>
                <td>ID</td>
                <td><input type="text" name="id"></td>
            </tr>
            <tr>
                <td>NAME</td>
                <td><input type="text" name="album_id"></td>
            </tr>
            <tr>
                <td>TEXT</td>
                <td><input type="text" name="text"></td>
            </tr>
            <tr>
                <td>PHOTOS ID</td>
                <td><input type="text" name="photo_id"></td>
            </tr>
            <tr>

            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="btn_proses" value="SIMPAN"></td>
            </tr>
        </table>
</form>